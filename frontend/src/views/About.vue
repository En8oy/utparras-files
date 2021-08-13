<template>
   <v-flex>
    <v-row>
      <v-col cols="12" sm="12" md="12">
        <v-card-text class="my-4 text-center title">
          


          <v-carousel  :show-arrows="false" hide-delimiters cycle class="responsive" width="500" height="400">
            <v-carousel-item
              v-for="(item, i) in items"
              :key="i"
              :src="item.src"
              reverse-transition="fade-transition"
              transition="fade-transition"
            ></v-carousel-item>
          </v-carousel>  

       

          <h1 class="mt-10">ANTECEDENTES</h1>


          <h3 class="text-justify mt-15">
            Los antecedentes de la Universidad Tecnológica de Parras de la
            Fuente se remontan a 1999, en la Unidad Academica de la Universidad
            Tecnológica de Coahuila, cuando se atendió una demanda de la región
            ante la falta de oportunidades para los egresados del nivel medio
            superior.
           
             Aunque se debió atender hasta el 26 de Enero del 2016 para
            que se decretara su constitución formal en el Diario Oficial y que,
            al abrir sus puertas, atendiera a 452 alumnos, con una oferta de
            cinco programas educativos, uno de ellos, cabe destacar, el primero
            a nivel nacional.
          </h3>
       

          <h1 class="mt-15">IMPACTO SOCIAL</h1>
       

          <h3 class="text-justify mt-15">
            La Universidad cubre la necesidad de la industria manufacturera, la
            cual require perfiles de nivel técnico superior para atender las
            necesidades de operación de fábrica como Dickies de Parras, Cone y
            Star del Norte, entre otras, como las vitivinicolas Casa Madero y
            Casa Rivero, así como las necesidades que tienen los comercios y
            negocios de la región.
          </h3>
          

          <h1 class="mt-15">ACERCA DEL SITIO</h1>
          

          <h3 class="text-justify mt-15">
            Este sitio cuenta con la utilidad de registrar datos del personal de
            la Universidad Tecnológica de Parras de la Fuente, con el fin de
            tener un mejor control a la hora de obtener información, el sitio
            ayuda directamente a obtener esos datos sin la necesidad de acudir
            personalmente.
           
            Gracias a este sitio podremos observar la informacion del pesronal de 
            una manera más sencilla y rápida.
          </h3>
        </v-card-text>
      </v-col>
    </v-row>
   </v-flex>
</template>

<script>
export default { 
  data() {
    return {
      items: [
        {
          src:
        "https://www.utparras.edu.mx/assets/images/edificio.JPG"
        },
        {
          src:
            "https://scontent.fslw1-1.fna.fbcdn.net/v/t1.6435-9/84485162_2828525067186181_2037803450414137344_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=973b4a&_nc_ohc=L8T7HU0RDyMAX9o2AGg&_nc_ht=scontent.fslw1-1.fna&oh=3cc97c1671f14f5c72d2379b5592d9d6&oe=612F658B",
        },
        {
          src:
        "https://scontent.fslw1-1.fna.fbcdn.net/v/t1.6435-9/67736626_2458942090811149_3975071405875134464_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=973b4a&_nc_ohc=_SWuS-qAE1kAX_0GCsK&_nc_ht=scontent.fslw1-1.fna&oh=014136024bc2cdd13ccd39489ded100f&oe=6130D492"
        },
        
      ],
    };
  },
};
</script>
