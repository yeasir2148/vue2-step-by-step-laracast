
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.JQuery = window.$ = require('jquery');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 class Errors {
    constructor() {
        this.errors = {};
        console.log('initial:' + this.get('name'));
    }

    get(field) {
        if(this.errors[field]) {
            return this.errors[field][0];
        }
    }

    register(errorObject) {
        console.log(errorObject);
        this.errors = errorObject;
    }

    clear(event) {
        delete this.errors[event.target.name];
    }
 }

const app = new Vue({
    el: '#app',

    data: {
        name: '',
        description: '',
        errors: new Errors()
    },

    methods: {
        onSubmit: function() {
            console.log(this.name);
            axios.post('/project', this.$data).then(function(response) {}).catch(function(error) {
                this.errors.register(error.response.data.errors);
            }.bind(this));
        }
    },

    computed: {
        dataOk: function() {
            return this.name && this.description && JQuery.isEmptyObject(this.errors.errors);
        }
    },

});
