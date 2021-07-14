<template>
  <v-container class="fill-height mt-15" fluid>
    <v-row>
      <v-col cols="12" sm="12" md="12">
        <v-card class="elevation-13">
          <v-window v-model="step">
            <v-window-item :value="1">
              <v-row>
                <v-col cols="12" md="8">
                  <v-card-text class="mt-10">
                    <h1
                      class="text-center display-2"
                      hrf="http://localhost:8080/"
                    >
                      INICIAR SESIÓN
                    </h1>
                    <form class="form-group mt-10" @submit.prevent="login()">
                      <v-text-field
                        v-model="email"
                        type="email"
                        class="form-control"
                        placeholder="Correo"
                        required
                        prepend-icon="mdi mdi-email"
                        color="teal"
                      ></v-text-field>

                      <v-text-field
                        v-model="password"
                        type="password"
                        class="form-control"
                        placeholder="Contraseña"
                        required
                        prepend-icon="mdi mdi-lock"
                        color="teal"
                      ></v-text-field>

                      <center>
                        <v-btn
                          class="mt-5"
                          rounded
                          color="teal"
                          type="submit"
                          dark
                          >Iniciar Sesión</v-btn
                        >
                        <v-btn
                          class="mt-5"
                          rounded
                          color="#b71c1c"
                          dark
                          href="http://localhost:8080/reestablecer"
                          >¿Olvidastes tu contraseña?</v-btn
                        >
                      </center>
                    </form>
                  </v-card-text>
                  <div class="text-center mt-10"></div>
                </v-col>
                <v-col cols="12" md="4">
                  <v-img
                    class="responsive"
                    width="responsive"
                    height="380"
                    src="@/assets/usuario.gif"
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
  }),
  methods: {
    login() {
      if (this.email != "" && this.password != "") {
        this.$store
          .dispatch("auth/login", {
            email: this.email,
            password: this.password,
          })
          .then((message) => {
            alert("Data");
            // this.$router.push("/admin/orders")
          })
          .catch((error) => {
            alert("Error");
          });
      } else {
        alert("bad");
      }
    },
  },
};
</script>