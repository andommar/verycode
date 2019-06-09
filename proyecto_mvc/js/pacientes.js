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
    
    // if ( console && console.log ) {
    //     console.log( "La solicitud de acceso se ha completado correctamente." );
    // }
   
    var datos = $.parseJSON(msg); //
    // var listado_pacientes = datos;
    var listado_pacientes = datos;
    
    //console.log(datos);
    //RELLENAMOS TABLA
    var filas_pacientes='';
    listado_pacientes.forEach(function(element) {
        filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" style="color: #28a745;" class="btn azul" value="editarPaciente" onClick="editarPaciente('+ element.id_user + ')"><span class="ti-pencil-alt"></span></button></td></tr>';

    });
    $('#pacientes-table tbody').html(filas_pacientes);

})
.fail(function( jqXHR, textStatus, errorThrown ) {
    if ( console && console.log ) {
        console.log( "La solicitud de acceso ha fallado: " +  textStatus);
    }
});

$( document ).ready(function() {
    
    $("#btn-pacientes-por-asignar").click(function(){
        $("#apartado-pacientes-no-asignados").css("display","block");
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

// if ( console && console.log ) {
// console.log( "La solicitud de acceso se ha completado correctamente." );
// }

var datos = $.parseJSON(msg); //
// var listado_pacientes = datos;
var listado_pacientes = datos;

//console.log(datos);
//RELLENAMOS TABLA
var filas_pacientes='';
listado_pacientes.forEach(function(element) {
filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn azul" value="editarPacienteNoAsignado" onClick="editarPacienteNoAsignado('+ element.id_user + ')"><i class="fas fa-user-plus"></i></button></td></tr>';

});
$('#pacientes-no-asignados-table tbody').html(filas_pacientes);




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

function editarPacienteNoAsignado(id_usuario){
    document.location.href="editar-paciente-noregistrado.php?id_user="+id_usuario+" ";
}

function editarPaciente(id_usuario){
    document.location.href="editar-paciente-registrado.php?id_user="+id_usuario+" ";
}