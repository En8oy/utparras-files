  <template>
  
  <center><v-row>
    
    <v-col
      cols="12"
      sm="6"
    >
    <br>
    <br>
    <br>
    <br>
      <v-hover
      
        v-slot="{ hover }"
        open-delay="200"
      >
      
        <v-card
          :elevation="hover ? 16 : 2"
          :class="{ 'on-hover': hover }"
          class="mx-auto"
          height="350"
          max-width="350"
          
        >
        <br>
        <br>
          <v-card-text class="font-weight-medium mt-12 text-center subtitle-1">
            <center><h1>Información Pública</h1></center>
            <br>
            <br>

          <center>  <v-img
          contain
          src="https://utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="150"
         
         /></center>
          </v-card-text>
        </v-card>
      </v-hover>
    </v-col>

    <v-col
      cols="12"
      sm="6"
    >
    <br>
    <br>
    <br>
    <br>
      <v-hover
        v-slot="{ hover }"
        close-delay="200"
      >
        <v-card
          :elevation="hover ? 16 : 2"
          :class="{ 'on-hover': hover }"
          class="mx-auto"
          height="350"
          max-width="350"
        >
        <br>
        <br>
            <v-card-text class="font-weight-medium mt-12 text-center subtitle-1">
            <center><h1>Acerca de Nosotros</h1></center>
            <br>
            <br>
             <center>  <v-img
          contain
          src="https://utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="150"
         
         /></center>
          </v-card-text>
        </v-card>
      </v-hover>
    </v-col>
  </v-row></center>
</template>

<style lang="sass" scoped>
.v-card.on-hover.theme--dark
  background-color: rgba(#FFF, 0.8)
  >.v-card__text
    color: #000
</style>
