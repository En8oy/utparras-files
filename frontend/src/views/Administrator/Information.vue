<template>
  <div>
       <v-img 
        src="https://www.utparras.edu.mx/assets/images/edificio.JPG">
            <v-row class="ma-10" align="center" justify="center">
                <v-col cols="12" sm="12" md="6">
                    <v-container fluid>
                    <v-card color="#E9E9E9" class="pa-5" elevation="12">
                        <v-card-title class="text-center display-1 teal--text text--accent-3"> Login </v-card-title>
                        <v-card-text>
                            <v-form v-on:submit.prevent="login()">
                                <v-text-field label="Usuario" type="email" v-model="email" :rules="requiredRules">
                                </v-text-field>
                                <v-text-field label="Contraseña" type="password" v-model="password" :rules="requiredRules">
                                </v-text-field>
                                <v-btn type="submit" rounded color="teal accent-3" dark :loading="loading">
                                    INICIAR
                                </v-btn>
                            </v-form>
                        </v-card-text>
                    </v-card>
                    </v-container>
                </v-col>
            </v-row>
        </v-img>

    <v-footer
    dark
    padless
     >
        <v-card
        class="flex"
        flat
        tile
        >
            <v-card-title class="teal">
                <strong class="subheading">Universidad Tecnologica de Parras de la Fuente</strong>

                <v-spacer></v-spacer>

            <v-btn
            v-for="icon in icons"
            :key="icon.name"
            class="mx-4"
            dark
            icon
            :href="icon.url"
            target="_blank"
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
  
</template>
<script>
export default {
    data() {
        return {
            email : "",
            password : "",
            loading : false,
            requiredRules: [(v) => !!v || "required"],
        }
    },
    methods: {
        login(){
          if (this.email != "" && this.password != "") {
            this.$store.dispatch("User/login", {email: this.email, password : this.password}).then(message => {
                  this.$toast.open({
                  position: "top-right",
                  message: "Login Success",
                  type: "success",
                });
                this.$router.push("/admin/orders")
            }).catch(error => {
                this.$toast.open({
                position: "top-right",
                message: "Email Or Password Isn't Correct",
                type: "warning",
              });
            })
        
          } else {
             this.$toast.open({
              position: "top-right",
              message: "Input empty",
              type: "warning",
            });
          }
        }
    },
}
</script>
<script>

export default {
  name: 'App',

  data: () => ({
      icons: [
      {
        name:"facebook",
        icon:"mdi-facebook",
        url:"https://www.facebook.com/utparras/"
      },
      {
        name:"twitter",
        icon:"mdi-twitter",
        url:"https://twitter.com/utparras?lang=es"
      },
      {
        name:"web",
        icon:"mdi-web",
        url:"https://www.utparras.edu.mx/"
      }
      ]
    }),
  }
</script>
