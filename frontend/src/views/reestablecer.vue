<template>
  <v-flex>
    <v-row>
      <v-col cols="9" sm="12" md="12">
         <v-content>
      <v-container class="fill-height" fluid>
        
        <v-row >

          <v-col cols="12"  sm="12" md="12">
            <v-card class="elevation-13">
              <v-window v-model="step">
                <v-window-item :value="1">

                  <v-row>
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <p
                          class="text-center display-1 text-center  text--accent-3"
                        >Podemos ayudarle a reestablecer su contraseña. Indique su cuenta y siga las instrucciones siguientes</p>
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
                    <v-img
            class="responsive"
            width="500"
            height="500"
            src="https://64.media.tumblr.com/b0516ca0293e8b8068db6eb159433941/tumblr_nkqwugRG3O1s141c3o1_r1_540.gif"
          >
      </v-img>
                   
                    
                    
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
        
           
      </v-col>
    </v-row>
  </v-flex>
</template>
