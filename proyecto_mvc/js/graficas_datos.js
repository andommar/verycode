
    var id_usuario = $("#usuario").val();
    var opcion = "mostrar_graficas";
    var cosas = "";
    var fechas = "";
    var grafica_datos=document.getElementById("lineChart");
    var grafica_evolucion=document.getElementById("lineChartevolucion");
    var grafica_evolucion_pierna=document.getElementById("lineChartevolucion_pierna");
    var grafica_piernas=document.getElementById("lineChartPierna");
    var filas_mediciones='';
    var filas_mediciones_pierna='';
    var i=1, j=0,m=0,n=0,q=0;
    var bandera_brazo=false;
    var bandera_pierna=false;
    var ambos=false;


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

    var evolucion_p =
    {
        p1: [],
        p2: [],
        p3: [],
        p4: [],
        p5: [],
        p6:[]
    };

    var separacion_fechas =
    {
        fechas_pierna: [],
        fechas_evolucion_pierna: [],
        fechas_brazo: [],
        fechas_evolucion_brazo: []
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



            //Bucle for selecciona puntos de las mediciones
            for(var i = 0; i<len; i++)
            {
                if(cosas[i].extremidad=="brazo")
                {
                    separacion_fechas.fechas_brazo[j]=fechas[i];
                    j++;

                    if(cosas[i].lado_sano=="si")
                    {
                        mediciones.lado_sano[0]=cosas[i].p1;
                        mediciones.lado_sano[1]=cosas[i].p2;
                        mediciones.lado_sano[2]=cosas[i].p3;
                        mediciones.lado_sano[3]=cosas[i].p4;
                        mediciones.lado_sano[4]=cosas[i].p5;

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


                        //Guardamos las fechas de cada medición del brazo afecto. El indice del array de fechas coincide con el indice de los datos del array de objetos cosas
                        separacion_fechas.fechas_evolucion_brazo[n]=fechas[i];
                        n++;

                    }
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

            //==================================== GRÁFICA Y TABLA PIERNAS

            j=0;
            n=0;

            for(var i = 0; i<len; i++)
            {
                if(cosas[i].extremidad=="pierna")
                {
                    separacion_fechas.fechas_pierna[j]=fechas[i];
                    j++;
                    if(cosas[i].lado_sano=="si")
                    {
                        mediciones.p_lado_sano[0]=cosas[i].p1;
                        mediciones.p_lado_sano[1]=cosas[i].p2;
                        mediciones.p_lado_sano[2]=cosas[i].p3;
                        mediciones.p_lado_sano[3]=cosas[i].p4;
                        mediciones.p_lado_sano[4]=cosas[i].p5;
                        mediciones.p_lado_sano[5]=cosas[i].p6;

                    }
                    else if(cosas[i].lado_sano=="no")
                    {

                        //Primeras mediciones que coge del lado afecto
                        mediciones.p_lado_afecto[0]=cosas[i].p1;
                        mediciones.p_lado_afecto[1]=cosas[i].p2;
                        mediciones.p_lado_afecto[2]=cosas[i].p3;
                        mediciones.p_lado_afecto[3]=cosas[i].p4;
                        mediciones.p_lado_afecto[4]=cosas[i].p5;
                        mediciones.p_lado_afecto[5]=cosas[i].p6;

                        evolucion_p.p1.push(cosas[i].p1);
                        evolucion_p.p2.push(cosas[i].p2);
                        evolucion_p.p3.push(cosas[i].p3);
                        evolucion_p.p4.push(cosas[i].p4);
                        evolucion_p.p5.push(cosas[i].p5);
                        evolucion_p.p6.push(cosas[i].p6);

                        separacion_fechas.fechas_evolucion_pierna[n]=fechas[i];
                        n++;

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

            
            
            //===================== GRÁFICA PROGRESIÓN

              var datos_ultimas ={
                labels:separacion_fechas.fechas_evolucion_brazo,
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


                ]
            };

            opciones.title.text="Evolución puntos";

            var chart2 = new Chart( grafica_evolucion, {
                type : "line",
                data : datos_ultimas,
                options : opciones
              }
              );

              //===================== GRÁFICA PROGRESIÓN PIERNA

              var datos_progresion_pierna ={
                labels:separacion_fechas.fechas_evolucion_pierna,
                datasets:[
                    {
                        label: "p1",
                        data: evolucion_p.p1,
                        borderColor: 'blue',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p2",
                        data: evolucion_p.p2,
                        borderColor: 'red',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p3",
                        data: evolucion_p.p3,
                        borderColor: 'green',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p4",
                        data: evolucion_p.p4,
                        borderColor: 'purple',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p5",
                        data: evolucion_p.p5,
                        borderColor: '#e8c3b9',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },
                    {
                        label: "p6",
                        data: evolucion_p.p6,
                        borderColor: 'black',
                        fill:false,
                        lineTension:0,
                        pointRadius: 5,
                        type: 'line'
                    },


                ]
            };

            opciones.title.text="Evolución puntos";

            var chart_evolucion_pierna = new Chart( grafica_evolucion_pierna, {
                type : "line",
                data : datos_progresion_pierna,
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



            //==================================== CARGAR TABLA BRAZOS

            cosas.forEach(function(element){
                if(element.lado_sano=='si' && element.extremidad=="pierna")
                {
                    filas_mediciones_pierna+= '<tr style="color:blue"><td>'+separacion_fechas.fechas_pierna[0]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td>'+element.p6+'</td><td></td></tr>';
                }
            });

            i=1;
            cosas.forEach(function(element){
                // console.log(element.p6);
                if(element.lado_sano=='no' && element.extremidad=="pierna")
                {
                    filas_mediciones_pierna+= '<tr><td>'+separacion_fechas.fechas_pierna[i]+'</td><td>'+element.extremidad+'</td><td>'+element.lado+'</td><td>'+element.lado_sano+'</td><td>'+element.p1+'</td><td>'+element.p2+'</td><td>'+element.p3+'</td><td>'+element.p4+'</td><td>'+element.p5+'</td><td>'+element.p6+'</td><td><button type="button" class="btn azul" value="fechaMedicion_pierna" onClick="fechaMedicion_pierna('+element.p1+','+element.p2+','+element.p3+','+element.p4+','+element.p5+', '+element.p6+')"><span class="ti-bar-chart-alt"></span></button></td></tr>';
                    i++;
                }
            });

            $('#pacientes-table-piernas tbody').html(filas_mediciones_pierna);

            //==================================== FIN CARGAR TABLA BRAZOS


            //==================================== MOSTRAR DATOS
            for(var i = 0; i<len; i++)
            {
                if(cosas[i].extremidad=="brazo")
                {
                    bandera_brazo= true;
                   
                }    
                if(cosas[i].extremidad=="pierna")
                {
                    bandera_pierna=true;
                   
                }
                
            }


            // console.log("bandera_brazo "+bandera_brazo);
            // console.log("bandera_pierna "+bandera_pierna);
        
            if(bandera_brazo==true)
            {
               
                $( "#grafica-sano-afecto" ).css("display","block");
                if(bandera_pierna==true)
                {
                    $( "#btn-brazo" ).css("display","inline");
                    $( "#btn-pierna" ).css("display","inline");
                    ambos=true;
                }
            }
            else if (bandera_pierna==true)
            {
                
                $( "#grafica-sano-afecto" ).css("display","none");
                $( "#grafica-pierna" ).css("display","block");
            }

        },
        error : function(data) {
            // console.log(data);
          },


          

    });



});



function fechaMedicion(p1,p2,p3,p4,p5){
    // console.log(p1,p2,p3,p4,p5);

    

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

function fechaMedicion_pierna(p1,p2,p3,p4,p5,p6)
{
    mediciones.p_lado_afecto[0]=p1;
    mediciones.p_lado_afecto[1]=p2;
    mediciones.p_lado_afecto[2]=p3;
    mediciones.p_lado_afecto[3]=p4;
    mediciones.p_lado_afecto[4]=p5;
    mediciones.p_lado_afecto[5]=p6;


    var resta=0;

    for(i=0; i<mediciones.p_lado_sano.length;i++)
    {
        resta=mediciones.p_lado_afecto[i]-mediciones.p_lado_sano[i];
        mediciones.p_diferencia[i]=resta;
        //console.log(fechas[i]);
    }

    grafica_piernas.remove();
    
    opciones.title.text="Comparativa miembro sano-afecto";
    $("div#grafica_piernas").append('<canvas id ="lineChartPierna" height="300" width="400"></canvas>');
    grafica_piernas=document.getElementById("lineChartPierna");
    var chart_piernas = new Chart( grafica_piernas, {
        type : "bar",
        data :  datos_graph_piernas,
        options : opciones
      }
      );




}



$(document).ready(function(){
    //grafica-sano-afecto
    //grafica-evolucion

    var bt_brazo=true;
    var bt_pierna=false;    



    $( "#btn-sano-afecto" ).click(function(e) {

        e.preventDefault();
        // console.log("bandera_brazo "+bandera_brazo);
        // console.log("bandera_pierna "+bandera_pierna);



        $( "#btn-evolucion" ).css("background-color","rgb(109, 109, 109)");
        if(ambos==true)
        {
            if(bt_brazo==true)
            {
                $( "#grafica-evolucion" ).css("display","none");
                $( "#grafica-sano-afecto" ).css("display","block");
            }
            else if(bt_pierna==true)
            {
                $( "#grafica-pierna" ).css("display","block");
                $( "#grafica-evolucion-pierna" ).css("display","none");
            }
        }
        else if(bandera_brazo==true)
        {
            $( "#grafica-evolucion" ).css("display","none");
            $( "#grafica-sano-afecto" ).css("display","block");
        }
        else if(bandera_pierna==true)
        {
            $( "#grafica-pierna" ).css("display","block");
            $( "#grafica-evolucion-pierna" ).css("display","none");
        }
        $( "#btn-sano-afecto" ).css("background-color","#3da3bc"); 


        
    });

    $( "#btn-evolucion" ).click(function(e) {

        e.preventDefault();

        $( "#btn-sano-afecto" ).css("background-color","rgb(109, 109, 109)");

        if(ambos==true)
        {
            if(bt_brazo==true)
            {
                $( "#grafica-sano-afecto" ).css("display","none");
                $( "#grafica-evolucion" ).css("display","block");
            }
            else if(bt_pierna==true)
            {
                $( "#grafica-pierna" ).css("display","none");
                $( "#grafica-evolucion-pierna" ).css("display","block");
            }
        }
        else if(bandera_brazo==true)
        {
            $( "#grafica-sano-afecto" ).css("display","none");
            $( "#grafica-evolucion" ).css("display","block");
        }
        else if(bandera_pierna==true)
        {
            $( "#grafica-pierna" ).css("display","none");
            $( "#grafica-evolucion-pierna" ).css("display","block");
        }


        $( "#btn-evolucion" ).css("background-color","#3da3bc"); 
        
    });

    $( "#btn-brazo" ).click(function(e) {
        e.preventDefault();
        bt_brazo=true;
        bt_pierna=false;
        $( "#grafica-sano-afecto" ).css("display","block");
        $( "#grafica-pierna" ).css("display","none");
        $( "#btn-pierna" ).css("background-color","rgb(109, 109, 109)");
        $( "#btn-brazo" ).css("background-color","#3da3bc");
    });

    $( "#btn-pierna" ).click(function(e) {
        e.preventDefault();
        bt_brazo=false;
        bt_pierna=true;
        $( "#grafica-sano-afecto" ).css("display","none");
        $( "#grafica-pierna" ).css("display","block");
        $( "#btn-brazo" ).css("background-color","rgb(109, 109, 109)");
        $( "#btn-pierna" ).css("background-color","#3da3bc");
    });



});
