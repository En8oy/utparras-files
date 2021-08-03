<template>
  <v-flex>
    <v-row>
      <v-col cols="12" sm="12" md="12">
        <v-content>
          <v-container class="fill-height" fluid>
            <v-row>
              <v-col cols="12" xs="12" sm="12" md="12" lg="12" xl="12">
                <v-card class="elevation-13 mt-15">
                  <v-window v-model="step">
                    <v-window-item :value="1">
                      <v-row>
                        <v-col>
                          <v-card-text class="mt-16">
                            <h2 class="text-justify">
                              Podemos ayudarle a reestablecer su contraseña.
                              Indique su cuenta y siga las instrucciones
                              siguientes
                            </h2>
                            <form
                              class="form-group mt-10"
                              @submit.prevent="Enviar()"
                            >
                              <v-text-field
                        v-model="email"
                        :rules="emailRules"
                        label="Correo"
                        required
                        color="teal"
                        prepend-icon="mdi mdi-email"
                      ></v-text-field>
                               
                              
                            </form>
                          </v-card-text>

                          <div class="text-center ">
                            <v-btn x-large rounded color="#b71c1c" dark
                              >Enviar</v-btn
                            >
                          </div>
                        </v-col>
                        <v-col cols="12" md="4">
                          <v-img
                            class="responsive"
                            width="responsive"
                            height="350"
                            src="https://i2.wp.com/digitalpolicylaw.com/wp-content/uploads/2021/01/images@@Cyber-Threat-Analysis-Leadspace-Laptop-lock.gif"
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
        </v-content>
      </v-col>
    </v-row>
  </v-flex>
</template>

<script>
export default {
    data: () => ({
      valid: true,
     
      email: '',
      emailRules: [
        v => !!v || 'se requiere correo electornico',
        v => /.+@.+\..+/.test(v) || 'El correo electrónico debe ser válido',
      ],
    }),
}
</script>