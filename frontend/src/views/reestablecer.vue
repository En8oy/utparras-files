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

                            <v-form class="mt-10">
                              <v-text-field
                                label="Usuario"
                                prepend-icon="mdi mdi-account"
                                type="text"
                                color="#009688"
                              />
                            </v-form>
                          </v-card-text>

                          <div class="text-center mt-3">
                            <v-btn x-large rounded color="#b71c1c" dark
                              >Enviar</v-btn
                            >
                          </div>
                        </v-col>
                        <v-img
                          class="responsive"
                          width="300"
                          height="515"
                          src="https://i2.wp.com/digitalpolicylaw.com/wp-content/uploads/2021/01/images@@Cyber-Threat-Analysis-Leadspace-Laptop-lock.gif"
                        >
                        </v-img>
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
