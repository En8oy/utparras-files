import Vue from "vue";
import VueRouter from "vue-router";
import NotFound from "../components/NotFound.vue"
import store from "@/store"

// Public Routes
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Login from "../views/Login.vue";
import File from "../views/File.vue";
import Register from "../views/Register";


// Administrator Routes
import AdministratorHome from "../views/Administrator/Home.vue";
import AdministratorUser from "../views/Administrator/Users.vue";


// Teacher Routes
import TeacherHome from "../views/Teacher/Home.vue";

// Administrative Routes
import AdministrativeHome from "../views/Administrative/Home.vue";

Vue.use(VueRouter);

const routes = [{
        path: "*",
        name: "Pagina No Encontrada",
        component: () =>
            import (
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
        path: "/registro",
        name: "Registro",
        component: Register,
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
        beforeEnter: guardMyroute,
        component: AdministratorHome,

    },
    {
        path: "/administrador/usuarios",
        name: "Administrar Usuarios",
        component: AdministratorUser,
        beforeEnter: guardMyroute,
        meta: {
            autentificado: true
        }
    },
    // Administrative Routes
    {
        path: "/administrativo/inicio",
        name: "Bienvenido Administrador",
        beforeEnter: guardMyroute,
        component: AdministrativeHome,
    },
    // Teacher Routes
    {
        path: "/maestro/inicio",
        name: "Bienvenido Administrador",
        beforeEnter: guardMyroute,
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

function guardMyroute(to, from, next)
{
 var isAuthenticated= false;
 if(localStorage.getItem('LoggedUser'))
  isAuthenticated = true;
 else
  isAuthenticated= false;
if(isAuthenticated) {
  next(); // allow to enter route
 } else{
  next('/login'); // go to '/login';
 }
}


const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

export default router;
