<template>
  <div>
    <br /><br /><br />
    <h1 class="text-center">Mi Expediente</h1>
    <v-row class="mx-auto overflow-hidden" height="100%" width="100%">
      <v-col color="black" cols="12" sm="12" md="12"> </v-col>
      <v-col cols="12" sm="12" md="12">
        <v-container fluid>
          <v-alert
                    color="orange"
                    dismissible
                    elevation="3"
                    text
                    type="info"
                  >Esta Informacion es requerida para el sistema academico de la
                  universiad, la informacion recolectada sera protegida y
                  administrada por personal autorizado de la universidad. Una
                  vez teniendo la infroamcion solicitada sera confidencial.
          </v-alert>
          <br>
          <template>
            <v-stepper v-model="step" vertical>
              <v-stepper-step :color="$store.state.color" :complete="step > 1" step="1">
                <h2>Datos Personales</h2>
              </v-stepper-step>
              <v-stepper-content step="1" id="menu">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="text"
                        v-model="$store.state.auth.user.name"
                        label="Nombre"
                        :rules="[rules.required]"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.surname"
                        :rules="[rules.required]"
                        label="Apellidos"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                       <v-menu
                        ref="menu"
                        v-model="menu"
                        :close-on-content-click="false"
                        :return-value.sync="$store.state.auth.user.birthdate"
                        transition="scale-transition"
                        offset-y
                        :color="$store.state.color"
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="$store.state.auth.user.birthdate"
                            :max="new Date().toISOString().substr(0, 10)"
                            label="Fecha de Nacimiento"
                            readonly
                            :color="$store.state.color"
                            hint="AAAA/MM/DD"
                            locale=""
                            v-bind="attrs"
                            v-on="on"
                            
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          v-model="date"
                          no-title
                          scrollable
                          @contextmenu:year="contextMenu"
                          @dblclick:date="dblClick"
                          @mouseenter:month="mouseEnter"
                          @mouseleave:month="mouseLeave"
                        >
                          <v-spacer></v-spacer>
                          <v-btn
                            text
                            :color="$store.state.color"
                            @click="menu = false"
                          >
                            Cancel
                          </v-btn>
                          <v-btn
                            text
                            :color="$store.state.color"
                            @click="$refs.menu.save(date)"
                          >
                            OK
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="email"
                        v-model="$store.state.auth.user.email"
                        :rules="[rules.required,rules.email]"
                        label="Correo"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.curp"
                        :rules="[rules.required]"
                        label="CURP"
                        :counter="18"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.rfc"
                        :rules="[rules.required]"
                        label="RFC"
                        :counter="13"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="items2"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.civil_status"
                        label="Estado Civil"
                        :color="$store.state.color"
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="items"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.sexo"
                        label="Genero"
                        :color="$store.state.color"
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                  </div>
                </v-card>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(1)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 2" step="2">
                <h2>Direccion</h2>
              </v-stepper-step>
              <v-stepper-content step="2">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.personal_address"
                        :rules="[rules.required]"
                        label="Direccion Personal ( Colonia, Calle, Numero, Ciudad, C.P )"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.origin"
                        :rules="[rules.required]"
                        label="Lugar de Nacimiento  (Colonia, Calle, Numero, Ciudad, C.P )"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 1"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(2)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 3" step="3">
                <h2>Informacion Familiar</h2>
              </v-stepper-step>

              <v-stepper-content step="3">
                 <h2 class="ma-10">
                   <v-alert
                    color="orange"
                    dismissible
                    text
                    type="info"
                  >Esta Informacion es opcional</v-alert>
                </h2>
                <br>
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.full_name"
                        label="Nombre Completo"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-select
                        :items="items3"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.family"
                        label="Tipo de Familiar"
                        :color="$store.state.color"
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.phone"
                        label="Telefono"
                        type="number"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.address_family"
                        label="Direccion ( Colonia, Calle, Numero, Ciudad, C.P )"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 2"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(3)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 4" step="4">
                <h2>Estudios</h2>
              </v-stepper-step>

              <v-stepper-content step="4">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.instituciones"
                        :rules="[rules.required]"
                        label="Institucion"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.career"
                        :rules="[rules.required]"
                        label="Carrera Profesional"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.entry"
                        :rules="[rules.required]"
                        label="Ingreso"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.egress"
                        :rules="[rules.required]"
                        label="Egreso"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 3"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(4)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 5" step="5">
                <h2>Experiencias</h2>
              </v-stepper-step>
              <v-stepper-content step="5">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.experiences"
                        :rules="[rules.required]"
                        label="Experiencia"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.position"
                        :rules="[rules.required]"
                        label="Puesto"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        :items="items5"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.type_exp"
                        :rules="[rules.required]"
                        label="Tipo de Experiencia"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.start"
                        :rules="[rules.required]"
                        label="Inicio de la Experiencia"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.end"
                        :rules="[rules.required]"
                        label="Fin de la Experiencia"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 4"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(5)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 6" step="6">
                <h2>Habilidades</h2>
              </v-stepper-step>

              <v-stepper-content step="6">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.skill"
                        :rules="[rules.required]"
                        label="Habilidad"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-select
                        :items="items4"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="$store.state.auth.user.level"
                        label="Mi Nivel"
                        :color="$store.state.color"
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 5"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(6)"> Continuar </v-btn>
              </v-stepper-content>
              <v-stepper-step :color="$store.state.color" :complete="step > 7" step="7">
                <h2>Departamento</h2>
              </v-stepper-step>
              <v-stepper-content step="7">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.institucion"
                        :rules="[rules.required]"
                        label="Institucion"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.responsable"
                        :rules="[rules.required]"
                        label="Responsable"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="email"
                        v-model="$store.state.auth.user.email_res"
                        :rules="[rules.required,rules.email]"
                        label="Correo del Responsable"
                        required
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.tel"
                        :rules="[rules.required]"
                        label="Telefono del responsable"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.resp"
                        :rules="[rules.required]"
                        label="Responsabilidades"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="$store.state.auth.user.horario"
                        :rules="[rules.required]"
                        label="Horario"
                        :color="$store.state.color"
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 6"> Retroceder </v-btn>
                <v-btn dark :color="$store.state.color" @click="checkIfIsSet(7)"> Finalizar </v-btn>
              </v-stepper-content>
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
      date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
        menu: false,
    rules: {
        required: value => !!value || 'Campo requerido.',
        email: value => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Correo no valido.'
        },
    },
    items: ['Masculino', 'Femenino'],
    items2: ['Soltero', 'Casado', 'Divorciado', 'Viudo'],
    items3: ['Padre', 'Madre', 'Hermano'],
    items4: ['10% - 25%', '25% - 50%', '50% - 75%', '75% - 100%'],
    items5: ['Tecnica', 'Licenciatura', 'Ingenieria', 'Maestria', 'Doctorado'],
    step: 1,
  }),
  dblClick (date) {
        this.$set(this.done, 0, true)

        alert(`You have just double clicked the following date: ${date}`)
      },
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
            alert("Completa Todos los Campos con la Informacion Solicitada")
          }
          break;
        case 2:
          if (
            this.$store.state.auth.user.personal_address != '' &&
            this.$store.state.auth.user.origin != ''
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos con la Informacion Solicitada")
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
            alert("Completa Todos los Campos con la Informacion Solicitada")
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
            alert("Completa Todos los Campos con la Informacion Solicitada")
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
            alert("Completa Todos los Campos con la Informacion Solicitada")
          }
          break;
        case 6:
          if (
            this.$store.state.auth.user.skill != '' &&
            this.$store.state.auth.user.level != '' 
          ){
            this.step++
          }else{
            alert("Completa Todos los Campos con la Informacion Solicitada")
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
            alert("Completa Todos los Campos con la Informacion Solicitada")
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
  }
;
</script>