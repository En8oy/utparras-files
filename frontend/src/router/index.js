import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import History from '../views/History.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'Inicio',
    component: Home
  },
  {
    path: '/historia',
    name: 'Historia',
    component: History
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router