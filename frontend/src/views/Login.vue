<template>
  <v-container class="fill-height mt-15" fluid>
    <v-row>
      <v-col cols="12" sm="12" md="12">
        <v-card class="elevation-13 mt-15">
          <v-window v-model="step">
            <v-window-item :value="1">
              <v-row>
                <v-col cols="12" md="8">
                  <v-card-text class="mt-5">
                    <h1
                      class="text-center display-2"
                      hrf="http://localhost:8080/"
                    >
                      INICIAR SESIÓN
                    </h1>
                    <form class="form-group mt-10" @submit.prevent="login()">
                      <v-text-field
                        v-model="email"
                        :rules="emailRules"
                        label="Correo"
                        required
                        color="teal"
                        prepend-icon="mdi mdi-email"
                        type="email"
                      ></v-text-field>
                      <v-text-field
                        v-model="password"
                        label="Contraseña"
                        required
                        color="teal"
                        prepend-icon="mdi mdi-lock"
                        type="password"
                      ></v-text-field>
                     

                      <center>
                        <v-btn rounded color="teal" type="submit" dark
                          >Iniciar Sesión</v-btn
                        >
                        <v-btn
                          rounded
                          color="#b71c1c"
                          dark
                          href="http://localhost:8080/reestablecer"
                          >¿Olvidastes tu contraseña?</v-btn
                        >
                      </center>
                    </form>
                  </v-card-text>
                  <div class="text-center"></div>
                </v-col>
                <v-col cols="12" md="4">
                  <v-img
                    class="responsive"
                    width="responsive"
                    height="350"
                    src="https://cdn-images-1.medium.com/max/800/1*zf4YRRQlK9ddU5JOQmfRZw.gif"
                  >
                  </v-img>
                </v-col>
              </v-row>
            </v-window-item>
          </v-window>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    step: 1,
    email: null,
    password: null,
    email: "",
    emailRules: [
      (v) => !!v || "se requiere correo electornico",
      (v) => /.+@.+\..+/.test(v) || "El correo electrónico debe ser válido",
    ],
  }),
  props: {
    source: String,
  },

  methods: {
    login() {
      let log = {
        email: this.email,
        password: this.password,
      };
      console.log(log);
        axios.post(this.$store.state.url + 'login',{email : this.emial, password : this.password})
        .then(res => {
          console.log(res)
        })
        .catch(err => {
          console.error(err);
        })
    },
     doLogin() {
        if (this.emailLogin === "" || this.passwordLogin === "") {
           this.emptyFields = true;
        } else {
           alert("Has iniciado sesión");
        }
     },

    
    
  },
};
</script>
