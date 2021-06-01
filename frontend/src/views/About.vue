<template>
<center>
  <v-row
  cols="9" sm="10" md="12"
    
  >
    <v-col 
    height="200"
    cols="9" sm="10" md="12"
    
    >
      <v-hover
        v-slot="{ hover }"
        disabled
      >
      
        <v-card
        
          :elevation="hover ? 12 : 2"
          class="mx-auto"
          height="700"
           color="#862f30"
         
        >
        
          <v-card-text 
           
           class="my-4 text-center title">
            <br>
            
          <h1  
          class="white--text"
          >Historia</h1>
          <br>
          

          <p class="white--text">Los antecedentes de la Universidad Tecnológica de Parras de la Fuente se remontan a 1999,
          en la Unidad Academica de la Universidad Tecnológica de Coahuila, cuando se atendió una 
          demanda de la región ante la falta de oportunidades para los egresados del nivel medio 
          superior. Aunque se debió atender hasta el 26 de Enero del 2016 para que se decretara su 
          constitución formal en el Diario Oficial y que, al abrir sus puertas, atendiera a 452 alumnos, 
          con una oferta de cinco programas educativos, uno de ellos, cabe destacar, el primero a nivel nacional</p>
          <br>
          

          <h1 class="white--text">Acerca del Sitio</h1>
          <br>
          
          
          <p  class="white--text"
          >Este sitio cuenta con la utilidad de registrar datos del personal de la
           Universidad Tecnológica de Parras de la Fuente, con el fin de tener un mejor control a
          la hora de obtener información, el sitio ayuda directamente a obtener esos datos sin la
           necesidad de ir personalmente a obtener la información que se desee.</p>


          </v-card-text>
        </v-card>
      </v-hover>
    </v-col>
  </v-row>
  </center>
</template>

