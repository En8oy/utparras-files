<template>
  <v-app>
    <v-card  height="100%" width="100%">
      <v-app-bar color="teal" dark absolute elevate-on-scroll>
        <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>
        <v-toolbar-title>
          <v-img
            src="./assets/logo.png"
            width="4rem"
            class="float-left mr-4"
          ></v-img>
          {{ this.$route.name }}
        </v-toolbar-title>

      </v-app-bar>
      <v-navigation-drawer v-model="drawer" absolute temporary color="#0F6059">
        <div class="subheading pa-10" style="color: white ">
          <v-img
            src="./assets/logo.png"
            width="4rem"
            class="float-left mr-5"
          ></v-img>
          <strong >
            Expedientes
            <br />
            UTParras
          </strong>
        </div>
        <v-list nav dense class="mt-10">
          <v-list-item-group>
            <div v-for="route in guest" :key="route.name">
              <v-list-item>
                <v-list-item-icon>
                  <v-icon style=" color:white " :color="$store.state.colorSelected">{{
                    route.icon
                  }}</v-icon>
                </v-list-item-icon>
                <router-link
                  :to="route.route"
                  style="text-decoration: none; color:white "
                >
                  <v-list-item-title>
                    {{ route.name }}
                  </v-list-item-title>
                </router-link>
              </v-list-item>
            </div>
            <br>
            <v-switch justify="center"
          v-model="$store.state.theme"
          @change="changeTheme"
          hide-details
          inset
          label="Modo obscuro"
        ></v-switch>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
      <transition name="fade" :duration="500">
        <v-container class="mt-16">
          <router-view></router-view>
        </v-container>
      </transition>
      <v-footer padless class="mt-15 pa-10">
        <v-card
          flat
          tile
          width="100%"
          class="text-center"
          color="teal"
          elevation="10"
        >
          <v-card-text>
            <h1 class="pb-5 white--text">Mas Sobre Nosotros</h1>
            <a
              v-bind:href="social.url"
              target="_blank"
              v-for="social in icons"
              :key="social.url"
              style="text-decoration: none"
            >
              <v-btn class="mx-5 my-5" color="red darken-4" dark>
                <v-icon>{{ social.icon }}</v-icon>
              </v-btn>
            </a>
          </v-card-text>
          <v-divider></v-divider>
          <v-card-text>
            <h3 class="pa-5 white--text">
              Esta Aplicación Web Fue Desarrollada Por Los Siguientes Alumnos De
              La Carrera De Tecnologías
            </h3>
            <v-btn
              v-for="credit in credits"
              :key="credit.name"
              class="ma-5"
              :href="credit.url"
              color="red darken-4"
              dark
              target="_blank"
            >
              <v-icon> mdi-github </v-icon>
              {{ credit.name }}
            </v-btn>
            <br />
            <h3 class="pa-5 white--text">
              En Coordinación De El Ing. Irbing Alejandro Moreno Garcia
            </h3>
            <v-btn
              href="https://github.com/en8oy"
              target="_blank"
              class="ma-5"
              small
              :color="$store.state.colorSelected"
              dark
            >
              <v-icon>mdi-github</v-icon>
              &nbsp; Visita Mi GitHub
            </v-btn>
            <br />
            <strong
              >{{ new Date().getFullYear() }} — &copy; UTParras Todos Los
              Derechos Reservados</strong
            >
          </v-card-text>
        </v-card>
      </v-footer>
    </v-card>
  </v-app>
