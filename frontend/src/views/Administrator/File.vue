<template>
  <div>
    <br /><br /><br />
    <h1 class="text-center">Mi Expediente</h1>
    <v-row class="mx-auto overflow-hidden" height="100%" width="100%">
      <v-col color="black" cols="12" sm="12" md="12"> </v-col>
      <v-col cols="12" sm="12" md="12">
        <v-container fluid>
          <template>
            <v-stepper v-model="step" vertical>
              <v-stepper-step color="#009688" :complete="step > 1" step="1">
                <h2>Datos Personales</h2>
              </v-stepper-step>
              <v-stepper-content step="1" id="menu">
                <br />
                <h2 class="ma-10">Nota 1</h2>
                <p class="text-justify ma-10">
                  Esta Informacion es requerida para el sistema academico de la
                  universiad, la informacion recolectada sera protegida y
                  administrada por personal autorizado de la universidad. Una
                  vez teniendo la infroamcion solicitada sera confidencial.
                </p>
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="text"
                        v-model="$store.state.auth.user.name"
                        label="Nombre"
                        :rules="[rules.required]"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.surname"
                        :rules="surnameRules"
                        label="Apellidos"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.birthdate"
                        :rules="birth"
                        label="Fecha de Nacimiento"
                        hint="DD/MM/AAAA"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="email"
                        v-model="$store.state.auth.user.email"
                        :rules="[rules.required,rules.email]"
                        label="Correo"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.curp"
                        :rules="curpRules"
                        label="CURP"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.rfc"
                        :rules="rfcRules"
                        label="RFC"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.civil_status"
                        :rules="civilRules"
                        label="Estado Civil"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="items"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.sexo"
                        label="Genero"
                      ></v-select>
                    </div>
                  </div>
                </v-card>
                <v-btn dark color="#009688" @click="checkIfIsSet(1)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 2" step="2">
                <h2>Direccion</h2>
              </v-stepper-step>
              <v-stepper-content step="2">
                <h2>Datos de dirección</h2>
                <br />
                <p class="text-justify">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit deserunt numquam fugit officiis officia. Facilis quos pariatur a sapiente, voluptas accusamus mollitia magni officia vitae illo dolor dicta aperiam eveniet!
                </p>
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.personal_address"
                        :rules="addressRules"
                        label="Direccion Personal"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.origin"
                        :rules="placeRules"
                        label="Lugar de Nacimiento"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 1"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(2)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 3" step="3">
                <h2>Informacion Familiar</h2>
              </v-stepper-step>

              <v-stepper-content step="3">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.full_name"
                        :rules="namecompleteRules"
                        label="Nombre Completo"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.family"
                        :rules="familyRules"
                        label="Familiar"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.phone"
                        :rules="phoneRules"
                        label="Telefono"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.address_family"
                        :rules="addressfamilyRules"
                        label="Direccion"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 2"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(3)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 4" step="4">
                <h2>Estudios</h2>
              </v-stepper-step>

              <v-stepper-content step="4">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.instituciones"
                        :rules="institucionesRules"
                        label="Instituciones"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.career"
                        :rules="careerRules"
                        label="Carrera Profesional"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.entry"
                        :rules="entryRules"
                        label="Ingreso"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.egress"
                        :rules="egressRules"
                        label="Egreso"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 3"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(4)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 5" step="5">
                <h2>Experiencias</h2>
              </v-stepper-step>
              <v-stepper-content step="5">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.experiences"
                        :rules="experiencesRules"
                        label="Experiencia"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.position"
                        :rules="positionRules"
                        label="Puesto"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.type_exp"
                        :rules="typeexpRules"
                        label="Tipo de Experiencia"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.start"
                        :rules="startRules"
                        label="Inicio de la Experiencia"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.end"
                        :rules="endfamilyRules"
                        label="Fin de la Experiencia"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 4"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(5)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 6" step="6">
                <h2>Habilidades</h2>
              </v-stepper-step>

              <v-stepper-content step="6">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.skill"
                        :rules="skillRules"
                        label="Habilidad"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.level"
                        :rules="levelRules"
                        label="Nivel"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 5"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(6)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step color="#009688" :complete="step > 7" step="7">
                <h2>Departamento</h2>
              </v-stepper-step>
              <v-stepper-content step="7">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.institucion"
                        :rules="institutionRules"
                        label="Institucion"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.responsable"
                        :rules="responsableRules"
                        label="Responsable"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.email_res"
                        :rules="emailchargeRules"
                        label="Correo del responsable"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.tel"
                        :rules="phonechargeRules"
                        label="Telefono del responsable"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.resp"
                        :rules="responsibilitiesRules"
                        label="Responsabilidades"
                        required
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                         v-model="$store.state.auth.user.horario"
                        :rules="scheduleRules"
                        label="Horario"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 6"> Retroceder </v-btn>
                <v-btn dark color="#009688" @click="checkIfIsSet(7)"> Finalizar </v-btn>
              </v-stepper-content>
              <!-- v-show  USAR ESTO PARA LOS BOTONES Y QUITARLE EL COLOR A LOS FORMULARIOS
                -->
            </v-stepper>
          </template></v-container
        ></v-col
      ></v-row
    >
  </div>
