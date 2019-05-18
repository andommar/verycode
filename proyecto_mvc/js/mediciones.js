var id_especialista= $("#id_especialista").val();
var listado_pacientes="";
 $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_usuarios",
                id_especialista: id_especialista
            }
            
})        
.done(function( data, textStatus, jqXHR ) {
    
    if ( console && console.log ) {
        console.log( "La solicitud de acceso se ha completado correctamente." );
    }
    var datos = $.parseJSON(data);
    var listado_pacientes = datos;
    
    //console.log(datos);
    //RELLENAMOS TABLA
    var filas_pacientes='';
    datos.forEach(function(element) {
        filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn mt-1 rojo" value="verPaciente" onclick="verPaciente(\'' + element.id_user + '\')"><span class="ti-eye"></span></button><button type="button" class="btn azul" value="editarPaciente" onclick="editarPaciente(\'' + element.id_user + '\')"><span class="ti-pencil-alt"></span></button></td></tr>';

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

    
    
});