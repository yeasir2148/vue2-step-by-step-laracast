import VueRouter from 'vue-router';
import Home from './Views/Home.vue';
import About from './Views/About.vue';
const routes = [
   {
      path: '/',
      component: Home
   },
   {
      path: '/about',
      component: require('./Views/About.vue').default
   }
]

export default new VueRouter ({
   routes
});