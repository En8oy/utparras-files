<template>
  <v-row
    
    align="center"
    justify="center"
  >
    <v-col 
    cols="6"
    sm="10"
    md="12">
      <v-hover
        v-slot="{ hover }"
        disabled
      >
      
        <v-card 
         
          :elevation="hover ? 12 : 2"
          class="mx-auto"
          height="700"
          max-width="1000"
        
        >
        
          <v-card-text
           
           class="my-4 text-center title">
            <br>
          
          <h1
          >Historia</h1>
           <br>

          <p>Los antecedentes de la Universidad Tecnológica de Parras de la Fuente se remontan a 1999,
          en la Unidad Academica de la Universidad Tecnológica de Coahuila, cuando se atendió una 
          demanda de la región ante la falta de oportunidades para los egresados del nivel medio 
          superior. Aunque se debió atender hasta el 26 de Enero del 2016 para que se decretara su 
          constitución formal en el Diario Oficial y que, al abrir sus puertas, atendiera a 452 alumnos, 
          con una oferta de cinco programas educativos, uno de ellos, cabe destacar, el primero a nivel nacional</p>
  

          <h1>Acerca del Sitio</h1>
          <br>
          <br>
          <br>
          
          <p>Este sitio cuenta con la utilidad de registrar datos del personal de la
           Universidad Tecnológica de Parras de la Fuente, con el fin de tener un mejor control a
          la hora de obtener información, el sitio ayuda directamente a obtener esos datos sin la
           necesidad de ir personalmente a obtener la información que se desee.</p>


          </v-card-text>
          


          
        </v-card>
      </v-hover>
      <br>
      <br>
      <br>
      <br>
    

       
    </v-col>
  </v-row>


</template>




