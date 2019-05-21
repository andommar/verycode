
    var id_usuario = $("#usuario").val();
    var opcion = "mostrar_graficas";
    var cosas = "";
    var fechas = "";
    var grafica_datos=document.getElementById("lineChart");




    var mediciones =
    {
        izquierdo: [],
        derecho: [],
        derecho_carga: [],
        diferencia: []
    };




    //GRAFICA

    var datos_graph ={
        labels:["p1","p2","p3","p4","p5"],
        datasets:[
            {
                label: "Mediciones lado sano",
                data: mediciones.izquierdo,
                borderColor: 'blue',
                fill:false,
                lineTension:0,
                pointRadius: 5,
                type: 'line'
            },
            {
                label: "Mediciones lado afecto",
                data: mediciones.derecho_carga,
                borderColor: 'red',
                fill:false,
                lineTension:0,
                pointRadius: 5,
                type: 'line'
            },
            {
                label: "Diferencia mediciones",
                data: mediciones.diferencia,
                backgroundColor: 'rgba(134,213,102,0.3)',
                borderColor: 'rgba(134,213,102,0.3)'
            }
        ]
    };


    var opciones = {
        title:{
            display: true,
            text: 'Comparativa. Fecha: ',
            fontSize: 20,
            fontColor:"#111"
        },
        legend:{
            display:true,
            position:'bottom',
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
            }],
            yAxes:[{
                ticks: {
                    autoSkip: false, // en teoria no deberia saltarse labels del eje de las y
                    min: 0
                }
            }]

        },
    }

