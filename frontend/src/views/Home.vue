<template>
  <div  cols="9" sm="12" md="12">
    <center>
      <br><br><br>
      <h1 class="text-center">Estadisticas de Expedientes UTParras</h1>
      <br>
      <div>
        <div cols="6" class="row">
          <div xs="12" class="col-md-6 col-12">
            <div class="v-card v-sheet theme--light elevation-10">
              <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
                <div class="v-list-item__content">
                  <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Personal Docente</h1> </div>
                  <h1 class="text-center">35</h1>
                  </div>
                </div>
              </div>
            </div>
          <div xs="12" class="col-md-6 col-12">
            <div class="v-card v-sheet theme--light elevation-10">
              <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
                <div class="v-list-item__content">
                  <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Departamentos</h1> </div>
                  <h1 class="text-center">6</h1>
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
                  <h1 class="text-center">4</h1>
                  </div>
                </div>
              </div>
            </div>
          <div xs="12" class="col-md-6 col-12">
            <div class="v-card v-sheet theme--light elevation-10">
              <div tabindex="-1" class="v-list-item v-list-item--three-line theme--light">
                <div class="v-list-item__content">
                  <div class="overline mb-4 pa-5 white--text teal"> <h1 class="text-center">Maestros</h1> </div>
                  <h1 class="text-center">18</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>  
        <br><br><br>
        <center>
        <div>
          <div id="responsive-chart"></div>
          <apexchart 
             width="100%" height: 380 type="bar" 
            :options="options" :series="series" 
            >
          </apexchart>
        </div>
        </center>
      
    </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data: () => ({
         options: {
      chart: {
        id: 'vuechart-example',
        height: 400,
        type: "bar",
        align: 'left'
      },
      plotOptions: {
        bar: {
          horizontal: true
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
       width: 1,
      colors: ["#fff"]
      },
      legend: {
        position: "right",
        verticalAlign: "top",
        containerMargin: {
          left: 35,
          right: 60
        }
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
  responsive: [{
      breakpoint: undefined,
      options: {},
  }],
 series: [{
   name: 'En Existencia',
   data: [35, 6, 4, 18]
 }]
  })
}
</script>