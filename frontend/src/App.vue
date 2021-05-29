<template>
  <v-app>
    <v-app-bar
      app
      color="#009688"
      dark
    >
      <div class="d-flex align-center">
        <v-img
          alt="utp Logo"
          class="shrink mr-2"
          contain
          src="https://www.utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="40"
        />
        Universidad Tecnologica de Parras de la Fuente
      </div>

      <v-spacer></v-spacer>

      <v-btn
       
        
        text
        to="/administrator/information"
      >
        <span class="mr-2">Acceder</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
};
</script>
