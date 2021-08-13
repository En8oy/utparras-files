<template>
  <v-container fluid>
    <v-spacer></v-spacer>

    <v-btn to="/about" text>
      <span class="mr-2 white--text">Cerrar Sesion</span>
      <v-icon class="white--text">mdi-open-in-new</v-icon>
    </v-btn>

    <v-spacer></v-spacer>
    <v-text-field
      v-model="search"
      append-icon="mdi-magnify"
      label="Buscar"
      single-line
      hide-details
    ></v-text-field>

    <v-data-table
      :headers="headers"
      :items="users"
      :search="search"
      sort-by="Nombre Completo"
      class="elevation-1"
    >
      <template v-slot:item.actions="{ item }">
        <v-button @click="openModal(item)">
          <v-icon>mdi-pencil</v-icon>
        </v-button>
      </template>
    </v-data-table>
    <v-dialog v-model="modalUser" max-width="500px">
      <v-card>
        <v-card-title>
          <span class="headline">{{ formTitle }}</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col cols="12" sm="12" md="6">
                <v-text-field
                  v-model="user.name"
                  label="Nombre"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.surname"
                  label="Apellido"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.public_slug"
                  label="Slug"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.birthdate"
                  label="Fecha de nacimiento"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.personal_email"
                  label="Correo Personal"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.curp"
                  label="CURP"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.rfc"
                  label="RFC"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.civil_status"
                  label="Estado Civil"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.sexo"
                  label="Sexo"
                  :items="Sexo"
                  :menu-props="{ top: true, offsetY: true}"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.origin"
                  label="Lugar de nacimiento"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.personal_address"
                  label="Direccion Personal"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.profession"
                  label="Profecion"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.rol"
                  label="Rol"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.status"
                  label="Estado"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.experiences"
                  label="Experiencias"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="user.family_information"
                  label="Informacion Familiar"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  v-model="academics.employee_code"
                  label="employee code"
                ></v-text-field>
              </v-col>
              
            
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="user = {}, modalUser = false"> Cancelar </v-btn>
          <v-btn color="blue darken-1" text @click="updateUser()"> Guardar </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-container>
</template>

<script>
const axios = require("axios").default;
import swal from "sweetalert";

export default {
  data: () => ({
    modalUser : false,
    users: [],
    user : {},
    academics: [],
    academic: {},
    dialog: false,
    dialogDelete: false,
    search: "",
    id: null,
    headers: [
      { text: "ID", value: "id" },
      { text: "Nombre", value: "name" },
      { text: "Apellido", value: "surname" },
      { text: "Slug", value: "public_slug" },
      { text: "Acciones", value: "actions", sortable: false },
    ],
    
    editedIndex: -1,
    editedItem: {
      name: "",
      surname: "",
      public_slug: "",
      birthdate: "",
      personal_email: "",
      curp: "",
      rfc: "",
      civil_status: "",
      sexo: "",
      origin: "",
      personal_address: "",
      profession: "",
      status: "",
      experiences: "",
      family_information: "",
      skills: "",
      institutions: "",
      employee_code: "",
    },
  }),
  computed: {
    formTitle() {
      return this.editedIndex === -1
        ? "Editar Expediente"
        : "Editar Expediente";
    },
  },
  watch: {
    dialog(val) {
      val || this.close();
    },
    dialogDelete(val) {
      val || this.closeDelete();
    },
  },
  created() {
    this.initialize();
  },
  mounted() {
    this.id = this._uid;
    this.getUsers();
    this.getAcademics();
  },
  methods: {
    updateUser(){
      axios.put(this.$store.state.url + "users/" + user.public_slug + "academics/" + academics.stall,{
        "personal_email" : this.user.personal_email,
        "name" : this.user.name,
        "surname": this.user.surname,
        "birthdate" : this.user.birthdate,
        "curp" : this.user.curp,
        "rfc" : this.user.rfc,
        "civil_status" : this.user.civil_status,
        "sexo" : this.user.sex,
        "origin"  : this.user.origin,
        "personal_address"  : this.user.personal_address,
        "profession"  : this.user.profession,
        "rol"  : this.user.rol,
        "status"  : this.user.status,
        "experiences"  : this.user.experiences,
        "family_information"  : this.usre.family_information,
        "skills"  : this.user.skills,
        "institutions"  : this.user.institutions,
        "employee_code"  : this.academics.employee_code,
      })
      .then(res => {
        this.getUsers()
        swal({
          title: "Se ha modificado al usuario " + this.user.name,
          icon: "success",
          button: "Ok",
        });
      })
      .catch(err => {
        swal({
          title: "Error al actualizar a " + this.user.name,
          icon: "error",
          button: "Ok",
        });
      })
    },
    openModal(user) {
       axios.get(this.$store.state.url + "users/" + user.public_slug)
        .then((res) => {
          this.user = res.data.data
          this.modalUser = true
        })
        .catch((err) => {
          swal({
            title: "Error Al obtener Usuarios",
            icon: "error",
            button: "Ok",
          });
        });
    },
    initialize() {
      this.desserts = [{}];
    },
    editItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },
    deleteItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialogDelete = true;
    },
    deleteItemConfirm() {
      this.desserts.splice(this.editedIndex, 1);
      this.closeDelete();
    },
    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },
    closeDelete() {
      this.dialogDelete = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },
    save() {
      if (this.editedIndex > -1) {
        Object.assign(this.desserts[this.editedIndex], this.editedItem);
      } else {
        this.desserts.push(this.editedItem);
      }
      this.close();
    },
    newUser() {
      
    },
    getUsers() {
      axios
        .get(this.$store.state.url + "users")
        .then((res) => {
          this.users = res.data.data;
          swal({
            title: "Usuarios Obtenidos",
            icon: "success",
            button: "Ok",
          });
        })
        .catch((err) => {
          // console.error(err);
          swal({
            title: "Error Al obtener Usuarios",
            icon: "error",
            button: "Ok",
          });
        });
    },
  },
  mounted() {
    this.getUsers();
    this.getAcademics();
  },
};
</script> 
