import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import LoginView from '../views/LoginView.vue'
import UsersView from '../views/UsersView.vue'
import ArchivesView from '../views/ArchivesView.vue'
import TestView from '../views/TestView.vue'
import CarouselView from '../views/CarouselView.vue'
import { component } from 'vue/types/umd'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'LoginView',
    component: LoginView
  },
  {
    path: '/users',
    name: 'UsersView',
    component: UsersView
    
  },
  {
    path: '/archives',
    name: 'ArchivesView',
    component: ArchivesView
    
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
