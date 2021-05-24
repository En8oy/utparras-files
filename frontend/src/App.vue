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
        <h1>INICIO</h1>
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
        <cen<strong class="subheading">MAS SOBRE NOSOTROS</strong>

          <v-spacer></v-spacer>

          <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-2"
          dark
          icon
          >
          <v-icon size="40px">
            {{ icon }}
            </v-icon>
            </v-btn>
           </v-card-title>

            <v-card-text class="py-2 white--text text-center">
              {{ new Date().getFullYear() }} — <strong>Universidad Tecnologica de Parras</strong>
              </v-card-text>
              </v-card>
              </v-footer>
              </template>
            </script>
            </center>
          

    <v-main>
      <router-view/>
      
          
    </v-main>
  </v-app>
</template>
 

<script>

  export default {
    data: () => ({
      icons: [
      'mdi-facebook',
      'mdi-twitter',
      'mdi-instagram',
      ],
    }),
  }

  
</script>

