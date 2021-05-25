<template>
  <v-app-bar
      app
      color="#2ea69a"
      
    >
    
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://www.utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="80"
        />
      </div>

      
      <v-spacer></v-spacer>

      <v-btn
        to="/about"
        text
      >
        <span class="mr-2 white--text">CIniciar Sesion</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>

      
    </v-app-bar>
</template>

<script>
  import HelloWorld from '../components/HelloWorld'

  export default {
    name: 'Home',

    components: {
      HelloWorld,
    },
  }
</script>
