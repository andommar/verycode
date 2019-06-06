
    var id_usuario = $("#usuario").val();
    var opcion = "mostrar_graficas";
    var cosas = "";
    var fechas = "";
    var grafica_datos=document.getElementById("lineChart");
    var grafica_evolucion=document.getElementById("lineChartevolucion");
    var grafica_piernas=document.getElementById("lineChartPierna");
    var filas_mediciones='';
    var filas_mediciones_pierna='';
    var i=1, j=0,m=0;


    var mediciones =
    {
        lado_sano: [],
        derecho: [],
        lado_afecto: [],
        diferencia: [],
        p_lado_sano: [],
        p_lado_afecto: [],
        p_diferencia: []
    };

    var evolucion =
    {
        p1: [],
        p2: [],
        p3: [],
        p4: [],
        p5: []
    };

    var separacion_fechas =
    {
        fechas_pierna: [],
        fechas_brazo: []
    }



    //GRAFICA

    var datos_graph ={
        labels:["p1","p2","p3","p4","p5"],
        datasets:[
            {
                label: "Mediciones lado sano",
                data: mediciones.lado_sano,
                borderColor: 'blue',
                fill:false,
                lineTension:0,
                pointRadius: 5,
                type: 'line'
            },
            {
                label: "Mediciones lado afecto",
                data: mediciones.lado_afecto,
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

    //GRAFICA PIERNAS

    var datos_graph_piernas ={
        labels:["p1","p2","p3","p4","p5","p6"],
        datasets:[
            {
                label: "Mediciones lado sano",
                data: mediciones.p_lado_sano,
                borderColor: 'blue',
                fill:false,
                lineTension:0,
                pointRadius: 5,
                type: 'line'
            },
            {
                label: "Mediciones lado afecto",
                data: mediciones.p_lado_afecto,
                borderColor: 'red',
                fill:false,
                lineTension:0,
                pointRadius: 5,
                type: 'line'
            },
            {
                label: "Diferencia mediciones",
                data: mediciones.p_diferencia,
                backgroundColor: 'rgba(134,213,102,0.3)',
                borderColor: 'rgba(134,213,102,0.3)'
            }
        ]
    };


    var opciones = {
        title:{
            display: true,
            text: 'Comparativa miembro sano-afecto',
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
            //creamos un array de objetos con las mediciones de lado lado_sano, derecho y la diferencia entre los puntos
            //var fechas=[];

            var len = cosas.length;

            //===================== PREPARACIÓN FECHAS

            


            //===================== FIN PREPARACIÓN FECHAS






            //Bucle for selecciona puntos de las mediciones
            for(var i = 0; i<len; i++)
            {
                if(cosas[i].extremidad=="brazo")
                {
                    separacion_fechas.fechas_brazo[j]=fechas[i];
                    j++;

                    console.log("entra brazo");
                    if(cosas[i].lado_sano=="si")
                    {
                        mediciones.lado_sano[0]=cosas[i].p1;
                        mediciones.lado_sano[1]=cosas[i].p2;
                        mediciones.lado_sano[2]=cosas[i].p3;
                        mediciones.lado_sano[3]=cosas[i].p4;
                        mediciones.lado_sano[4]=cosas[i].p5;
                        // console.log("holap");
                        // console.log(datos[i].p1);
                    }
                    else if(cosas[i].lado_sano=="no")
                    {
                        mediciones.derecho.push(cosas[i].p1);
                        mediciones.derecho.push(cosas[i].p2);
                        mediciones.derecho.push(cosas[i].p3);
                        mediciones.derecho.push(cosas[i].p4);
                        mediciones.derecho.push(cosas[i].p5);

                        //Primeras mediciones que coge del lado derecho
                        mediciones.lado_afecto[0]=cosas[i].p1;
                        mediciones.lado_afecto[1]=cosas[i].p2;
                        mediciones.lado_afecto[2]=cosas[i].p3;
                        mediciones.lado_afecto[3]=cosas[i].p4;
                        mediciones.lado_afecto[4]=cosas[i].p5;

                        evolucion.p1.push(cosas[i].p1);
                        evolucion.p2.push(cosas[i].p2);
                        evolucion.p3.push(cosas[i].p3);
                        evolucion.p4.push(cosas[i].p4);
                        evolucion.p5.push(cosas[i].p5);

                    }
                }
                else
                {
                    separacion_fechas.fechas_pierna[m]=fechas[i];
                    m++;
                }
            }

            var resta=0;

            for(i=0; i<mediciones.lado_sano.length;i++)
            {
                resta=mediciones.lado_afecto[i]-mediciones.lado_sano[i];
                mediciones.diferencia[i]=resta;
                //console.log(fechas[i]);
            }

            //  console.log(mediciones.lado_sano);
            //  console.log(mediciones.derecho);
            //  console.log(mediciones.diferencia);
                var chart = new Chart( grafica_datos, {
                type : "bar",
                data : datos_graph,
                options : opciones
              }
              );

            
            
            //===================== SEGUNDA GRÁFICA

              var datos_ultimas ={
                labels:fechas,
                datasets:[
                    {
                        label: "p1",
                        data: evolucion.p1,
                        borderColor: 'blue',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p2",
                        data: evolucion.p2,
                        borderColor: 'red',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p3",
                        data: evolucion.p3,
                        borderColor: 'green',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p4",
                        data: evolucion.p4,
                        borderColor: 'purple',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p5",
                        data: evolucion.p5,
                        borderColor: '#e8c3b9',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },

                    {
                        label: "p1 sano",
                        data: evolucion.p5,
                        borderColor: 'yellow',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    // {
                    //     label: "Diferencia mediciones",
                    //     data: mediciones.diferencia,
                    //     backgroundColor: 'rgba(134,213,102,0.3)',
                    //     borderColor: 'rgba(134,213,102,0.3)'
                    // }
                ]
            };

            opciones.title.text="Evolución puntos";

            var chart2 = new Chart( grafica_evolucion, {
                type : "line",
                data : datos_ultimas,
                options : opciones
              }
              );



            //==================================== CARGAR TABLA BRAZOS

            cosas.forEach(function(element){
                    if(element.lado_sano=='si' && element.extremidad=="brazo")
                    {
                        filas_mediciones+= '<tr style="color:blue"><td>'+separacion_fechas.fechas_brazo[0]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td></td></tr>';
                    }
            });

            i=1;
            cosas.forEach(function(element){
                

                if(element.lado_sano=='no' && element.extremidad=="brazo")
                {
                    filas_mediciones+= '<tr><td>'+separacion_fechas.fechas_brazo[i]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td><button type="button" class="btn azul" value="fechaMedicion" onClick="fechaMedicion('+element.p1+','+element.p2+','+element.p3+','+element.p4+','+element.p5+')"><span class="ti-bar-chart-alt"></span></button></td></tr>';
                    i++;
                }
            });

            $('#pacientes-table tbody').html(filas_mediciones);

            //==================================== FIN CARGAR TABLA BRAZOS

            //==================================== GRÁFICA Y TABLA PIERNAS


            for(var i = 0; i<len; i++)
            {
                if(cosas[i].extremidad=="pierna")
                {
                    if(cosas[i].lado_sano=="si")
                    {
                        mediciones.p_lado_sano[0]=cosas[i].p1;
                        mediciones.p_lado_sano[1]=cosas[i].p2;
                        mediciones.p_lado_sano[2]=cosas[i].p3;
                        mediciones.p_lado_sano[3]=cosas[i].p4;
                        mediciones.p_lado_sano[4]=cosas[i].p5;
                        mediciones.p_lado_sano[5]=cosas[i].p6;
                        // console.log("holap");
                        // console.log(datos[i].p1);
                    }
                    else if(cosas[i].lado_sano=="no")
                    {
                        mediciones.derecho.push(cosas[i].p1);
                        mediciones.derecho.push(cosas[i].p2);
                        mediciones.derecho.push(cosas[i].p3);
                        mediciones.derecho.push(cosas[i].p4);
                        mediciones.derecho.push(cosas[i].p5);

                        //Primeras mediciones que coge del lado derecho
                        mediciones.p_lado_afecto[0]=cosas[i].p1;
                        mediciones.p_lado_afecto[1]=cosas[i].p2;
                        mediciones.p_lado_afecto[2]=cosas[i].p3;
                        mediciones.p_lado_afecto[3]=cosas[i].p4;
                        mediciones.p_lado_afecto[4]=cosas[i].p5;
                        mediciones.p_lado_afecto[5]=cosas[i].p6;

                        evolucion.p1.push(cosas[i].p1);
                        evolucion.p2.push(cosas[i].p2);
                        evolucion.p3.push(cosas[i].p3);
                        evolucion.p4.push(cosas[i].p4);
                        evolucion.p5.push(cosas[i].p5);

                    }

                }
                
            }

            var resta=0;

            for(i=0; i<mediciones.p_lado_sano.length;i++)
            {
                resta=mediciones.p_lado_afecto[i]-mediciones.p_lado_sano[i];
                mediciones.p_diferencia[i]=resta;
                //console.log(fechas[i]);
            }
            

            var chart_piernas = new Chart( grafica_piernas, {
                type : "bar",
                data :  datos_graph_piernas,
                options : opciones
              }
              );


            //==================================== FIN GRÁFICA Y TABLA PIERNAS

            //==================================== CARGAR TABLA BRAZOS

            cosas.forEach(function(element){
                if(element.lado_sano=='si' && element.extremidad=="pierna")
                {
                    filas_mediciones_pierna+= '<tr style="color:blue"><td>'+separacion_fechas.fechas_pierna[0]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td>'+element.p6+'</td><td></td></tr>';
                }
            });

            i=1;
            cosas.forEach(function(element){
                console.log(element.p6);
                if(element.lado_sano=='no' && element.extremidad=="pierna")
                {
                    filas_mediciones_pierna+= '<tr><td>'+separacion_fechas.fechas_pierna[i]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td>'+element.p6+'</td><td><button type="button" class="btn azul" value="fechaMedicion" onClick="fechaMedicion('+element.p1+','+element.p2+','+element.p3+','+element.p4+','+element.p5+', '+element.p6+')"><span class="ti-bar-chart-alt"></span></button></td></tr>';
                    i++;
                }
            });

            $('#pacientes-table-piernas tbody').html(filas_mediciones_pierna);

            //==================================== FIN CARGAR TABLA BRAZOS


        },
        error : function(data) {
            // console.log(data);
          },


          

    });



});

function fechaMedicion(p1,p2,p3,p4,p5){
    console.log(p1,p2,p3,p4,p5);

    

    mediciones.lado_afecto[0]=p1;
    mediciones.lado_afecto[1]=p2;
    mediciones.lado_afecto[2]=p3;
    mediciones.lado_afecto[3]=p4;
    mediciones.lado_afecto[4]=p5;

    var resta=0;

    for(i=0; i<mediciones.lado_sano.length;i++)
    {
        resta=mediciones.lado_afecto[i]-mediciones.lado_sano[i];
        mediciones.diferencia[i]=resta;
        //console.log(fechas[i]);
    }

    grafica_datos.remove();
    
    opciones.title.text="Comparativa miembro sano-afecto";
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

$(document).ready(function(){
    //grafica-sano-afecto
    //grafica-evolucion
    $( "#btn-sano-afecto" ).click(function() {
        $( "#grafica-evolucion" ).css("display","none");
        $( "#btn-evolucion" ).css("background-color","rgb(109, 109, 109)");
        $( "#grafica-sano-afecto" ).css("display","block");
        $( "#btn-sano-afecto" ).css("background-color","#3da3bc"); 
        
    });

    $( "#btn-evolucion" ).click(function() {
        $( "#grafica-sano-afecto" ).css("display","none");
        $( "#btn-sano-afecto" ).css("background-color","rgb(109, 109, 109)");
        $( "#grafica-evolucion" ).css("display","block");
        $( "#btn-evolucion" ).css("background-color","#3da3bc"); 
        
    });
});