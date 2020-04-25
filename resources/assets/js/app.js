require('./bootstrap');

window.Vue = require('vue');
Vue.component('example', require('./components/ExampleComponent.vue').default);

import MyComponent from './MyComponent.vue';

export default {
  name: 'AnotherComponent',
  components: {
    MyComponent,
  }
};