$(document).ready(function(){

  /**
   * call the data.php file to fetch the result from db table.
   */
    $.ajax({
        url:"grafica.php",
        type:"GET",
        success:function(data){
            console.log(data);

            var datos = JSON.parse(data);


            var mediciones =
            {
                izquierdo: [],
                derecho: []
            };

            var len = datos.length;

            for(var i = 0; i<len; i++)
            {
                if(datos[i].lado=="izquierdo")
                {
                    mediciones.izquierdo.push(datos[i].p1);
                    mediciones.izquierdo.push(datos[i].p2);
                    mediciones.izquierdo.push(datos[i].p3);
                    mediciones.izquierdo.push(datos[i].p4);
                    mediciones.izquierdo.push(datos[i].p5);
                    console.log("holap");
                    console.log(datos[i].p1);
                }
                else if(datos[i].lado="derecho")
                {
                    mediciones.derecho.push(datos[i].p1);
                    mediciones.derecho.push(datos[i].p2);
                    mediciones.derecho.push(datos[i].p3);
                    mediciones.derecho.push(datos[i].p4);
                    mediciones.derecho.push(datos[i].p5);
                }
            }

            console.log(mediciones.izquierdo);
            console.log(mediciones.derecho);

            var grafica_datos=document.getElementById("lineChart");

            var datos_graph ={
                labels:["p1","p2","p3","p4","p5"],
                datasets:[
                    {
                        label: "Mediciones lado izquierdo",
                        data: mediciones.izquierdo,
                        borderColor: 'blue',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5
                    },
                    {
                        label: "Mediciones lado derecho",
                        data: mediciones.derecho,
                        borderColor: 'red',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5
                    }
                ]
            };

            var options = {
                title : {
                  display : true,
                  position : "top",
                  text : "Line Graph",
                  fontSize : 18,
                  fontColor : "#111"
                },
                legend : {
                  display : true,
                  position : "bottom"
                }
              };

              var chart = new Chart( grafica_datos, {
                type : "line",
                data : datos_graph,
                options : options
              } );

        },
        error : function(data) {
            console.log(data);
          }
    });



});









// //GRÁFICA SIMPLE
// const grafica_datos= document.getElementById("lineChart");
// console.log(grafica_datos);



// var grafica_mediciones = new Chart(grafica_datos,{
//     type:'line',
//     data: {
//                 //Xs
//                 labels: ["Enero", "Febrero", "Marzo"],
//                 datasets: [
//                     {
//                         //Ys
//                         label: 'Linfedema', //TITULO SERIE DATOS
//                         data: [2, 3, 1], //DATOS 
//                         lineTension: 0, //tension de las curvas 0 = lineas rectas
//                         fill: false,
//                         borderColor: 'blue',
//                         backgroundColor: 'transparent',
//                         borderDash: [], //linea punteada
//                         pointBorderColor: 'blue',
//                         pointBackgroundColor: 'rgba(48,75,0,0.5)',
//                         pointRadius: 5,
//                         pointHoverRadius: 10,
//                         pointHitRadius: 30,
//                         pointBorderWidth: 2,
//                         pointStyle: 'rectRounded'
//                     },
//                     {
//                         //Ys
//                         label: 'Infartos',
//                         data: [8, 12, 30],
//                         lineTension: 0, //tension de las curvas 0 = lineas rectas
//                         fill: false,
//                         borderColor: 'red',
//                         backgroundColor: 'transparent',
//                         borderDash: [], //linea punteada
//                         pointBorderColor: 'blue',
//                         pointBackgroundColor: 'rgba(85,15,0,0.5)',
//                         pointRadius: 5,
//                         pointHoverRadius: 10,
//                         pointHitRadius: 30,
//                         pointBorderWidth: 2,
//                         pointStyle: 'rectRounded'
//                     },
//             ]
//         },
// });