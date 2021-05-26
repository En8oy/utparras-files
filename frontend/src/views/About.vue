<template>
  <div class="about">
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
        to="/administrative/administrative"
        text
      >
        <span class="mr-2 white--text">Iniciar Sesion</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>

      
    </v-app-bar>
    <template>

          <div class="">
              <v-container fluid>
                  <v-layout row wrap>
                      <v-flex>
                        
                        <v-img 
                          src="https://www.utparras.edu.mx/assets/images/edificio.JPG">
                          <h1 class="text-center ma-100 white--text">Historia</h1>
                          <p class="text-center ma-10 white--text">Los antecedentes de la Universidad Tecnológica de Parras de la Fuente se remontan a 1999, en la Unidad Academica de la Universidad Tecnológica de Coahuila, cuando se atendió una demanda de la región ante la falta de oportunidades para los egresados del nivel medio superior. Aunque se debió atender hasta el 26 de Enero del 2016 para que se decretara su constitución formal en el Diario Oficial y que, al abrir sus puertas, atendiera a 452 alumnos, con una oferta de cinco programas educativos, uno de ellos, cabe destacar, el primero a nivel nacional. </p>
                          
                        </v-img>
                        
                      </v-flex>                
                  </v-layout>

              </v-container>

          </div>
            
          </template>
  </div>
  
</template>
