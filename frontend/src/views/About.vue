  <template>
 <center><v-row>

    <v-col
      cols="12"
      sm="6"
    >
    <v-btn
  color="secondary"
  elevation="11"
  x-large
></v-btn>
 





    </v-col>
  </v-row> 
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <v-footer
    dark
    padless
     >
        <v-card
        class="flex"
        flat
        tile
        cols="12"
           sm="12"
           md="12"
        >
            <v-card-title class="teal">
                <strong class="subheading"><h2>Universidad Tecnológica de Parras de la Funte</h2></strong>

                <v-spacer></v-spacer>

            <v-btn
            v-for="icon in icons"
            :key="icon.name"
            class="mx-4"
            dark
            icon
            :href="icon.url"
            target="_blank"
            cols="12"
           sm="12"
           md="12"
        >
          <v-icon size="35px">
            {{ icon.icon }}
           
          </v-icon>
        </v-btn>
            </v-card-title>

            <v-card-text class="py-2 white--text text-center">
                {{ new Date().getFullYear() }} — <strong>UTP</strong>
            </v-card-text>
        </v-card>
    </v-footer></center>
  
  
</template>





<style lang="sass" scoped>
.v-card.on-hover.theme--dark
  background-color: rgba(#FFF, 0.8)
  >.v-card__text
    color: #000
</style>
