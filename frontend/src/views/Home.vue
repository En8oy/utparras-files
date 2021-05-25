<template>
   <div>
    <v-row class="ma-10">
      <v-col color="black" cols="12" sm="12" md="6">
        {{name}}
        <v-container fluid>
              <v-text-field
            v-model="name"
            :counter="20"
            :rules="nameRules"
            label="Name"
            required
          ></v-text-field>

          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>

          <v-select
            v-model="select"
            :items="carros"
            item-text="nombre"
            item-value="id"
            @change="selectedCar()"
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
        </v-container>
      </v-col>
    </v-row>
  </div>
</template>

<script>
// const axios = require('axios').default;
  export default {
    data: () => ({
      valid: true,
      name: 'Informacion',
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
      carros: [
        {
          id : 1,
          marca : "Ford",
          nombre : "Ranger"
        },
        {
          id : 2,
          marca : "Chevrolet",
          nombre : "Aveo"
        },
        {
          id : 3,
          marca : "Nissan",
          nombre : "Versa"
        },

      ],
      checkbox: false,
    }),

    mounted() {
      this.getPokemons()
    },

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      selectedCar(){
        console.log("Haz seleccioonado el auto" + this.select)
      },
      reset () {
        this.$refs.form.reset()
      },
      getPokemons(){
        // axios.get("https://pokeapi.co/api/v2/pokemon/")
        // .then(res => {
        //   console.log(res)
        // })
        // .catch(err => {
        //   console.error(err); 
        // })
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>