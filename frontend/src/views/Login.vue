<template>
  
       <v-img 
        src="https://www.utparras.edu.mx/assets/images/edificio.JPG" height="1000px" width="3000px">
            <v-row class="ma-10" align="center" justify="center">
                <v-col cols="12" sm="12" md="6">
                    <v-container fluid class="pa-15">
                    <v-card color="#E9E9E9" class="pa-8" elevation="12">
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
