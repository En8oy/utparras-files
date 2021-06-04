
import Vue from "vue";
import VueRouter from "vue-router";
import NotFound from "../components/NotFound.vue"
import store from "@/store"
import jspdf from 'jspdf'

// Public Routes
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Login from "../views/Login.vue";
import File from "../views/File.vue";


// Administrator Routes
import AdministratorHome from "../views/Administrator/Home.vue";
import AdministratorUser from "../views/Administrator/Users.vue";


// Teacher Routes
import TeacherHome from "../views/Teacher/Home.vue";

// Administrative Routes
import AdministrativeHome from "../views/Administrative/Home.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "*",
    name: "Pagina No Encontrada",
    component: () => import(
      /*webpackChunkName: "ExperienceDetails"*/
      "../components/NotFound")
  },
  // Public Routes
  {
    path: "/",
    name: "Bienvenido a Expedientes UTParras",
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
  {
    path: "/administrador/usuarios",
    name: "Administrar Usuarios",
    component: AdministratorUser,
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

beforeEnter: (to, from, next) => {
  const exists = store.destinations.find(
    destination => destination.slug === to.params.slug
  );
  if (exists) {
    next();
  } else {
    next({ name: "notFound" });
  }
}


const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;

