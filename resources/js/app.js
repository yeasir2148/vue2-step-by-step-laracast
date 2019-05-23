
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import router from './routes.js';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 class Errors {
    constructor() {
        this.errors = {};
        // console.log('initial:' + this.get('name'));
    }

    has(field) {
        // console.log('here');
        return this.errors.hasOwnProperty(field);
    }

    get(field) {
        // console.log(field);
        if(this.errors[field]) {
            // console.log('here');
            return this.errors[field][0];
        }
    }

    clear(event) {
        delete this.errors[event.target.name];
    }

    any() {
       return Object.keys(this.errors).length;
    }
 }


class Form{
    constructor(formData) {
    this.formData = formData;
    this.dataOk = null;
    this.errors = new Errors();
    this.status = 'pending';
    }

    registerErrors(errorsReturned) {
        for(var field in errorsReturned) {
            if(errorsReturned.hasOwnProperty(field)) {
                // console.log(errorsReturned[field]);
                Vue.set(this.errors.errors, field, errorsReturned[field]);
            }
        }
    }

    onSubmit(method, url) {
        this.status = 'submitting';
        axios[method](url, this.formData).then(setTimeout(function(response){
            this.reset();
        }.bind(this),2000)).catch(function(error){
            // console.log(error.response.data);
            this.registerErrors(error.response.data.errors);
        }.bind(this));
    }

    reset() {
        for(var field in this.formData) {
            // console.log(field);
            this.formData[field] = null;
            this.clearErrors();
        }

        this.status = 'pending';
    }

    clearErrors() {
        this.errors.errors = {};
    }
}

const app = new Vue({
    el: '#app',
    router,
    data: {
        // errors: new Errors(),
        form: new Form({
            name: null,
            description: null,
        }),
        activeRoute: window.location.pathname,
    },

    methods: {
        // onSubmit: function() {
        //     console.log(this.name);
        //     axios.post('/project', this.$data).then(function(response) {}).catch(function(error) {
        //         this.errors.register(error.response.data.errors);
        //     }.bind(this));
        // }
    },

    computed: {
        dataOk: function() { return this.form.formData.name && this.form.formData.description && !this.form.errors.any(); },
    },

    watch: {
        dataOk: function(newVal, oldVal) {
            Vue.set(this.form, 'dataOk', newVal);
        },

    },

});


const app1 = new Vue({
   el: '#app1',
   router,
   data: {
      routerObj: router,
      activeRoute: router.currentRoute.path,
   },

   methods: {
      printclass: function() {
         console.log(this.activeRoute);
      }
   },

   computed: {
   },

   watch: {
   // watching any of the routerObj or route will do
   'routerObj.currentRoute': {
      handler(newVal, oldVal) {
            console.log('changed');
      }, deep: true
   },

   $route: function(to, from) {
      console.log('changed2');
      this.activeRoute = to.path;
   }
   },

   created: function() {
      console.log(router.currentRoute);
   }
});
