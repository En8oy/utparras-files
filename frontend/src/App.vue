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
          width="90"
         
        />
        <br>
        
        <h1>Expedientes UTParras</h1>
        <br>
        <br>
        
          <v-list-item>
          
            
        
            
            <v-list-item-icon>
              <v-icon size="40">mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Inicio</v-list-item-title>
          </v-list-item>
          
          <br>
          <v-list-item>
            <v-list-item-icon>
              <v-icon size="40">mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Acerca de</v-list-item-title>
          </v-list-item>
          <br>



          <v-list-item>
            <v-list-item-icon>
              <v-icon size="40">mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title>iniciar sesion</v-list-item-title>
          </v-list-item>
          </center>
          <br>
          
    
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    <div>
      <router-view></router-view>
    </div>
  </v-card>
</template>













<script>
  export default {
    data: () => ({
      drawer: false,
      group: null,
    }),
  }
</script>