/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import HomeView from './view/HomeView.vue'
import MovieView from './view/MovieView.vue'
import SearchView from './view/SearchView.vue'
import PageHeader from './components/PageHeader.vue'
import PageFooter from './components/PageFooter.vue'

Vue.component('page-header', PageHeader);
Vue.component('page-footer', PageFooter);



const routes = [
    { path: '/', component: HomeView, name: 'home',},
    { path: '/movie/:movieId', component: MovieView,},
    { path: '/search', component: SearchView, name: 'search',}
  ]

const router = new VueRouter({
    routes 
})
const app = new Vue({
    router
}).$mount('#app')