$(document).ready(function(){

   
    $.ajax({
        url:"control/vista.php",
        type:"GET",
        data:{opcion:opcion, id_usuario:id_usuario},
        success:function(data){

            $("#titulo-paciente").html("Mediciones · Paciente "+id_usuario);
            
            var datos = $.parseJSON(data); //hace falta parsear al devolver los datos del php (aunque hayamos hecho json encode en php)
            //datos[0]; --> todo menos fechas
            //datos[1]; --> fechas
            // console.log("datos "+datos);
            // console.log("datos "+datos[1]);
            // console.log("datos "+datos[0]);

            cosas = datos[0];
            fechas = datos[1];

            // console.log("Array cosas"+cosas[0]["p1"]);
            // console.log("Array fechas"+fechas);





   

            //creamos un array de objetos con las mediciones de lado izquierdo, derecho y la diferencia entre los puntos
            
            //var fechas=[];



            var len = cosas.length;
            // console.log(data.fecha);
            // console.log(datos);
            // console.log("Array len"+len);

            for(var i = 0; i<len; i++)
            {
                if(cosas[i].lado_sano=="si")
                {
                    mediciones.izquierdo.push(cosas[i].p1);
                    mediciones.izquierdo.push(cosas[i].p2);
                    mediciones.izquierdo.push(cosas[i].p3);
                    mediciones.izquierdo.push(cosas[i].p4);
                    mediciones.izquierdo.push(cosas[i].p5);
                    // console.log("holap");
                    // console.log(datos[i].p1);
                }
                else if(cosas[i].lado_sano="no")
                {
                    mediciones.derecho.push(cosas[i].p1);
                    mediciones.derecho.push(cosas[i].p2);
                    mediciones.derecho.push(cosas[i].p3);
                    mediciones.derecho.push(cosas[i].p4);
                    mediciones.derecho.push(cosas[i].p5);

                    //Primeras mediciones que coge del lado derecho
                    mediciones.derecho_carga[0]=cosas[0].p1;
                    mediciones.derecho_carga[1]=cosas[0].p2;
                    mediciones.derecho_carga[2]=cosas[0].p3;
                    mediciones.derecho_carga[3]=cosas[0].p4;
                    mediciones.derecho_carga[4]=cosas[0].p5;

                }
            }

            var resta=0;

            for(i=0; i<mediciones.izquierdo.length;i++)
            {
                resta=mediciones.derecho_carga[i]-mediciones.izquierdo[i];
                mediciones.diferencia[i]=resta;
                //console.log(fechas[i]);
            }

            //  console.log(mediciones.izquierdo);
            //  console.log(mediciones.derecho);
            //  console.log(mediciones.diferencia);



           


                var chart = new Chart( grafica_datos, {
                type : "bar",
                data : datos_graph,
                options : opciones
              }
              );

            //   //===================== SEGUNDA GRÁFICA

            //   var evolucion =
            //   {
            //       p1: [],
            //       p2: [],
            //       p3: [],
            //       p4: [],
            //       p5: []
            //   };
  
  
            //   //var len = cosas.length;
            //   // console.log(data.fecha);
            //   // console.log(datos);
  
            //   for(var i = 0; i<len; i++)
            //   {
            //     evolucion.p1.push(cosas[i].p1);
            //     evolucion.p2.push(cosas[i].p2);
            //     evolucion.p3.push(cosas[i].p3);
            //     evolucion.p4.push(cosas[i].p4);
            //     evolucion.p5.push(cosas[i].p5);
            //   }




            //   var grafica_ultimas=document.getElementById("lineChart_ultimas10");

            //   var datos_ultimas ={
            //     labels:fechas,
            //     datasets:[
            //         {
            //             label: "p1",
            //             data: evolucion.p1,
            //             borderColor: 'blue',
            //             fill:false,
            //             lineTension:0,
            //             pointRadius: 5,
            //             type: 'line'
            //         },
            //         {
            //             label: "p2",
            //             data: evolucion.p2,
            //             borderColor: 'red',
            //             fill:false,
            //             lineTension:0,
            //             pointRadius: 5,
            //             type: 'line'
            //         },
            //         {
            //             label: "p3",
            //             data: evolucion.p3,
            //             borderColor: 'green',
            //             fill:false,
            //             lineTension:0,
            //             pointRadius: 5,
            //             type: 'line'
            //         },
            //         {
            //             label: "p4",
            //             data: evolucion.p4,
            //             borderColor: 'purple',
            //             fill:false,
            //             lineTension:0,
            //             pointRadius: 5,
            //             type: 'line'
            //         },
            //         {
            //             label: "p5",
            //             data: evolucion.p5,
            //             borderColor: '#e8c3b9',
            //             fill:false,
            //             lineTension:0,
            //             pointRadius: 5,
            //             type: 'line'
            //         },
            //         // {
            //         //     label: "Diferencia mediciones",
            //         //     data: mediciones.diferencia,
            //         //     backgroundColor: 'rgba(134,213,102,0.3)',
            //         //     borderColor: 'rgba(134,213,102,0.3)'
            //         // }
            //     ]
            // };

            // var chart = new Chart( grafica_ultimas, {
            //     type : "line",
            //     data : datos_ultimas,
            //     options : opciones
            //   }
            //   );



            // CARGAR TABLA

            var filas_mediciones='';
            var i=1;


            cosas.forEach(function(element){
                    if(element.lado_sano=='si')
                    {
                        filas_mediciones+= '<tr style="color:blue"><td>'+fechas[0]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td></td></tr>';
                    }
            });

            cosas.forEach(function(element){

                if(element.lado_sano=='no')
                {
                    filas_mediciones+= '<tr><td>'+fechas[i]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td><button type="button" class="btn azul" value="fechaMedicion" onClick="fechaMedicion('+element.p1+','+element.p2+','+element.p3+','+element.p4+','+element.p5+')"><span class="ti-bar-chart-alt"></span></button></td></tr>';
                    i++;
                }
            });


            $('#pacientes-table tbody').html(filas_mediciones);


        },
        error : function(data) {
            // console.log(data);
          },


          

    });



});

function fechaMedicion(p1,p2,p3,p4,p5){
    console.log(p1,p2,p3,p4,p5);

    

    mediciones.derecho_carga[0]=p1;
    mediciones.derecho_carga[1]=p2;
    mediciones.derecho_carga[2]=p3;
    mediciones.derecho_carga[3]=p4;
    mediciones.derecho_carga[4]=p5;

    var resta=0;

    for(i=0; i<mediciones.izquierdo.length;i++)
    {
        resta=mediciones.derecho_carga[i]-mediciones.izquierdo[i];
        mediciones.diferencia[i]=resta;
        //console.log(fechas[i]);
    }

    grafica_datos.remove();
    
    $("div#grafica1").append('<canvas id ="lineChart" height="300" width="400"></canvas>');
    grafica_datos=document.getElementById("lineChart");
    var chart = new Chart( grafica_datos, {
        type : "bar",
        data : datos_graph,
        options : opciones
      }
      );
    



};








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