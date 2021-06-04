<template>
  <v-container fluid>
    
      <div class="d-flex align-center">
        

      </div>
      <v-btn
        to="/about"
        text
      >
      <v-img></v-img>
      
      </v-btn>
      
      
      <v-spacer></v-spacer>

      <v-btn
        to="/about"
        text
      >
        <span class="mr-2 white--text">Cerrar Sesion</span>
        <v-icon class="white--text">mdi-open-in-new</v-icon>
      </v-btn>
      

    <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
      
    <v-data-table
    :headers="headers"
    :items="desserts"
    :search="search"
    sort-by="Nombre Completo"
    class="elevation-1"
  >
    <template v-slot:top>
      <v-toolbar
        flat
      >
        <v-toolbar-title>Expedientes</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog
          v-model="dialog"
          max-width="500px"
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
              color="#2ea69a"
              dark
              class="mb-2"
              v-bind="attrs"
              v-on="on"
            >
              Nuevo Expediente
            </v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
              <div id="app">
                <v-app>
                <v-container>
                <v-row>
                  <v-col>
                <h1>{{ heading }}</h1>
                <v-btn 
                color='black' 
                class="white--text" 
                @click='generatePDF'>
                Generate PDF
                </v-btn>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.name"
                      label="Nombre Completo"
                    ></v-text-field>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.date"
                      label="Fecha De Nacimiento"
                    ></v-text-field>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.email"
                      label="Correo Electronico"
                    ></v-text-field>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.curp"
                      label="CURP"
                    ></v-text-field>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.rfc"
                      label="RFC"
                    ></v-text-field>

                    <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.civil"
                      label="Estado Civil"
                      
                    ></v-text-field>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.gender"
                      label="Sexo"
                    ></v-text-field>
                  </v-col>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.perso"
                      label="Direccion Personal"
                    ></v-text-field>
                  </v-col>

                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.naci"
                      label="Lugar de Nacimiento"
                    ></v-text-field>
                  </v-col>
                    
                  </v-col>
                  </v-col>
                </v-row>
              </v-container>
            </v-card-text>
                
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="blue darken-1"
                text
                @click="close"
              >
                Cancelar
              </v-btn>
              <v-btn
                color="blue darken-1"
                text
                @click="save"
              >
                Guardar
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
        <v-dialog v-model="dialogDelete" max-width="500px">
          <v-card>
            <v-card-title class="headline">Estas seguro de que quieres eliminarlo?</v-card-title>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
              <v-spacer></v-spacer>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:[`item.actions`]="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    <template v-slot:no-data>
      <v-btn
        color="primary"
        @click="initialize"
      >
        Reset
      </v-btn>
    </template>
  </v-data-table>
   </v-container >
   
</template>

<script>
new Vue({
  el: "#app",
  vuetify: new Vuetify(),
  data() {
    return {
      heading: "Sample PDF Generator",
      moreText: [
        "This is another few sentences of text to look at it.",
        "Just testing the paragraphs to see how they format.",
        "jsPDF likes arrays for sentences.",
        "Do paragraphs wrap properly?",
        "Yes, they do!",
        "What does it look like?",
        "Not bad at all."
      ],
      items: [
        { title: "Item 1", body: "I am item 1 body text" },
        { title: "Item 2", body: "I am item 2 body text" },
        { title: "Item 3", body: "I am item 3 body text" },
        { title: "Item 4", body: "I am item 4 body text" }
      ]
    };
  },
  methods: {
    generatePDF() {
      const columns = [
        { title: "Title", dataKey: "title" },
        { title: "Body", dataKey: "body" }
      ];
      const doc = new jsPDF({
        orientation: "portrait",
        unit: "in",
        format: "letter"
      });
      // text is placed using x, y coordinates
      doc.setFontSize(16).text(this.heading, 0.5, 1.0);
      // create a line under heading 
      doc.setLineWidth(0.01).line(0.5, 1.1, 8.0, 1.1);
      // Using autoTable plugin
      doc.autoTable({
        columns,
        body: this.items,
        margin: { left: 0.5, top: 1.25 }
      });
      // Using array of sentences
      doc
        .setFont("helvetica")
        .setFontSize(12)
        .text(this.moreText, 0.5, 3.5, { align: "left", maxWidth: "7.5" });
      
      // Creating footer and saving file
      doc
        .setFont("times")
        .setFontSize(11)
        .setFontStyle("italic")
        .setTextColor(0, 0, 255)
        .text(
          "This is a simple footer located .5 inches from page bottom",
          0.5,
          doc.internal.pageSize.height - 0.5
        )
        .save(`${this.heading}.pdf`);
    }
  }
});
  export default {
    data: () => ({
      
      drawer: false,
      group: null,
      dialog: false,
      dialogDelete: false,
      search: '',
      headers: [
        {
          columns:'id',
          text: 'id',
          align: 'start',
          sortable: false,
          value: 'name',
          value: 'id',
          Text: 'Informacion Familiar',
        },
        { text: 'Nombre Completo', value: 'name' },
        { text: 'Fecha De Nacimiento', value: 'date',},
        { text: 'Correo Electronico', value: 'email' },
        { text: 'CURP', value: 'curp' },
        { text: 'RFC', value: 'rfc' },
        { text: 'Estado Civil', value: 'civil' },
        { text: 'Sexo', value: 'gender' },
        { text: 'Direccion Personal', value: 'perso'},
        { text: 'Lugar de Nacimiento', value: 'naci'},
        { text: 'Editar, Eliminar', value: 'actions', sortable: false },
      ],
      desserts: [],
      editedIndex: -1,
      editedItem: {
        name: '',
        date: '',
        correo: '',
        mail: '',
        curp: '',
        rfc: '',
        civil: '',
        gender: '',
        perso: '',
      },
      defaultItem: {
        name: '',
        date: '',
        correo: '',
        mail: '',
        curp: '',
        rfc: '',
        civil: '',
        gender: '',
        perso: '',
      },
    }),
    created(){
      axios.get(url).then(response => {
        this.desserts = response.data;
        console.log(this.desserts); 
      })
    },
    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'Nuevo Expediente' : 'Editar Expediente'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
      dialogDelete (val) {
        val || this.closeDelete()
      },
    },

    created () {
      this.initialize()
    },

    methods: {
      initialize () {
        this.desserts = [
          
          {
          },
        ]
      },

      editItem (item) {
        this.editedIndex = this.desserts.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (item) {
        this.editedIndex = this.desserts.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialogDelete = true
      },

      deleteItemConfirm () {
        this.desserts.splice(this.editedIndex, 1)
        this.closeDelete()
      },

      close () {
        this.dialog = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },

      closeDelete () {
        this.dialogDelete = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },

      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.desserts[this.editedIndex], this.editedItem)
        } else {
          this.desserts.push(this.editedItem)
        }
        this.close()
      },
    },
  }
</script>



