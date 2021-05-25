<template>
    <v-app>
    <v-app-bar
      app
      color="#009688"
      dark
    >

    
    <v-icon>mdi-dots-vertical</v-icon>
            
            
  <div class="d-flex align-center">
    <v-img
          contain
          src="https://utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="90"
    />
        
        
    </div>
        <h2>INICIO</h2>
        <v-spacer></v-spacer>
         
        <v-btn
        href="app.vue"
        target="_blank"
        text
        >


    <span class="mr-2"><h3>Acceder</h3></span>
        <v-icon></v-icon>
        </v-btn>
        </v-app-bar>
           
  <template>
       
  <div class="about">
    <template>
      
      <div class="">
          <v-container fluid>
                  <v-layout row wrap>
                      <v-flex>
                        
                        <v-img 
                          src="https://www.utparras.edu.mx/assets/images/edificio.JPG">
                          <h1 class="text-center ma-100"></h1>
                          <h1 class="dark"></h1>
                          <br>
                          <br>
                          <br>
                          <br>

                          <center class="white--text"><h1>BIENVENIDO A EXPEDIENTES UTPARRAS</h1>

                          </center>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                         <center><v-btn
                          color="red"
                          width="200"
                          height="60"
                          elevation="8"
                          x-large
                          dark
                          >INICIAR</v-btn></center>
                          
                        </v-img>
                        
                      </v-flex>                
                  </v-layout>

          </v-container>

      </div>
            
    </template>
  </div>
  
</template>
           
           
           
      

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
          class="mx-5"
          dark
          icon
          :href="icon.url"
          target="_blank"
        >
          <v-icon size="40px">
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

