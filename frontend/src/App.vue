<template>
  <v-app>
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
      
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
    <template>
  <v-footer
    dark
    padless
  >
    <v-card
      class="flex"
      flat
      tile
    >
    
    
      <v-card-title class="teal">
        
        <h3 class="subheading">Universidad Tecnologica De Parras de la Fuente</h3>
        
        <v-spacer></v-spacer>
        
        <v-btn
          v-for="icon in icons"
          :key="icon.name"
          class="mx-4"
          dark
          icon
          :href="icon.url"
          target="_blank"
    
        >
        
          <v-icon size="25px">
            {{ icon.icon }}
            
          </v-icon>
        </v-btn>
        
      </v-card-title>
    
    </v-card>
  </v-footer>
</template>
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

<script>

export default {
  name: 'App',

  data: () => ({
      // icons: [
      //   'mdi-facebook',
      //   'mdi-twitter',
      //   'mdi-linkedin',
      //   'mdi-instagram',
      // ],
      icons: [
      {
        name:"facebook",
        icon:"mdi-facebook",
        url:"https://www.facebook.com/utparras/"
      },
      {
        name:"twitter",
        icon:"mdi-twitter",
        url:"https://twitter.com/utparras?lang=es"
      },
      {
        name:"web",
        icon:"mdi-web",
        url:"https://www.utparras.edu.mx/"
      }
      ]
    }),
  }
</script>