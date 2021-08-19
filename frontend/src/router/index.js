import Vue from 'vue'
import VueRouter from 'vue-router'

// Public Routes
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Login from "../views/Login.vue";
import File from "../views/File.vue";
import reestablecer from "../views/reestablecer.vue";

// Administrator Routes
import AdministratorHome from "../views/Administrator/Home.vue";
import AdministratorUsers from "../views/Administrator/Users.vue";
import AdministratorFile from "../views/Administrator/File.vue";
import IrbingFile from "../views/Administrator/Irbing.vue";




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
        // beforeEnter: guardAdministrator,
        component: AdministratorHome,

    },
    {
        path: "/administrador/usuarios",
        name: "Administrar Usuarios",
        component: AdministratorUsers,
        // beforeEnter: guardAdministrator,
        // meta: {
        //     autentificado: true
        // }
    },
    // Administrative Routes
    {
        path: "/administrativo/inicio",
        name: "Bienvenido Administrador",
        // beforeEnter: guardAdministrator,
        component: AdministrativeHome,
    },
    // Teacher Routes
    {
        path: "/maestro/inicio",
        name: "Bienvenido Administrador",
        // beforeEnter: guardTeacher,
        component: TeacherHome,
    },
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
        path: "/administrador/expediente",
        name: "Mi Expediente UTParras",
        component: AdministratorFile,
    },
    {
        path: "/administrador/ejemplo",
        name: "Mi Expediente UTParras",
        component: IrbingFile,
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

// beforeEnter: (to, from, next) => {
//     const exists = store.destinations.find(
//         destination => destination.slug === to.params.slug
//     );
//     if (exists) {
//         next();
//     } else {
//         next({ name: "notFound" });
//     }
// }

// function guardAdministrator(to, from, next) {
//     var isAuthenticated = false;
//     if (store.state.auth.token) {
//         if (store.state.auth.user.rol == 'Administrador') {
//             next()
//         } else {
//             next("login")
//         }
//     } else {
//         next("login")
//     }
// }

// function guardAdministrator(to, from, next) {
//     var isAuthenticated = false;
//     if (store.state.auth.token) {
//         if (store.state.auth.user.rol == 'Administrador') {
//             next()
//         } else {
//             next("login")
//         }
//     } else {
//         next("login")
//     }
// }

// function guardTeacher(to, from, next) {
//     var isAuthenticated = false;
//     if (store.state.auth.token) {
//         if (store.state.auth.user.rol == 'Maestro') {
//             next()
//         } else {
//             next("login")
//         }
//     } else {
//         next("login")
//     }
// }


const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

export default router;