<template>
  <v-card
    class="mx-auto overflow-hidden"
    height="1000"
  >
    <v-app-bar
      color="#009688"
      
    >
      <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

      <v-toolbar-title>
        <v-img
          contain
          src="https://utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="90"
         
        />
        
      </v-toolbar-title>
      {{$route.name}}
    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
        <center>
          <br>
          <br>
        <v-img
          contain
          src="https://utparras.edu.mx/assets/images/utp-logo.png"
          transition="scale-transition"
          width="150"
         
        />
        <br>
        <br>

        
        <h1>Expedientes UTParras</h1>
        <br>
        <br>
        
          <v-list-item>
          
            
        
            
            <v-list-item-icon >
              
              <v-icon size="40">mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title><h2>Inicio</h2></v-list-item-title>
          </v-list-item>
          
          <br>
          <v-list-item>
            <v-list-item-icon>
              <v-icon size="40">mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title><h2>Acerca de</h2></v-list-item-title>
          </v-list-item>
          <br>



          <v-list-item>
            <v-list-item-icon>
              <v-icon size="40">mdi-open-in-new</v-icon>
            </v-list-item-icon>
            <v-list-item-title><h2>Iniciar sesion</h2></v-list-item-title>
          </v-list-item>
          </center>
          <br>
           
    
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    
    <div>
      <router-view></router-view>
      <v-footer dark padless>
              <v-card cols="12" sm="12" md="12" class="flex" flat tile>
                <v-card-title class="teal">
                  <strong class="subheading"
                    ><h2>
                      Universidad Tecnológica de Parras de la Funte
                    </h2></strong
                  >

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
            </v-footer>
    </div>
  </v-card>

  
</template>


<script>
  export default {
    data: () => ({
      drawer: false,
      group: null,
      icons: [
      {
        name: "facebook",
        icon: "mdi-facebook",
        url: "https://www.facebook.com/utparras/",
      },
      {
        name: "twitter",
        icon: "mdi-twitter",
        url: "https://twitter.com/utparras?lang=es",
      },
      {
        name: "web",
        icon: "mdi-web",
        url: "https://www.utparras.edu.mx/",
      },
    ],
    }),
  }
</script>
