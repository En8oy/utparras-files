<template>
  <v-flex>
    <v-row>
      <v-col cols="9" sm="10" md="12">
        <v-flex>
          <v-row>
            <v-col>
              <v-content>
                <v-container class="fill-height" fluid>
                  <v-row>
                    <v-col>
                      <v-card class="elevation-13">
                        <v-window v-model="step">
                          <v-window-item :value="1">
                            <v-row>
                              <v-col cols="12" md="8">
                                <v-card-text class="mt-12">
                                  <h1
                                    class="
                                      text-center
                                      display-2
                                      text-center text--accent-3
                                    "
                                  >
                                    BIENVENIDO A EXPEDIENTES UTPARRAS
                                  </h1>
                                  <br />
                                  <br />
                                  <br />
                                  <h1
                                    class="
                                      text-center
                                      display-1
                                      text-center text-justify text--accent-3
                                    "
                                  >
                                    El expediente electrónico, es una manera
                                    sencilla de visualizar la información de
                                    nuestro personal docente, en este se puede
                                    consultar los datos básicos, así como su
                                    nivel académico y sus respectivos puestos
                                    dentro de la universidad.
                                  </h1>
                                </v-card-text>
                                <div class="text-center mt-3"></div>
                              </v-col>
                              <v-img
                                class="responsive"
                                width="300"
                                height="450"
                                src="https://aem.dropbox.com/cms/content/dam/dropbox/www/en-us/help/guide_gifs/Sharing_Desktop@2x.gif"
                              >
                              </v-img>
                            </v-row>
                          </v-window-item>
                        </v-window>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-container>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
              </v-content>
            </v-col>
          </v-row>
        </v-flex>

        <br />
        <br />
        <br />
        <br />
        <br />

        <div cols="9" sm="12" md="12">
          <center>
            <div>
              <div cols="6" class="row">
                <div xs="12" class="col-md-6 col-12">
                  <div
                    class="v-card v-sheet theme--light elevation-10 transparent"
                  >
                    <div
                      tabindex="-1"
                      class="v-list-item v-list-item--three-line"
                    >
                      <div class="v-list-item__content transparent">
                        <div class="overline mb-4 pa-5 white--text teal">
                          <h1 class="text-center">Personal Docente</h1>
                        </div>
                        <h1 class="ma-3 text-center grey--text">35</h1>
                      </div>
                    </div>
                  </div>
                </div>
                <div xs="12" class="col-md-6 col-12">
                  <div
                    class="v-card v-sheet theme--light elevation-10 transparent"
                  >
                    <div
                      tabindex="-1"
                      class="v-list-item v-list-item--three-line theme--light"
                    >
                      <div class="v-list-item__content">
                        <div class="overline mb-4 pa-5 white--text teal">
                          <h1 class="text-center">Departamentos</h1>
                        </div>
                        <h1 class="ma-3 text-center grey--text">6</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div cols="6" class="row">
              <div xs="12" class="col-md-6 col-12">
                <div
                  class="v-card v-sheet theme--light elevation-10 transparent"
                >
                  <div
                    tabindex="-1"
                    class="v-list-item v-list-item--three-line theme--light"
                  >
                    <div class="v-list-item__content">
                      <div class="overline mb-4 pa-5 white--text teal">
                        <h1 class="text-center">Edificios</h1>
                      </div>
                      <h1 class="ma-3 text-center grey--text">4</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div xs="12" class="col-md-6 col-12">
                <div
                  class="v-card v-sheet theme--light elevation-10 transparent"
                >
                  <div
                    tabindex="-1"
                    class="v-list-item v-list-item--three-line theme--light"
                  >
                    <div class="v-list-item__content">
                      <div class="overline mb-4 pa-5 white--text teal">
                        <h1 class="text-center">Maestros</h1>
                      </div>
                      <h1 class="ma-3 text-center grey--text">18</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </center>
          <br /><br /><br />

          <center>
            <div>
              <apexchart
                xs="12"
                class="col-md-6 col-12"
                type="bar"
                :options="options"
                :series="series"
              >
              </apexchart>
            </div>
          </center>
        </div>
      </v-col>
    </v-row>
  </v-flex>
</template>

<script>
export default {
  name: "HelloWorld",
  data: () => ({
    options: {
      chart: {
        id: "vuechart-example",
        height: 400,
        type: "bar",
        align: "left",
      },
      plotOptions: {
        bar: {
          horizontal: true,
        },
      },

      xaxis: {
        categories: [
          "Personal Docente",
          "Departamentos",
          "Edificios",
          "Maestros",
        ],
      },
      title: {
        text: "Estadistica UTParras",
        align: "center",
        style: {
          fontSize: "25px",
        },
      },
      colors: ["#00897b"],
    },
    responsive: [
      {
        breakpoint: undefined,
        options: {},
      },
    ],
    series: [
      {
        name: "En Existencia",
        data: [35, 6, 4, 18],
      },
    ],
  }),
};
</script>