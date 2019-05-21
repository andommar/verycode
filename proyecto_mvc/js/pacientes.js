var id_especialista= $("#id_especialista").val();
var listado_pacientes="";
//Rellenar tabla PACIENTES ASIGNADOS
 $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_usuarios",
                id_especialista: id_especialista
            }
            
})        
.done(function(msg) {
    
    if ( console && console.log ) {
        console.log( "La solicitud de acceso se ha completado correctamente." );
    }
   
    var datos = $.parseJSON(msg); //
    // var listado_pacientes = datos;
    var listado_pacientes = datos;
    
    //console.log(datos);
    //RELLENAMOS TABLA
    var filas_pacientes='';
    listado_pacientes.forEach(function(element) {
        filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn mt-1 rojo" value="verPaciente" onClick="verPaciente(' + element.id_user + ')"><span class="ti-eye"></span></button><button type="button" class="btn azul" value="editarPaciente" onClick="editarPaciente('+ element.id_user + ')"><span class="ti-pencil-alt"></span></button></td></tr>';

    });
    $('#pacientes-table tbody').html(filas_pacientes);

    //RELLENAMOS SELECT
    $("#Select-id-usuario").html("");
    $('#Select-id-usuario').append($('<option>', { 
            value: "Todos",
            text :  "Todos"
    }));
    listado_pacientes.forEach(function(element) {
        //console.log(element);
        $('#Select-id-usuario').append($('<option>', { 
            value: element.id_user,
            text : element.id_user
        }));
    });


})
.fail(function( jqXHR, textStatus, errorThrown ) {
    if ( console && console.log ) {
        console.log( "La solicitud de acceso ha fallado: " +  textStatus);
    }
});

$( document ).ready(function() {
    $("#Select-id-usuario").change(function(){
        var id_usuario = this.value; //valor option del select
        if(id_usuario=="Todos"){
            $("tbody tr").show();
        }
        else{
            $("tbody tr").show();
            $("tbody tr:not(#"+id_usuario+")").hide();
        }
       

    });

    $("#btn-pacientes-por-asignar").click(function(){
        $("#apartado-pacientes-no-asignados").css("display","block");
        $("#apartado-pacientes").css("display","none");
        $("#apartado-pacientes").css("display","none");
        $("#btn-pacientes-por-asignar").css("background-color","#3899b0");
        $("#btn-mis-pacientes").css("background-color","rgb(109, 109, 109)");

    });
    $("#btn-mis-pacientes").click(function(){
        $("#apartado-pacientes-no-asignados").css("display","none");
        $("#apartado-pacientes").css("display","block");
        $("#btn-mis-pacientes").css("background-color","#3899b0");
        $("#btn-pacientes-por-asignar").css("background-color","rgb(109, 109, 109)");
    });
    //btn-pacientes-por-asignar
    //btn-mis-pacientes
    
});


//Rellenar tabla PACIENTES POR ASIGNAR

$.ajax({
    type: "GET",
    url: 'control/vista.php',
    data: { 
        opcion: "listado_usuarios_no_asignados",
        id_especialista: id_especialista
    }
    
})        
.done(function(msg) {

if ( console && console.log ) {
console.log( "La solicitud de acceso se ha completado correctamente." );
}

var datos = $.parseJSON(msg); //
// var listado_pacientes = datos;
var listado_pacientes = datos;

//console.log(datos);
//RELLENAMOS TABLA
var filas_pacientes='';
listado_pacientes.forEach(function(element) {
filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn mt-1 rojo" value="verPaciente" onClick="verPaciente(' + element.id_user + ')"><span class="ti-eye"></span></button><button type="button" class="btn azul" value="editarPaciente" onClick="editarPaciente('+ element.id_user + ')"><span class="ti-pencil-alt"></span></button></td></tr>';

});
$('#pacientes-no-asignados-table tbody').html(filas_pacientes);

//RELLENAMOS SELECT
$("#Select-id-usuario-2").html("");
$('#Select-id-usuario-2').append($('<option>', { 
    value: "Todos",
    text :  "Todos"
}));
listado_pacientes.forEach(function(element) {
//console.log(element);
$('#Select-id-usuario-2').append($('<option>', { 
    value: element.id_user,
    text : element.id_user
}));
});


})
.fail(function( jqXHR, textStatus, errorThrown ) {
if ( console && console.log ) {
console.log( "La solicitud de acceso ha fallado: " +  textStatus);
}
});

$( document ).ready(function() {
$("#Select-id-usuario-2").change(function(){
var id_usuario = this.value; //valor option del select
if(id_usuario=="Todos"){
    $("tbody tr").show();
}
else{
    $("tbody tr").show();
    $("tbody tr:not(#"+id_usuario+")").hide();
}


});



});