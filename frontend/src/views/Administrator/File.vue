<template>
  <div>
    <br />
    <h1 class="text-center">Mi Expediente</h1>
    <v-row class="mx-auto overflow-hidden" height="100%" width="100%">
      <v-col color="black" cols="12" sm="12" md="12"> </v-col>
      <v-col cols="12" sm="12" md="12">
        <v-container fluid>
          <v-alert color="orange" dismissible elevation="3" text type="info"
            >Esta Informacion es requerida para el sistema academico de la
            universiad, la informacion recolectada sera protegida y administrada
            por personal autorizado de la universidad. Una vez teniendo la
            infroamcion solicitada sera confidencial.
          </v-alert>
          <br />
          <template>
             <v-form @submit.prevent="create()">
            <v-stepper v-model="step" vertical>
              <v-stepper-step
                color=#009688
                :complete="step > 1"
                step="1"
              >
                <h2>Datos Personales</h2>
              </v-stepper-step>
              <v-stepper-content step="1" id="menu">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        type="text"
                        v-model="data.name"
                        label="Nombre"
                        :rules="[rules.required]"
                        required
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="data.surname"
                        :rules="[rules.required]"
                        label="Apellidos"
                        required
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-menu
                        ref="menu"
                        v-model="menu"
                        :close-on-content-click="false"
                        :return-value.sync="data.birthdate"
                        transition="scale-transition"
                        offset-y
                        color=#009688
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="data.birthdate"
                            :max="new Date().toISOString().substr(0, 10)"
                            label="Fecha de Nacimiento"
                            readonly
                            color=#009688
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
                            color=#009688
                            @click="menu = false"
                          >
                            Cancel
                          </v-btn>
                          <v-btn
                            text
                            color=#009688
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
                        v-model="data.email"
                        :rules="[rules.required, rules.email]"
                        label="Correo"
                        required
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="data.curp"
                        :rules="[rules.required]"
                        label="CURP"
                        :counter="18"
                        required
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="data.rfc"
                        :rules="[rules.required]"
                        label="RFC"
                        :counter="13"
                        required
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="EstadoCivil"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="data.civil_status"
                        label="Estado Civil"
                        color=#009688
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="Genero"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="data.sexo"
                        label="Genero"
                        color=#009688
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="rol"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="data.rol"
                        label="Rol"
                        color=#009688
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-select
                        :items="Profesion"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="data.profession"
                        label="Profesion"
                        color=#009688
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                  </div>
                </v-card>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(1)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>
              <v-stepper-step
                color=#009688
                :complete="step > 2"
                step="2"
              >
                <h2>Direccion</h2>
              </v-stepper-step>
              <v-stepper-content step="2">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="data.personal_address"
                        :rules="[rules.required]"
                        label="Direccion Personal ( Colonia, Calle, Numero, Ciudad, C.P )"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="data.origin"
                        :rules="[rules.required]"
                        label="Lugar de Nacimiento  (Colonia, Calle, Numero, Ciudad, C.P )"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-btn color="dark" @click="step = 1"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(2)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>
              <v-stepper-step
                color=#009688
                :complete="step > 3"
                step="3"
              >
                <h2>Informacion Familiar</h2>
              </v-stepper-step>

              <v-stepper-content step="3">
                <h2 class="ma-10">
                  <v-alert color="orange" dismissible text type="info"
                    >Esta Informacion es opcional</v-alert
                  >
                </h2>
                <br />
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newFamilyInformation.family_full_name"
                        label="Nombre Completo"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-select
                        :items="Familiares"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="newFamilyInformation.family"
                        label="Tipo de Familiar"
                        color=#009688
                      ></v-select>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newFamilyInformation.phone"
                        label="Telefono"
                        type="number"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newFamilyInformation.full_address"
                        label="Direccion ( Colonia, Calle, Numero, Ciudad, C.P )"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                <v-col class="text-center" cols="12" sm="12">
                  <v-btn class="white--text" color="#009688" @click="addToArray('family_information',newFamilyInformation)">
                    <v-icon>mdi-plus</v-icon>
                    <p v-text="(data.family_information.length >0 ? 'Familiares Agregados ' +data.family_information.length :'Agregar Familiar')"> </p>
                  </v-btn>
                </v-col>
                <br />
                <v-btn color="dark" @click="step = 2"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(3)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>
              <v-stepper-step
                color=#009688
                :complete="step > 4"
                step="4"
              >
                <h2>Estudios</h2>
              </v-stepper-step>

              <v-stepper-content step="4">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newInstitutions.institution"
                        :rules="[rules.required]"
                        label="Institucion"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newInstitutions.career"
                        :rules="[rules.required]"
                        label="Carrera Profesional"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newInstitutions.start"
                        :rules="[rules.required]"
                        label="Ingreso"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-3 col-12">
                      <v-text-field
                        v-model="newInstitutions.end"
                        :rules="[rules.required]"
                        label="Egreso"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                  <v-col class="text-center" cols="12" sm="12">
                    <v-btn class="white--text" color="#009688" @click="addToArray('institutions',newInstitutions)">
                      <v-icon>mdi-plus</v-icon>
                      <p v-text="(data.institutions.length >0 ? 'Instituciones Agregadas ' +data.institutions.length :'Agregar Institucion')"> </p>
                    </v-btn>
                  </v-col>
                </v-card>
                <v-btn color="dark" @click="step = 3"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(4)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>
              <v-stepper-step
                color=#009688
                :complete="step > 5"
                step="5"
              >
                <h2>Experiencias</h2>
              </v-stepper-step>
              <v-stepper-content step="5">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newExperiences.experience"
                        :rules="[rules.required]"
                        label="Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        :items="Profesion"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="newExperiences.type"
                        :rules="[rules.required]"
                        label="Tipo de Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newExperiences.start1"
                        :rules="[rules.required]"
                        label="Inicio de la Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newExperiences.end2"
                        :rules="[rules.required]"
                        label="Fin de la Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                  <v-col class="text-center" cols="12" sm="12">
                    <v-btn class="white--text" color="#009688" @click="addToArray('experiences',newExperiences)">
                      <v-icon>mdi-plus</v-icon>
                      <p v-text="(data.experiences.length >0 ? 'Experiencias Agregadas ' +data.experiences.length :'Agregar Experiencia')"> </p>
                    </v-btn>
                  </v-col>  
                </v-card>
                <v-btn color="dark" @click="step = 4"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(5)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>
              <v-stepper-step
                color=#009688
                :complete="step > 6"
                step="6"
              >
                <h2>Habilidades</h2>
              </v-stepper-step>

              <v-stepper-content step="6">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-text-field
                        v-model="newSkills.skill"
                        :rules="[rules.required]"
                        label="Habilidad"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-5 col-12">
                      <v-select
                        :items="Nivel"
                        :menu-props="{ top: true, offsetY: true }"
                        v-model="newSkills.nivel"
                        label="Mi Nivel"
                        color=#009688
                        :rules="[rules.required]"
                      ></v-select>
                    </div>
                  </div>
                  <v-col class="text-center" cols="12" sm="12">
                    <v-btn class="white--text" color="#009688" @click="addToArray('skills',newSkills)">
                      <v-icon>mdi-plus</v-icon>
                      <p v-text="(data.skills.length >0 ? 'Habilidades Agregadas ' +data.skills.length :'Agregar Habilidad')"> </p>
                    </v-btn>
                  </v-col>  
                </v-card>
                <v-btn color="dark" @click="step = 5"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(6)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>

              <v-stepper-step
                color=#009688
                :complete="step > 7"
                step="7"
              >
                <h2>Experiencias Internas</h2>
              </v-stepper-step>

              <v-stepper-content step="7">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newInternal_experiences.experience"
                        :rules="[rules.required]"
                        label="Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newInternal_experiences.start4"
                        :rules="[rules.required]"
                        label="Inicio de la Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="newInternal_experiences.end5"
                        :rules="[rules.required]"
                        label="Fin de la Experiencia"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                  <v-col class="text-center" cols="12" sm="12">
                    <v-btn class="white--text" color="#009688" @click="addToArray('internal_experiences',newInternal_experiences)">
                      <v-icon>mdi-plus</v-icon>
                      <p v-text="(data.internal_experiences.length >0 ? 'Experiencias Internas Agregadas ' +data.internal_experiences.length :'Agregar Experiencia Interna')"> </p>
                    </v-btn>
                  </v-col>
                </v-card>
                <v-btn color="dark" @click="step = 6"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(7)"
                >
                  Continuar
                </v-btn>
              </v-stepper-content>

              <v-stepper-step
                color=#009688
                :complete="step > 8"
                step="8"
              >
                <h2>Departamento</h2>
              </v-stepper-step>
              <v-stepper-content step="8">
                <v-card class="mb-12" elevation="8">
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-12">
                      <v-text-field
                        v-model="data.departament_id"
                        :rules="[rules.required]"
                        label="ID del Departamento"
                        color=#009688
                      ></v-text-field>
                    </div>
                  </div>
                </v-card>
                
                

                <v-btn color="dark" @click="step = 7"> Retroceder </v-btn>
                <v-btn
                  dark
                  color=#009688
                  @click="checkIfIsSet(7)"
                >
                  Finalizar
                </v-btn>
              </v-stepper-content>
            </v-stepper>
            <br><br>
              <v-col class="text-center" cols="12" sm="12">
                <v-btn class="white--text" color=#009688 type="submit">
                  <v-icon>mdi-check</v-icon>  Guardar 
                </v-btn>
              </v-col>  
            </v-form>
          </template></v-container
        ></v-col
      ></v-row
    >
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "App",
  data: () => ({
    newFamilyInformation: {
      family_full_name: "Nombre Completo",
      family: "Madre",
      // Family Select (Esposo, Esposa, Hijo/a, Padre, Madre)
      phone: "000",
      full_address: "#",
    },

    newInstitutions:{
          institution: "",
          career: "",
          start: "",
          end: "",
    },

    newExperiences:{
        experience: "",
          type: "",
          // type => select options (Trabajo, Estadías, Certificación, Reconocimiento, Practicas, Diploma, Mención)
          start1: "",
          end2: "",
    },

    newInternal_experiences: {
          experience: "",
          start4: "",
          end5: "",
    },

    newSkills:{
          skill: "",
          nivel: "",
          // nivel => select options 0% - 25%, 25% - 50%, 50% - 75%, 75% - 100%
        },

    data: {
      is_public: true,
      rol: "Administrador",
      profession: "Ingenieria",
      name: "",
      surname: "",
      birthdate: "1989-07-08",
      personal_email: "toshiba@gmail.com",
      curp: "",
      rfc: "",
      civil_status: "",
      sexo: "",
      password: "asdasd123456",
      origin: "",
      personal_address: "",
      email: "",
      status: "Activo",
      departament_id: 1,
      stall: "sdfsdf",
      employee_number: "sdfsdf",
      employee_phone: "842116000",
      salary_min: "12212112",
      salary_max: "21221",
      date_of_admission: "1997-08-13",
      employee_code: "122121",
      family_information: [],
      institutions: [    
      ],
      experiences: [
        
      ],
      skills: [
        
      ],
      internal_experiences: [
       
      ],
    },
    date: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
      .toISOString()
      .substr(0, 10),
    menu: false,
    rules: {
      required: (value) => !!value || "Campo requerido.",
      email: (value) => {
        const pattern =
          /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return pattern.test(value) || "Correo no valido.";
      },
    },
    Genero: ["Hombre", "Mujer"],
    EstadoCivil: ["Soltero", "Casado", "Divorciado", "Viudo"],
    Familiares: ["Padre", "Madre", "Hermano", "Esposo", "Esposa"],
    Nivel: ["10% - 25%", "25% - 50%", "50% - 75%", "75% - 100%"],
    Profesion: ["Tecnica", "Licenciatura","Ingenieria","Maestria","Doctorado",],
    rol: ["Administrador", "Administrativo", "Publico"],
    step: 1,
  }),
  dblClick(date) {
    this.$set(this.done, 0, true);

    alert(`You have just double clicked the following date: ${date}`);
  },
  methods: {
    create() {
      axios
        .post(this.$store.state.url + "users", this.data)
        .then((res) => {
          alert("Bien");
          console.log(res);
        })
        .catch((err) => {
          alert("Mal");
          console.error(err);
        });
    },
    addToArray(array,data){
    switch (array) {
      case 'family_information':
          this.data.family_information.push(data)
          this.newFamilyInformation = {}
        break;
      case 'institutions':
          this.data.institutions.push(data)
          this.newInstitutions = {}
        break;
      case 'experiences':
          this.data.experiences.push(data)
          this.newExperiences = {}
        break;
      case 'skills':
          this.data.skills.push(data)
          this.newSkills = {}
        break;
      case 'internal_experiences':
          this.data.internal_experiences.push(data)
          this.newInternal_experiences = {}
      break;
     }
    },
    // addfamily(to) {
    //   switch (to) {
    //     case "add":
    //       if (this.newfamily.family != "" && this.newfamily.family != "") {
    //         this.newExpediente.family.push({
    //           full_name: this.newfamily.full_name,
    //           family: this.newfamily.family,
    //           phone: this.newfamily.phone,
    //           address_family: this.newfamily.address_family,
    //         });
    //         this.newfamily.full_name = "";
    //         this.newfamily.family = "";
    //         this.newfamily.phone = "";
    //         this.newfamily.addfamily = "";
    //         this.$toast.open({
    //           message: "Familiar agrergado",
    //           type: "success",
    //           position: "top-right",
    //         });
    //       } else {
    //         this.$toast.open({
    //           message: "Ingresa todos los campos requeridos",
    //           type: "error",
    //           position: "top-right",
    //         });
    //       }
    //   }
    // },
    checkIfIsSet(step) {
      switch (step) {
        case 1:
          if (
            this.$data.name != "" &&
            this.$data.surname != "" &&
            this.$data.birthdate != "" &&
            this.$data.email != "" &&
            this.$data.curp != "" &&
            this.$data.rfc != "" &&
            this.$data.civil_status != "" &&
            this.$data.sexo != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 2:
          if (this.$data.personal_address != "" && this.$data.origin != "") {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 3:
          this.step++;

          break;
        case 4:
          if (
            this.$data.instituciones != "" &&
            this.$data.career != "" &&
            this.$data.entry != "" &&
            this.$data.egress != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 5:
          if (
            this.$data.experiences != "" &&
            this.$data.position != "" &&
            this.$data.type_exp != "" &&
            this.$data.start != "" &&
            this.$data.end != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 6:
          if (this.$data.skill != "" && 
              this.$data.level != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 7:
          if (
            this.$data.institucion != "" &&
            this.$data.responsable != "" &&
            this.$data.email_res != "" &&
            this.$data.tel != "" &&
            this.$data.resp != "" &&
            this.$data.horario != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
        case 8:
          if (
            this.$data.institucion != "" &&
            this.$data.responsable != "" &&
            this.$data.email_res != "" &&
            this.$data.tel != "" &&
            this.$data.resp != "" &&
            this.$data.horario != ""
          ) {
            this.step++;
          } else {
            alert("Completa Todos los Campos con la Informacion Solicitada");
          }
          break;
          
      }
    },
  },
  mounted() {
    console.log(this.$store.state.auth.user);
  },
};
</script>
