const CHART = document.getElementById("lineChart");
console.log(CHART);


var datos ={
    labels:["Enero","Febrero","Marzo","Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets:[{
        label:"2018",
        data:["24","55","43","11","19","8","5","6","22","27","11","12"],
        lineTension: 0, //tension de las curvas 0 = lineas rectas
        fill: false,
        borderColor: 'orange',
        backgroundColor: 'transparent',
        borderDash: [], //linea punteada
        pointBorderColor: 'orange',
        pointBackgroundColor: 'rgba(255,150,0,0.5)',
        pointRadius: 5,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
    },{
        label:"2017",
        data:["12","26","47","34","15","11","9","3","14","20","9","13"],
        lineTension: 0, //tension de las curvas 0 = lineas rectas
        fill: false,
        borderColor: 'blue',
        backgroundColor: 'transparent',
        borderDash: [], //linea punteada
        pointBorderColor: 'blue',
        pointBackgroundColor: 'rgba(48,75,0,0.5)',
        pointRadius: 5,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded',
    }]
}

var datos2 ={
    labels:["Enero","Febrero","Marzo","Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets:[{
        label:"2018",
        data:["12","26","47","34","15","11","9","3","14","20","9","13"],
        lineTension: 0, //tension de las curvas 0 = lineas rectas
        fill: false,
        borderColor: 'blue',
        backgroundColor: 'transparent',
        borderDash: [], //linea punteada
        pointBorderColor: 'blue',
        pointBackgroundColor: 'rgba(48,75,0,0.5)',
        pointRadius: 5,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
    }]
}

var opciones = {
    title:{
        display: true,
        text: 'Nuevos pacientes',
    },
    legend:{
        display:true,
        position:'top',
        labels:{
            boxWidth:20,
            fontColor: 'black'
        }
    },
    scales: {
        xAxes: [{
            ticks: {
                autoSkip: false // en teoria no deberia saltarse labels del eje de las x
            }
        }]
    },
}


let lineChart = new Chart(CHART, {
    type: 'line',
    data: datos,
    options: opciones
});

const CHART2 = document.getElementById("lineChart2");
console.log(CHART2)

new Chart(document.getElementById("lineChart2"), {
    type: 'doughnut',
    data: {
      labels: ["Edema", "Insuficiencia venosa", "Flebolicedema", "Lipedema"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
          data: [2478,3267,734,784]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Patologías pacientes'
      }
    }
});


/*
let lineChart2 = new Chart(CHART2, {
    type:'line',
    data: {
        labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
        datasets: [{ 
            data: [86,114,106,106,107,111,133,221,783,2478],
            label: "Africa",
            borderColor: "#3e95cd",
            fill: false
          }, { 
            data: [282,350,411,502,635,809,947,1402,3700,5267],
            label: "Asia",
            borderColor: "#8e5ea2",
            fill: false
          }, { 
            data: [168,170,178,190,203,276,408,547,675,734],
            label: "Europe",
            borderColor: "#3cba9f",
            fill: false
          }, { 
            data: [40,20,10,16,24,38,74,167,508,784],
            label: "Latin America",
            borderColor: "#e8c3b9",
            fill: false
          }, { 
            data: [6,3,2,2,7,26,82,172,312,433],
            label: "North America",
            borderColor: "#c45850",
            fill: false
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: 'World population per region (in millions)'
        }
      }
})
*/


const CHART3 = document.getElementById("lineChart3");
console.log(CHART3)


var dataFirst = {
    label: "Car A - Speed (mph)",
    data: [0, 59, 75, 20, 20, 55, 40],
    lineTension: 0.3,
    // Set More Options
  };
     
  var dataSecond = {
    label: "Car B - Speed (mph)",
    data: [20, 15, 60, 60, 65, 30, 70],
    // Set More Options
  };
     
  var speedData = {
    labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
    datasets: [dataFirst, dataSecond]
  };
   
   

new Chart(document.getElementById("lineChart3"), {
    type: 'line',
    data: speedData
});