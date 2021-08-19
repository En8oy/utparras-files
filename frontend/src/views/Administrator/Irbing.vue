<template>
  <div>
    <v-form @submit.prevent="create()">
      <v-select :items="[{value : true}, {value : false}]" item-text="value" item-value="value">
      </v-select>
      <v-text-field
        label="Rol"
        v-model="data.rol"
      ></v-text-field>
       <v-text-field
        label="Profesión"
        v-model="data.profession"
      ></v-text-field>
      <v-btn type="submit">
        <v-icon>mdi-check</v-icon>
      </v-btn>
    </v-form>
  </div>
</template>
<script>
import axios from "axios";
export default {
  mounted() {
    // alert("Hola mundo");
  },
  methods: {
    create() {
      axios.post(this.$store.state.url + "users", this.data)
        .then((res) => {
            alert("Bien")
          console.log(res);
        })
        .catch((err) => {
            alert("Mal")
          console.error(err);
        });
    },
  },
  data() {
    return {
      data: {
        is_public: true,
        rol: "Administrador",
        profession: "Ing.",
        name: "qws",
        surname: "qws",
        birthdate: "1977-01-05",
        personal_email: "qws",
        curp: "jausiapaloaksioalo",
        rfc: "jausiapaloaksioalo",
        civil_status: "Soltero",
        sexo: "Hombre",
        password: "qwsqwsqswqwsq",
        origin: "qwsqwsqwws",
        personal_address: "qwsqwsqwsqws",
        email: "qwsqwsq@iuqwjhdso.com",
        status: "Activo",
        departament_id: 1,
        stall: "wedwedewed",
        employee_number: "wewdwew",
        employee_phone: "122212121221",
        salary_min: "12212112",
        salary_max: "21221",
        date_of_admission: "1997-08-13",
        employee_code: "122121",
        family_information: [
        //   {
        //     family_full_name: "Nombre, apelloido completos",
        //     family: "Esposo",
        //     // Family Select (Esposo, Esposa, Hijo/a, Padre, Madre)
        //     phone: "8424221111",
        //     full_address: "Colonia, calle, numero, ciudad, c.p",
        //   },
        ],
        institutions: [
        //   {
        //     institution: "Universidad Tecnolog",
        //     career: "Tecnol",
        //     start: "1997-08-13",
        //     end: "1997-08-13",
        //   },
        ],
        experiences: [
        //   {
        //     experience: "Nombre de la experiencia",
        //     type: "Trabajo",
        //     // type => select options (Trabajo, Estadías, Certificación, Reconocimiento, Practicas, Diploma, Mención)
        //     start: "1997-08-14",
        //     end: "1997-08-14",
        //   },
        ],
        skills: [
        //   {
        //     skill: "Nombre de la habilidad",
        //     nivel: "0% - 20%",
        //     // nivel => select options 0% - 25%, 25% - 50%, 50% - 75%, 75% - 100%
        //   },
        ],
        internal_experiences: [
        //   {
        //     experience: "Nombre de la experiencia interna",
        //     start: "1997-08-14",
        //     end: "1997-08-14",
        //   },
        ],
      },
    };
  },
};
</script>