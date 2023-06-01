import Vue from 'vue'
import App from './App.vue'
import router from './router'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap-vue/dist/bootstrap-vue.css'

import '../src/assets/css/bootstrap.min.css'

import './assets/css/style.scss'

import JwPagination from 'jw-vue-pagination'

// Vue.use(Bootstrap)

Vue.use(BootstrapVue)

Vue.use(IconsPlugin)

Vue.component('jw-pagination', JwPagination)

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
