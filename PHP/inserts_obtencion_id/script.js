var id_usario="";
var id_especialista ="";

$(document).ready(function(){


    $("#btn").click(function(){

         
      var nombre =$('#nombre').val();
      var apellido=$('#apellido').val();
      var apellido2=$('#apellido2').val();
      var correo =$('#correo').val();
      var tipo=$('#tipo').val();
      var pass =$('#pass').val();
      var pass2=$('#pass2').val();
      //var opcion= $("#opcion-form").val();


      $.ajax({
        type: 'POST',
        url: 'registro_final.php',
        data: { nombre: nombre, apellido: apellido, apellido2: apellido2, correo: correo, tipo: tipo, pass: pass, pass2: pass2 },
        success: function(data) {
            id_usario=data;
            console.log(data);
        }
      });

      $("#div1").load("formularios.txt");
    });

    //------------Registro usuario

    $("#btn2").click(function(){

      console.log("Id usuario:", id_usario);

      var nombre =$('#nombre').val();
      var apellido=$('#apellido').val();
      var apellido2=$('#apellido2').val();
      var correo =$('#correo').val();
      var pass =$('#pass').val();
      var pass2=$('#pass2').val();
      var id_especialista=1; //CAMBIAR
      var opcion= $("#opcion-form").val();

      $.ajax({
        type:'POST',
        url: 'vista.php',
        data: {id_user: id_user, nombre: nombre, apellido: apellido, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, pass2: pass2, opcion: opcion},
        success:function(data){
            console.log("Registro completado", data);
        }
      })

    });

  });