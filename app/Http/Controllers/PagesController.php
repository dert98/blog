<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function vernotas(){
    	$notas = App\Nota::paginate(5);
    	return view ('nosotros',compact('notas'));	
    }
    // no uso el crear era para probar algo
    public function crear(Request $request){
    	return $request->all();
    	//$notanueva = new App\Nota;
    	//$notanueva->nombre = $request->nombre;
    	//$notanueva->descripcion = $request->descripcion;
    	//$notanueva->save();
    	//return view ('nosotros',compact('notas'));	
    }
    
    public function agregar(Request $request){
        // return $request->all();
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);


        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'persona agregada');
    }

    public function login2 (){
        return view ('login2');
    }
    public function detalle ($id){
        $per = App\nota::findOrFail($id);
        return view ('detalle', compact('per'));
    }
   public function modificar ($id){
        $per = App\nota::findOrFail($id);
        return view ('modificar', compact('per'));
    }
    public function update(Request $request, $id){
        
    $personaActualizada = App\Nota::find($id);
    $personaActualizada->nombre = $request->nombre;
    $personaActualizada->descripcion = $request->descripcion;
    $personaActualizada->save();
    return back()->with('mensaje', 'Persona editada!');
    }
    public function eliminar($id){

    $personaEliminar = App\Nota::findOrFail($id);
    $personaEliminar->delete();

    return back()->with('mensaje', 'Persona Eliminada');
    }




    public function welcome(){
		$equipo = ['oscar','alberto'];
    	return view('welcome',['equipo'=>$equipo]);
	}

    public function contacto(){
    	return view('contacto');
    }

    public function login(){
    	return view('login');
    }
}
