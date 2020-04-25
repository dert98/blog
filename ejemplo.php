<template>
  <div class="tab-pane" id="productos">
    <buscar-producto
      style="margin-bottom: 10px"
      ref="buscarProducto"
      v-show="!readOnly"
      :categorias="categorias"
      :solo-producto="true"
      @productoSeleccionado="productoSeleccionado"
      :handler="handler"
      />
    <table class="table table-condensed table-bordered">
      <thead>
        <tr>
          <th>Código</th>
          <th>Descripción</th>
          <th>Categoría</th>
          <th v-for="atributo of constantes.atributos.producto">
            {{ atributo.nombre }}
          </th>
          <th class="text-right">Costo</th>
          <th v-for="atributo of constantes.atributos.variacion">
            {{ atributo.nombre }}
          </th>
          <th class="text-right">Cantidad</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <template v-for="[producto, detalles] of productos">
          <tr v-for="(detalle, index) of detalles">
            <td v-if="index === 0" :rowspan="detalles.length + 1">
              {{ producto.codigo }}
            </td>
            <td v-if="index === 0" :rowspan="detalles.length + 1">
              {{ producto.descripcion }}
            </td>
            <td v-if="index === 0" :rowspan="detalles.length + 1">
              {{ producto.categoria.nombre }}
            </td>
            <template v-if="index === 0">
              <td v-for="atributo of constantes.atributos.producto" :rowspan="detalles.length + 1">
                {{ producto.atributos[atributo.campo] }}
              </td>
            </template>
            <td class="text-right" v-if="index === 0" :rowspan="detalles.length + 1">
              <span v-if="producto.costo !== null">{{ producto.costo | money }}</span>
            </td>


            <td v-for="atributo of constantes.atributos.variacion">
              {{ detalle.variacion.atributos[atributo.campo] || '(Vacío)' }}
            </td>
            <td class="text-right">{{ accounting.formatNumber(detalle.cantidad) }}</td>


            <td
              class="text-center"
              v-if="index === 0" :rowspan="detalles.length + 1"
              style="width: 1%; white-space: nowrap;"
            >
              <button
                type="button"
                class="btn btn-default btn-xs"
                @click="editarProducto(detalle.variacion.producto)"
                title="Editar ingreso"
              >
                <i class="fa fa-edit"></i>
              </button>
              <a
                class="btn btn-success btn-xs" 
                :href="`/inventario/catalogos/productos/${ detalle.variacion.producto.productoid }/edit`"
                target="_blank"
                title="Editar producto"
              >
                <i class="fa fa-external-link"></i>
              </a>
            </td>
          </tr>
          <tr>
            <th :colspan="constantes.atributos.variacion.length + 1">
              Total producto:
              <span style="float: right">
                {{ accounting.formatNumber(detalles.reduce((carry, item) => carry + item.cantidad, 0)) }}
              </span>
            </th>
          </tr>
        </template>
      </tbody>
      <tfoot>
        <tr>
          <td id="totales" class="text-right" :colspan="4 + constantes.atributos.producto.length + constantes.atributos.variacion.length + 1">
            <strong>Productos: </strong><span>{{ accounting.formatNumber(totales.productos) }}</span>
            <strong>Variaciones: </strong><span>{{ accounting.formatNumber(totales.variaciones) }}</span>
            <strong>Unidades: </strong><span>{{ accounting.formatNumber(totales.unidades) }}</span>
          </td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
</template>

<script>
import Decimal from 'decimal.js'
import accounting from 'accounting'
import axios from 'axios'
import BuscarProducto from 'components/buscar-producto'
import ProductoModal from './producto-modal'
import groupBy from 'group-by-object'
import handle from 'utils/handle-axios-error'

export default {
  components: {
    BuscarProducto
  },
  props: {
    readOnly: {
      type: Boolean,
      required: true
    },
    categorias: {
      type: Array,
      required: true
    },
    monedas: {
      type: Array,
      required: true
    },
    io: {
      type: Object,
      required: true
    },
    ultimoProducto: Object
  },
  data () {
    return {
      accounting
    }
  },
  computed: {
    productos () {
      const detalles = this.io.detalles
        .sort((a, b) => a.created_at.localeCompare(b.created_at))
      return Array.from(groupBy(detalles, d => d.variacion.producto))
        .map(([producto, detalles]) => {
          let costo = null
          if (detalles.length) {
            costo = detalles[0].monto
          }
          return [
            { ...producto, costo },
            detalles
          ]
        })
    },
    totales () {
      return {
        productos: this.productos.length,
        variaciones: this.productos
          .reduce((carry, item) => carry + item[1].length, 0),
        unidades: this.productos
          .reduce((carry, item) => carry + item[1].reduce((carry, item) => carry + item.cantidad, 0), 0)
      }
    }
  },
  methods: {
    async eliminar (item) {
      if (confirm('¿Seguro que desea eliminar el producto?')) {
        await axios
          .delete(`/inventario/ingresos/iodetalles/${ item.detalleid }`)
        this.$emit('modificado')
      }
    },
    async handler (error) {
      if (error.response && error.response.status === 404) {
        if (confirm('El código no se encontró. ¿Desea crear este producto con algunos campos auto-llenados en base al último encontrado?')) {
          let last
          if (this.io.detalles.length) {
            last = this.io.detalles.slice(-1)[0].variacion.producto
          }
          else {
            last = this.ultimoProducto
          }
          if (last.tipo !== 'Producto') {
            throw new Error('No se encontró un producto previo de tipo [Producto].')
          }
          const producto = {
            ...last,
            productoid: undefined,
            codigo: error.response.config.params.codigo,
            precio1: 0,
            precio2: null,
            precio3: null
          }
          const response = await axios.post('/inventario/catalogos/productos', producto)
          this.productoSeleccionado(response.data)
          return true
        }
        else {
          return false
        }
      }
      else {
        handle(error, true)
      }
    },
    async productoSeleccionado (producto) {
      const response = await axios.get('/api/opciones-crear-producto')
      const modal = new ProductoModal({
        propsData: {
          constantes: this.constantes,
          productos: this.productos,
          producto,
          categorias: response.data.categorias,
          opcionesAtributos: response.data.atributos,
          io: this.io,
          readOnly: this.readOnly
        }
      })
      const ok = await modal.show()
      if (ok) {
        this.$emit('modificado')
      }
      this.$refs.buscarProducto.$el.querySelector('input').focus()
    },
    editarProducto (producto) {
      this.$refs.buscarProducto.buscarCodigo(producto.codigo)
    }
  }
}
</script>

<style lang="sass" scoped>
  #totales
    span
      font-size: 1.5em
      &:not(:last-child)
        margin-right: 10px
</style>
