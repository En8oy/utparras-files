<template>
  <div>
    <br><br><br>
      <h1 class="text-center">Mi Expediente</h1>
    <v-row class="mx-auto overflow-hidden" height="100%" width="100%">
      <v-col color="black" cols="12" sm="12" md="12">
        
      </v-col>
      <v-col cols="12" sm="12" md="12">
        <v-container fluid>
         <template>
          <v-stepper
            v-model="e6"
            vertical
          >
            <v-stepper-step
              color="#009688"
              :complete="e6 > 1"
              step="1"
            >
              <h2>Datos Personales</h2> 
              <br>
               <p class="text-justify">
                 Esta Informacion es requerida para el sistema academico de la universiad, la informacion recolectada sera protegida
                y administrada por personal autorizado de la universidad.
                Una vez teniendo la infroamcion solicitada sera confidencial.
               </p>
            </v-stepper-step>

            <v-stepper-content step="1" id="menu">
              <v-card
                class="mb-12"
                elevation="8"
              
                >
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-12">
                     <v-text-field
                     
                    v-model="vue.name"
                    :rules="nameRules"
                    label="Nombre"
                    required
                  ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                      v-model="vue.surname"
                      :rules="surnameRules"
                      label="Apellidos"
                      required
                    ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                       <v-text-field
                        v-model="vue.birth"
                        :rules="birth"
                        label="Fecha de Nacimiento"
                        hint="DD/MM/AAAA"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                          v-model="vue.email"
                          :rules="emailRules"
                          label="Correo"
                          required
                  ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                    v-model="vue.curp"
                    :rules="curpRules"
                    label="CURP"
                    required
                  ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                       <v-text-field
                    v-model="vue.rfc"
                    :rules="rfcRules"
                    label="RFC"
                    required
                  ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                       <v-text-field
                    v-model="vue.status"
                    :rules="civilRules"
                    label="Estado Civil"
                    required
                  ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="vue.sex"
                    :rules="sexRules"
                    label="Sexo"
                    required
                  ></v-text-field>
                    </div>
                </div>
              </v-card>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 2"
                
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 2"
              step="2"
            >
            <h2>Direccion</h2>
            </v-stepper-step>
            <v-stepper-content step="2">
              <v-card 
                class="mb-12"
                elevation="8">
                <div class="row">
                  <div class="col-sm-6 col-md-5 col-12"><v-text-field
                    v-model="address"
                    :rules="addressRules"
                    label="Direccion Personal"
                    required
                  ></v-text-field></div>
                  <div class="col-sm-6 col-md-5 col-12"> <v-text-field
                    v-model="place"
                    :rules="placeRules"
                    label="Lugar de Nacimiento"
                    required
                  ></v-text-field></div>
                </div>
              </v-card>
               <v-btn
                color="dark"
                @click="e6 = 1"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 3"
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 3"
              step="3"
            >
              <h2>Informacion Familiar</h2>  
            </v-stepper-step>

            <v-stepper-content step="3">
              <v-card 
                class="mb-12"
                elevation="8"

                >
                <div class="row">
                  <div class="col-sm-6 col-md-3 col-12">
                     <v-text-field
                    v-model="namecomplete"
                    :rules="namecompleteRules"
                    label="Nombre Completo"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-3 col-12">
                    <v-text-field
                    v-model="family"
                    :rules="familyRules"
                    label="Familiar"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-3 col-12"><v-text-field
                    v-model="phone"
                    :rules="phoneRules"
                    label="Telefono"
                    required
                  ></v-text-field></div>
                   <div class="col-sm-6 col-md-3 col-12">
                     <v-text-field
                    v-model="addressfamily"
                    :rules="addressfamilyRules"
                    label="Direccion"
                    required
                  ></v-text-field>
                   </div>
                </div>   
              </v-card>
               <v-btn
                color="dark"
                @click="e6 = 2"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 4"
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 4"
              step="4"
            >
              <h2>Estudios</h2> 
            </v-stepper-step>

            <v-stepper-content step="4">
              <v-card 
                class="mb-12"
                elevation="8"

                >
                <div class="row">
                  <div class="col-sm-6 col-md-3 col-12">
                    <v-text-field
                    v-model="instituciones"
                    :rules="institucionesRules"
                    label="Instituciones"
                    required
                  ></v-text-field></div>
                  <div class="col-sm-6 col-md-3 col-12">
                    <v-text-field
                    v-model="career"
                    :rules="careerRules"
                    label="Carrera Profesional"
                    required
                  ></v-text-field>
                  </div>
                   <div class="col-sm-6 col-md-3 col-12">
                     <v-text-field
                    v-model="entryRules"
                    :rules="entryRules"
                    label="Ingreso"
                    required
                  ></v-text-field>
                   </div>
                  <div class="col-sm-6 col-md-3 col-12">
                    <v-text-field
                    v-model="egres"
                    :rules="egressRules"
                    label="Egreso"
                    required
                  ></v-text-field></div>
                </div> 
              </v-card>
               <v-btn
                color="dark"
                @click="e6 = 3"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 5"
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 5"
              step="5"
            >
              <h2>Experiencias</h2>
            </v-stepper-step>
            <v-stepper-content step="5">
              <v-card 
                class="mb-12"
                elevation="8"
                >
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="experiences"
                    :rules="experiencesRules"
                    label="Experiencia"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="position"
                    :rules="positionRules"
                    label="Puesto"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="typexp"
                    :rules="typeexpRules"
                    label="Tipo de Experiencia"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="start"
                    :rules="startRules"
                    label="Inicio de la Experiencia"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="endfamily"
                    :rules="endfamilyRules"
                    label="Fin de la Experiencia"
                    required
                  ></v-text-field>
                  </div>
                </div>
              </v-card>
              <v-btn
                color="dark"
                @click="e6 = 4"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 6"
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 6"
              step="6"
            >
              <h2>Habilidades</h2>
            </v-stepper-step>

            <v-stepper-content step="6">
              <v-card 
                class="mb-12"
                elevation="8"

                >
                 <div class="row">
                  <div class="col-sm-6 col-md-5 col-12">
                    <v-text-field
                    v-model="skill"
                    :rules="skillRules"
                    label="Habilidad"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-5 col-12">
                     <v-text-field
                    v-model="level"
                    :rules="levelRules"
                    label="Nivel"
                    required
                  ></v-text-field>
                  </div>
                </div>
              </v-card>
               <v-btn
                color="dark"
                @click="e6 = 5"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 7"
              >
                Continuar
              </v-btn>
            </v-stepper-content>
            <v-stepper-step
              color="#009688"
              :complete="e6 > 7"
              step="7"
            >
              <h2>Departamento</h2>
            </v-stepper-step>
            <v-stepper-content step="7">
              <v-card 
                class="mb-12"
                elevation="8"
                >
                 <div class="row">
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="institution"
                    :rules="institutionRules"
                    label="Institucion"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="responsable"
                    :rules="responsableRules"
                    label="Responsable"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="emailcharge"
                    :rules="emailchargeRules"
                    label="Correo del responsable"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="phonecharge"
                    :rules="phonechargeRules"
                    label="Telefono del responsable"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="responsibilities"
                    :rules="responsibilitiesRules"
                    label="Responsabilidades"
                    required
                  ></v-text-field>
                  </div>
                  <div class="col-sm-6 col-md-4 col-12">
                    <v-text-field
                    v-model="schedule"
                    :rules="scheduleRules"
                    label="Horario"
                    required
                  ></v-text-field>
                  </div>
                </div>
              </v-card>
              <v-btn
                color="dark"
                @click="e6 = 6"
              >
                Retroceder
              </v-btn>
              <v-btn
                dark
                color="#009688"
                @click="e6 = 1"
              >
                Finalizar
              </v-btn>
            </v-stepper-content>
              <!-- v-show  USAR ESTO PARA LOS BOTONES Y QUITARLE EL COLOR A LOS FORMULARIOS
                -->
          </v-stepper>

</template>

        </v-container>
      </v-col>
    </v-row>
  </div>

</template>
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

<script>
 export default {
    el: '#menu',
    data () {
      return {
        e6: 1,
        vue: [{
          name: '',
          surname: '',
          birth: '',
          email: '',
          curp: '',
          status: '',
          sex: ''
        }
        ]
        }
    },
  }
</script>