</template>
<script>
export default {
  data: () => ({
    drawer: false,
    theme: true,
    credits: [
      {
        name: "Edgar	Flores Perez",
        url: "https://github.com/EdgarFP995",
      },
      {
        name: "Ivan Emmanuel	Cisneros Avila",
        url: "https://github.com/IvanCisneros528",
      },
      {
        name: "Jorge Eduardo	Tovar Rios",
        url: "https://github.com/jorgetovar2",
      },
    ],
    guest: [
      {
        route: "/",
        name: "Inicio",
        icon: "mdi-home",
      },
      {
        route: "/nosotros",
        name: "Acerca De",
        icon: "mdi-bookmark",
      },
      {
        route: "/login",
        name: "Iniciar Sesión",
        icon: "mdi-login",
      },
      {
        route: "/expedientes",
        name: "Expedientes",
        icon: "mdi-air-horn",
      },
    ],
    administrator: [
      {
        route: "/inicio",
        name: "Inicio",
        icon: "mdi-home",
      },
      {
        route: "/administrador/configuraciones",
        name: "Configuración",
        icon: "mdi-cog",
      },
      {
        route: "/administrador/logout",
        name: "Cerrar Sesión",
        icon: "mdi-logout",
      },
    ],
    teacher: [
      {
        route: "/inicio",
        name: "Inicio",
        icon: "mdi-home",
      },
      {
        route: "/asesor/estadias",
        name: "Estadías de Alumnos",
        icon: "mdi-account-group",
      },
      // {
      //   route : "/asesor/perfil",
      //   name : "Mis Datos",
      //   icon : "mdi-account-convert"
      // },
      {
        route: "/nosotros",
        name: "Acerca de",
        icon: "mdi-bookmark",
      },
      {
        route: "/asesor/logout",
        name: "Cerrar Sesión",
        icon: "mdi-logout",
      },
    ],
    company: [
      {
        route: "/inicio",
        name: "Inicio",
        icon: "mdi-home",
      },
      {
        route: "/empresa/perfil",
        name: "Mis Datos",
        icon: "mdi-domain",
      },
      {
        route: "/empresa/vacantes",
        name: "Mis Vacantes",
        icon: "mdi-briefcase",
      },
      {
        route: "/empresa/estadias",
        name: "Estadías de Alumnos",
        icon: "mdi-account-group",
      },
      {
        route: "/empresa/logout",
        name: "Cerrar Sesión",
        icon: "mdi-logout",
      },
    ],
    student: [
      {
        route: "/",
        name: "Inicio",
        icon: "mdi-home",
      },
      {
        route: "/estudiante/perfil",
        name: "Mi Perfil",
        icon: "mdi-account-circle",
      },
      {
        route: "/estudiante/curriculum",
        name: "Mi Curriculum",
        icon: "mdi-file",
      },
      {
        route: "/estudiante/estadias",
        name: "Mis Estadías",
        icon: "mdi-account-details",
      },
      {
        route: "/vacantes",
        name: "Vacantes Disponibles",
        icon: "mdi-air-horn",
      },
      {
        route: "/nosotros",
        name: "Acerca de",
        icon: "mdi-bookmark",
      },
      {
        route: "/estudiante/logout",
        name: "Cerrar Sesión",
        icon: "mdi-logout",
      },
    ],
    icons: [
      {
        icon: "mdi-web",
        url: "https://www.utparras.edu.mx",
        name: "Pagina Principal",
      },
      {
        icon: "mdi-facebook",
        url: "https://www.facebook.com/utparras/",
        name: "Universidad Tecnológica de Parras de la Fuente",
      },
      {
        icon: "mdi-twitter",
        url: "https://twitter.com/utparras?lang=es",
        name: "@UTParras",
      },
      {
        icon: "mdi-instagram",
        url: "https://www.instagram.com/utparras/?hl=es-la",
        name: "@UTParras",
      },
      {
        icon: "mdi-youtube",
        url: "https://www.youtube.com/channel/UCoOFvKZrsXfP2lHD7lITddw/videos?view=0&sort=p&flow=grid",
        name: "Universidad Tecnológica de Parras de la Fuente",
      },
    ],
    items: ["default", "absolute", "fixed"],
    padless: false,
    variant: "default",
  }),
  methods: {
    changeTheme(){
      // console.log(this.theme)
      if(this.$store.state.theme){
      this.$store.dispatch("getTheme",true)
      this.$vuetify.theme.dark=true
      }else{
        this.$store.dispatch("getTheme",false)
        this.$vuetify.theme.dark=false
      }
      // console.log(this.$store.state.theme)
      
    }
  },
  mounted() {
    this.changeTheme()
  },
  computed: {},
  components: {},
};
</script>