<template>
   <v-flex>
    <v-row>
      <v-col cols="12" sm="12" md="12">
        <v-card-text class=" text-center title">
          <br />


          <v-carousel  :show-arrows="false" hide-delimiters cycle class="responsive" width="500" height="500">
            <v-carousel-item
              v-for="(item, i) in items"
              :key="i"
              :src="item.src"
              reverse-transition="fade-transition"
              transition="fade-transition"
            ></v-carousel-item>
          </v-carousel>  

          <br />
          <br />

          <h1>ANTECEDENTES</h1>
          <br />

          <h3 class="text-justify">
            Los antecedentes de la Universidad Tecnológica de Parras de la
            Fuente se remontan a 1999, en la Unidad Academica de la Universidad
            Tecnológica de Coahuila, cuando se atendió una demanda de la región
            ante la falta de oportunidades para los egresados del nivel medio
            superior.
            <br>
            <br>
             Aunque se debió atender hasta el 26 de Enero del 2016 para
            que se decretara su constitución formal en el Diario Oficial y que,
            al abrir sus puertas, atendiera a 452 alumnos, con una oferta de
            cinco programas educativos, uno de ellos, cabe destacar, el primero
            a nivel nacional.
          </h3>
          <br />
          <br />
          <br />

          <h1>IMPACTO SOCIAL</h1>
          <br />

          <h3 class="text-justify">
            La Universidad cubre la necesidad de la industria manufacturera, la
            cual require perfiles de nivel técnico superior para atender las
            necesidades de operación de fábrica como Dickies de Parras, Cone y
            Star del Norte, entre otras, como las vitivinicolas Casa Madero y
            Casa Rivero, así como las necesidades que tienen los comercios y
            negocios de la región.
          </h3>
          <br />
          <br />
          <br />

          <h1>ACERCA DEL SITIO</h1>
          <br />
          <br />

          <h3 class="text-justify">
            Este sitio cuenta con la utilidad de registrar datos del personal de
            la Universidad Tecnológica de Parras de la Fuente, con el fin de
            tener un mejor control a la hora de obtener información, el sitio
            ayuda directamente a obtener esos datos sin la necesidad de acudir
            personalmente.
            <br>
            <br>
            <br>
            Gracias a este sitio podremos observar la informacion del pesronal de 
            una manera mas sencialla y rapida.
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
            "https://www.utparras.edu.mx/assets/images/edificio.JPG",
        },
        {
          src:
            "https://icifed.com.mx/wp-content/uploads/2020/09/UTParras-1-scaled.jpg",
        },
        {
          src:
            "https://scontent.fslw1-1.fna.fbcdn.net/v/t1.6435-9/34019879_1797837106921654_4399235100353495040_n.png?_nc_cat=105&ccb=1-3&_nc_sid=973b4a&_nc_ohc=FWZ_P2qGx1oAX8WFiyk&_nc_ht=scontent.fslw1-1.fna&oh=d6d3562794159b8fcf3c3a1a6819b952&oe=60E047B9",
        },
        {
          src:
            "https://scontent.fslw1-1.fna.fbcdn.net/v/t1.6435-9/91050179_2937628412942512_6329177989091164160_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=973b4a&_nc_ohc=95kqk6JsJH0AX8lXC4t&_nc_ht=scontent.fslw1-1.fna&oh=6cb0f25116fb1f3405f6d606608a2aee&oe=60DD5749",
        },
      ],
    };
  },
};
</script>
