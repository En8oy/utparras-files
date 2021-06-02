<template>
  <v-row class="ma-1" align="center" justify="center">
    <v-col cols="9" sm="9" md="9">
      <v-container fluid class="pa-1">
        <v-card color="#E9E9E9"  elevation="12">
          <v-card-title class="text-center display-1 green--text text--accent-6"><h3> Login</h3> </v-card-title>
            <v-card-text>
              <v-form v-on:submit.prevent="login()">
                <v-text-field label="Usuario" type="email" v-model="email" :rules="requiredRules">
                </v-text-field>
                <v-text-field label="Contraseña" type="password" v-model="password" :rules="requiredRules">
                </v-text-field>
                <br>

                <center> <v-btn type="submit" rounded color="green accent-6" dark :loading="loading">
                  INICIAR
                </v-btn></center>
                <br>
                
                </v-form>
                  </v-card-text>
                    </v-card>
                    </v-container>
            </v-col>
        </v-row>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
      email : "",
      password : "",
      loading : false,
      requiredRules: [(v) => !!v || "required"],
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