</template>
<script>
export default {
  name: "App",
  data: () => ({
    rules: {
        required: value => !!value || 'Campo requerido.',
        email: value => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Correo no valido.'
        },
    },
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
        name: "web",
        icon: "mdi-web",
        url: "https://www.utparras.edu.mx/",
      },
    ],
    step: 1,
    vue: [
      {
        name: "",
        surname: "",
        birth: "",
        email: "",
        curp: "",
        status: "",
        sex: "",
      },
    ],
  }),
  methods: {
    checkIfIsSet(step){
      switch (step) {
        case 1:
          if (
            this.$store.state.auth.user.name != '' &&
            this.$store.state.auth.user.surname != '' &&
            this.$store.state.auth.user.birthdate != '' &&
            this.$store.state.auth.user.email != '' &&
            this.$store.state.auth.user.curp != '' &&
            this.$store.state.auth.user.rfc != '' &&
            this.$store.state.auth.user.civil_status != '' &&
            this.$store.state.auth.user.sexo != ''
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 2:
          if (
            this.$store.state.auth.user.personal_address != '' &&
            this.$store.state.auth.user.origin != ''
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 3:
          if (
            this.$store.state.auth.user.full_name != '' &&
            this.$store.state.auth.user.family != '' &&
            this.$store.state.auth.user.phone != '' &&
            this.$store.state.auth.user.address_family != ''
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 4:
          if (
            this.$store.state.auth.user.instituciones != '' &&
            this.$store.state.auth.user.career != '' &&
            this.$store.state.auth.user.entry != '' &&
            this.$store.state.auth.user.egress != ''
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 5:
          if (
            this.$store.state.auth.user.experiences != '' &&
            this.$store.state.auth.user.position != '' &&
            this.$store.state.auth.user.type_exp != '' &&
            this.$store.state.auth.user.start != '' &&
            this.$store.state.auth.user.end != '' 
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 6:
          if (
            this.$store.state.auth.user.skill != '' &&
            this.$store.state.auth.user.level != '' 
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
        case 7:
          if (
            this.$store.state.auth.user.institucion != '' &&
            this.$store.state.auth.user.responsable != '' &&
            this.$store.state.auth.user.email_res != '' &&
            this.$store.state.auth.user.tel != '' &&
            this.$store.state.auth.user.resp != '' &&
            this.$store.state.auth.user.horario != '' 
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos")
          }
          break;
      
        default:
          break;
      }
    }
  },
  mounted() {
    console.log(this.$store.state.auth.user)
  },
     
      items: ['Foo', 'Bar', 'Fizz', 'Buzz']
    }
;
</script>