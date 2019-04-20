const CHART = document.getElementById("lineChart");
console.log(CHART);


let lineChart = new Chart(CHART, {
    type: 'line',
    data: {
        //Xs
        labels: ["Enero", "Febrero", "Marzo"],
        datasets: [{
            //Ys
            label: 'Pacientes por mes',
            data: [2, 3, 1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'

            ],
            borderWidth: 1
        }]
    },



})