import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import AdministrativeAdministrative from '../views/Administrative/Administrative.vue'
import TeacherTeacher from '../views/Teacher/Teacher.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/About.vue')
    }
  },
  {
    path:'/administrative/administrative',
    name:'Administrativo',
    component:AdministrativeAdministrative
  },
  {
    path:'/teacher/teacher',
    name:'Docente',
    component:TeacherTeacher
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
