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
        to="/home"
        text
        x-large black
      >
        <span class="mr-2 white--text">Cerrar Sesion</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>
      <v-car>
    <v-row justify="space-around">
    <v-date-picker
      v-model="picker"
      type="month"
      color="green lighten-1"
    ></v-date-picker>
    <v-date-picker
      v-model="picker2"
      type="month"
      color="green lighten-1"
      header-color="primary"
    ></v-date-picker>
  </v-row>
</v-car>
    </v-app-bar>
    

    
</template>


<script>
  export default {
    data () {
      return {
        picker: new Date().toISOString().substr(0, 7),
        picker2: new Date().toISOString().substr(0, 7),
      }
    },
  }
</script>