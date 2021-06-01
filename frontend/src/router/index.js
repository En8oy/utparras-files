import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Nosotros from '../views/History.vue'
import informacion from '../views/About.vue'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'Inicio',
    component: Home
  },
  {
    path: '/Nosotros',
    name: 'Nosotros',
    component: Nosotros
  },

  {
    path: '/about',
    name: 'About',
    component: informacion
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router