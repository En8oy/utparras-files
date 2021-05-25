<template>
  <div>
    <v-row class="ma-10">
      <v-col color="black" cols="12" sm="12" md="6">
        <!-- <v-container fluid>
          <v-layout justify-center align-center>
            <v-flex shrink>
              <v-img
                class="white--text align-end"
                width="30rem"
                src="https://storage.googleapis.com/wfhq_webforcehq/images/wfs-img-01@2x.png"
              >
              </v-img>
            </v-flex>
          </v-layout>
        </v-container> -->
      </v-col>
      <v-col cols="12" sm="12" md="12">
        <v-container fluid>

          <v-card
                  class="pa-5"
                  elevation="24"
                  shaped>

                <br>
                <h1 class="text-center"> Datos Personales </h1>
                
                  <v-text-field
                    v-model="name"
                    :rules="nameRules"
                    label="Nombre"
                    required>
                  </v-text-field>

                  <v-text-field
                  v-model="surname"
                  :rules="surnameRules"
                  label="Apellidos"
                  required
                ></v-text-field>

                <v-text-field
                v-model="dateFormatted"
                label="Date"
                hint="MM/DD/YYYY"
                required
                ></v-text-field>

                <v-text-field
                  v-model="email"
                  :rules="emailRules"
                  label="Correo"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="CURP"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="RFC"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Estado Civil"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Sexo"
                  required
                ></v-text-field>

                </v-card>
                <br><br>

          <v-card
            class="pa-5"
            elevation="24"
            shaped>
            
            <h1 class="text-center"> Dirección </h1>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Direccion Personal"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Lugar de Nacimiento"
                  required
                ></v-text-field>

            </v-card>
            <br><br>

            <v-card
            class="pa-5"
            elevation="24"
            shaped>
            
            <h1 class="text-center"> Informacion Familiar </h1>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Nombre Completo"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Familiar"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Telefono"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Direcion"
                  required
                ></v-text-field>

            </v-card
            >
              <br><br>

            <v-card
            class="pa-5"
            elevation="24"
            shaped>

            <h1 class="text-center"> Estudios </h1>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Instituciones"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Carrera Profesional"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Ingreso"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Egreso"
                  required
                ></v-text-field>
              
            </v-card>
            <br><br>
            <v-card
            class="pa-5"
            elevation="24"
            shaped>

            <h1 class="text-center"> Experiencias </h1>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Experiencia"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Puesto"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Tipo de Experiencia"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Inicio de la Experiencia"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Fin de la Experiencia"
                  required
                ></v-text-field>

            </v-card>    
              <br><br>

            <v-card
            class="pa-5"
            elevation="24"
            shaped>

            <h1 class="text-center"> Habilidades </h1>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Habilidad"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Nivel"
                  required
                ></v-text-field>
                <br>
                <h2 class="text-center"> Experiencias internas </h2>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Inicio de lk"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

            </v-card>
            <br><br>
                
            <v-card
            class="pa-5"
            elevation="24"
            shaped>
            
             <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

                <v-text-field
                  v-model="name"
                  :rules="nameRules"
                  label="Name"
                  required
                ></v-text-field>

            </v-card>

            <v-card>
                <v-form>

                <v-select
                  v-model="select"
                  :items="items"
                  :rules="[v => !!v || 'Item is required']"
                  label="Item"
                  required
                ></v-select>

                <v-checkbox
                  v-model="checkbox"
                  :rules="[v => !!v || 'You must agree to continue!']"
                  label="Do you agree?"
                  required
                ></v-checkbox>

                <v-btn
                  :disabled="!valid"
                  color="success"
                  class="mr-4"
                  @click="validate"
                >
                  Validate
                </v-btn>

                <v-btn
                  color="error"
                  class="mr-4"
                  @click="reset"
                >
                  Reset Form
                </v-btn>

                <v-btn
                  color="warning"
                  @click="resetValidation"
                >
                  Reset Validation
                </v-btn>
                </v-form>
          </v-card>
        </v-container>
      </v-col>
    </v-row>
  </div>
</template>

<script>
  export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
      checkbox: false,
      steps:0
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>