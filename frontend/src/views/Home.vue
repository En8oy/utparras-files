<template>
  <div>
    <h1 class="text-center">Estadisticas de Expedientes UTParras</h1>
    <div>
      <div cols="6" class="row">
        <div xs="12" class="col-md-6 col-12">
          <div class="v-card v-sheet theme--light elevation-10">
            <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
              <div class="v-list-item__content">
                <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Personal Docente</h1> </div>
                <p class="ma-3 text-center"> 35 </p>
                </div>
              </div>
            </div>
          </div>
        <div xs="12" class="col-md-6 col-12">
          <div class="v-card v-sheet theme--light elevation-10">
            <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
              <div class="v-list-item__content">
                <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Departamentos</h1> </div>
                <p class="ma-3 text-center"> 6 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div cols="6" class="row">
        <div xs="12" class="col-md-6 col-12">
          <div class="v-card v-sheet theme--light elevation-10">
            <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
              <div class="v-list-item__content">
                <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Edificios</h1> </div>
                <p class="ma-3 text-center"> 4 </p>
                </div>
              </div>
            </div>
          </div>
        <div xs="12" class="col-md-6 col-12">
          <div class="v-card v-sheet theme--light elevation-10">
            <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
              <div class="v-list-item__content">
                <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Maestros</h1> </div>
                <p class="ma-3 text-center"> 18 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <div>
        <apexchart 
          width="800" type="area" 
          :options="options" :series="series" 
          >
        </apexchart>
        <!-- area-line-bar     esta es la pagina para sacar el codigo de la grafica de pastel      https://apexcharts.com/docs/chart-types/pie-donut/      
        https://www.freecodecamp.org/news/a-detailed-guide-to-integrating-apexcharts-with-vuejs/  -->
      </div>
    </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data: () => ({
         options: {
      chart: {
        id: 'vuechart-example'
      },
      xaxis: {
        categories: [
         "Personal Docente",
         "Departamentos",
         "Edificios",
         "Maestros"
        ]
      },
      title: {
        text: 'Estadistica UTParras',
        align: 'center',
        style: {
          fontSize:  '20px',
        },
      },
      colors: ['#00897b']
 },
 series: [{
   name: 'En Existencia',
   data: [35, 6, 4, 18]
 }]
  })
}
</script>