/*
//Click en botón submit login
  $(document).ready(function() {  
    
    $("#form-login").submit(function(event){
      
      event.preventDefault();
      
      var error = false;
      var usuario= $("#usuario").val().trim();
      var contrasenya= $("#contrasenya").val().trim();
      

      if(usuario==null || usuario==''){
          $("body").overhang({
            type: "error",
            message: "ERROR. El usuario no puede estar vacío",
            duration: 3,
            overlay: true,
            closeConfirm: true
          });
          error = true;
      }
      if(contrasenya==null || contrasenya==''){
        $("body").overhang({
          type: "error",
          message: "ERROR. La contraseña no puede estar vacía",
          duration: 3,
          overlay: true,
          closeConfirm: true
        });
        error = true;
      }

      if(!error){
        
        $.ajax({
          data: {usuario : usuario, contrasenya : contrasenya},
          type: "POST",
          url: "control/control_login.php",
        })
        .done(function( data, textStatus, jqXHR ) {
          if ( console && console.log ) {
            console.log( "La solicitud ajax de acceso a usuarios.json se ha completado correctamente." );
          }
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud ajax de acceso a usuarios.json ha fallado: " +  textStatus);
            }
        }); 
      }
    
      
    });
  });
  */