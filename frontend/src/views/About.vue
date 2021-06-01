<template>
<div>
  <v-container
    fluid
    class="pa-10"
  >
  <h1 class="text-center">Estadisticas</h1>
  <br><br><br>
    <v-row align="center">
      <v-col
        cols="12"
        sm="6"
      >
        <div class="text-center">
          <div class="my-6">
            <v-btn
              x-large
              color="success"
              dark
            >
              Personal Docente
            </v-btn>
          </div>
        </div>
        <div class="text-center">
          <div class="my-6">
            <v-btn
              x-large
              color="success"
              dark
            >
              Departamentos
            </v-btn>
          </div>
        </div>
        <div class="text-center">
          <div class="my-6">
            <v-btn
              x-large
              color="success"
              dark
            >
              Instituciones
            </v-btn>
          </div>
        </div>
        <div class="text-center">
          <div class="my-6">
            <v-btn
              x-large
              color="success"
              dark
            >
              Hombre/Mujeres
            </v-btn>
          </div>
        </div>
        
      </v-col>
      <div class="pa-5">
        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="28" class="v-progress-circular teal--text" style="height: 250px; width: 250px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="22.727272727272727 22.727272727272727 45.45454545454545 45.45454545454545" style="transform: rotate(360deg);">
            <circle fill="transparent" cx="45.45454545454545" cy="45.45454545454545" r="20" stroke-width="5.454545454545454" stroke-dasharray="125.664" 
            stroke-dashoffset="0" class="v-progress-circular__underlay"></circle>
            <circle fill="transparent" cx="45.45454545454545" cy="45.45454545454545" r="20" stroke-width="5.454545454545454" stroke-dasharray="125.664" 
            stroke-dashoffset="90.47786842338604px" class="v-progress-circular__overlay"></circle>
            </svg>
          <div class="v-progress-circular__info"> 30% </div>
        </div>
        
      </div>
    </v-row>
  </v-container>
  </div>
</template>
