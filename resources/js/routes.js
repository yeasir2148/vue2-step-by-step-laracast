import VueRouter from 'vue-router';
import Home from './Views/Home.vue';
import About from './Views/About.vue';
const routes = [
   {
      path: '/home',
      component: Home
   },
   {
      path: '/about',
      component: require('./Views/About.vue').default
   },
   {
    path: '/contacts',
    component: require('./Views/About.vue').default
 },
]

export default new VueRouter ({
   routes: routes,
   linkActiveClass: 'is-active'
});