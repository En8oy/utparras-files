<template>
   <v-flex>
    <v-row>
      <v-col cols="9" sm="10" md="12">
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
        "https://scontent.fslw1-1.fna.fbcdn.net/v/t39.30808-6/225929354_798418220825954_50839970934689400_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=730e14&_nc_eui2=AeGNrtxjy0ZaRYLflduLaZGsvdJSkXqxXMG90lKRerFcwZ7Wi-dS3fktqB05lAh8q05r66Juys_1YfrhW0sqOuBK&_nc_ohc=2yqVMVKYfVUAX8rBAVg&_nc_ht=scontent.fslw1-1.fna&oh=c1306f60dd183b80ad349fabb1cfa6c0&oe=6104A50E"
        },
        {
          src:
            "https://scontent.fslw1-1.fna.fbcdn.net/v/t39.30808-6/227436539_798418260825950_8943571697934407242_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=730e14&_nc_eui2=AeEENEE62b4ed8MTEXTtzIHNBZME5JjwAyYFkwTkmPADJgVW3MqXbrx6zDbyi25IStT9F5jIuufplNex6kej8p0I&_nc_ohc=JwlzCrZOuCAAX-1vZqx&_nc_ht=scontent.fslw1-1.fna&oh=1d21c5f0281ce8c494b235e6e1486d7d&oe=6104DF0D",
        },
        {
          src:
        "https://scontent.fslw1-1.fna.fbcdn.net/v/t39.30808-6/225890782_798418237492619_1611061854293179598_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=730e14&_nc_eui2=AeGHR8lny19R6ki0nXtB1b55X3kkXcSJkfJfeSRdxImR8rp8QXtn3zond9fZyXnVUOKdaQ1GJm_SbOyQd5ofXeb7&_nc_ohc=NEy0CfUN1mYAX_Q73p2&_nc_ht=scontent.fslw1-1.fna&oh=165e5da9957806b94ef329f396e4412d&oe=6105CA97"
        },
         {
          src:
        "https://scontent.fslw1-1.fna.fbcdn.net/v/t1.6435-9/84485162_2828525067186181_2037803450414137344_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=9267fe&_nc_eui2=AeEf80bJhboNqrKFHpBFYTfMU0O7RJjTrmpTQ7tEmNOuaubgXLet-0ZmCJ8QXTV6xpGup-Y-E9BphMpniBmNVB9C&_nc_ohc=t1OUL5keVhIAX9a5qCO&_nc_ht=scontent.fslw1-1.fna&oh=23d2af0d32df1d3c7c9fc09f56b1fdc8&oe=61277C8B"
        }
      ],
    };
  },
};
</script>
