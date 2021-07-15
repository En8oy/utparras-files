<template>
 <v-row class="ma-10" justify="center">
    <v-col class="float-left mr-16" cols="10" sm="9" md="6">
      <br />
      <br />
      <br />

      <v-container fluid>
        <v-card color="grey" elevation="17">
          <v-card-title class="text-center display-1 text text--accent-6">
            <h3>Login</h3>
          </v-card-title>
          <v-card-text>
            <v-form v-on:submit.prevent="login()">
              <v-text-field
                label="Usuario"
                type="email"
                v-model="email"
                :rules="requiredRules"
              >
              </v-text-field>
              <v-text-field
                label="Contraseña"
                type="password"
                v-model="password"
                :rules="requiredRules"
              >
              </v-text-field>
              <br />

              <center>
                <v-btn
                  type="submit"
                  rounded
                  color="red accent-4"
                  dark
                  :loading="loading"
                >
                  INICIAR
                </v-btn>
              </center>
              <br />
            </v-form>
          </v-card-text>
        </v-card>
        <br />
        <br />
        <br />
      </v-container>
    </v-col>
  </v-row>
  

    
</template>


<script>
export default {
  name: "App",

  data: () => ({
    email: "",
    password: "",
    loading: false,
    requiredRules: [(v) => !!v || "required"],
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
        name:"web",
        icon:"mdi-web",
        url:"https://www.utparras.edu.mx/"
      }
      ]
    }),
};
</script>