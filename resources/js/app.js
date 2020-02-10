require('./bootstrap');
window.Vue = require('vue');
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

require('./components/subscribe-button');

const app = new Vue({
    el: '#app',
});
