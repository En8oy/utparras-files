<template>
    <v-content>
      <br>
      <br>
      <v-container class="fill-height" fluid>
        <v-row >
          <v-col cols="9"  sm="10" md="12">
            <v-card class="elevation-13">
              <v-window v-model="step">
                <v-window-item :value="1">
                  <v-row>
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          class="text-center display-2  text--accent-3"
                        >INICIAR SESIÓN</h1>
                        <v-form>
                          <v-text-field
                            label="Usuario"
                            prepend-icon="mdi mdi-account"
                            type="text"
                            color="#009688"
                          />

                          <v-text-field
                            id="password"
                            label="Contraseña"
                            name="password"
                            prepend-icon="mdi mdi-lock"
                            type="password"
                            color="#009688"
                          />
                        </v-form>
                      </v-card-text>
                      <div class="text-center mt-3">
                        <br>
                        <v-btn rounded color="#b71c1c" dark >iniciar sesión</v-btn>
                        <br>
                        <br>
                      </div>
                    </v-col>
                    <v-col cols="12" md="4" class="teal">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">¡Hola!</h1>
                        <br>
                        <h3
                          class="text-center"
                        >Ingrese sus datos personales y regístrate</h3>
                        <br>
                      </v-card-text>
                      <div class="text-center">
                        <br>
                        <v-btn rounded outlined dark @click="step++"> regístrate</v-btn>
                        
                        <br>
                        <br>
                      </div>
                    </v-col>
                    
                    
                  </v-row>
                </v-window-item>
                <v-window-item :value="2">
                  <v-row class="fill-height">
                    <v-col cols="12" md="4" class="teal">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">¡Bienvenido de nuevo!</h1>
                        <br>
                        <h3
                          class="text-center"
                        >Para mantenerse conectado con nosotros, inicie sesión con su información personal</h3>
                        <br>
                      </v-card-text>
                      <div class="text-center">
                        <br>
                        <v-btn rounded outlined dark @click="step--">Iniciar Sesión</v-btn>
                      </div>
                    </v-col>

                    <v-col cols="12" md="8">
                          <br>
                          <h1
                          class="text-center display-2  text--accent-3"
                        >REGÍSTRATE</h1>
                          <v-text-field
                            label="Nombre"
                            name="Name"
                            prepend-icon="mdi mdi-account-circle"
                            type="text"
                            color="#009688"
                          />
                          <v-text-field
                            label="Correo"
                            name="Email"
                            prepend-icon="mdi mdi-email"
                            type="text"
                            color="#009688"
                          />

                          <v-text-field
                            id="password"
                            label="Contraseña"
                            name="password"
                            prepend-icon="mdi mdi-lock"
                            type="password"
                            color="#009688"
                          />
                        <!-- </v-form>
                      </v-card-text> -->
                      <br>
                      <br>

                      <div class="text-center mt-n5">
                        <v-btn rounded color="#b71c1c" dark>REGÍSTRATE</v-btn>
                      </div>
                      <br>
                      <br>
                    </v-col>
                  </v-row>
                </v-window-item>
              </v-window>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
    </v-content>
  
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>