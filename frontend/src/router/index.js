import Vue from 'vue'
import VueRouter from 'vue-router'

// Public Routes
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Login from "../views/Login.vue";
import File from "../views/File.vue";

// Administrator Routes
import AdministratorHome from "../views/Administrator/Home.vue";

// Teacher Routes
import TeacherHome from "../views/Teacher/Home.vue";

// Administrative Routes
import AdministrativeHome from "../views/Administrative/Home.vue";

Vue.use(VueRouter);


const routes = [
  // Public Routes
  {
    path: "/",
    name: "Inicio",
    component: Home,
  },
  {
    path: "/nosotros",
    name: "Acerca De Nosotros",
    component: About,
  },
  {
    path: "/login",
    name: "Inicia Sesión",
    component: Login,
  },
  {
    path: "/expedientes",
    name: "Expedientes Publicos",
    component: File,
  },
  // Administrator Routes
  {
    path: "/administrador/inicio",
    name: "Bienvenido Administrador",
    component: AdministratorHome,
  },
  // Administrative Routes
  {
    path: "/administrativo/inicio",
    name: "Bienvenido Administrador",
    component: AdministrativeHome,
  },
  // Teacher Routes
  {
    path: "/maestro/inicio",
    name: "Bienvenido Administrador",
    component: TeacherHome,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
