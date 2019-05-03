<?php
	header("Content-Type: text/html;charset=utf-8");		
	include_once ("accessbd.php");
	
class TUsuario{


    private $servidor;
	//private $usuario;
	//private $pass;
	private $bd;
	
	function __construct()
	{
		
    }

    // public function acceder($usuario, $contrasenya){
		
	// 	$abd = new TAccesbd ();

	// 	if($abd->conectado()){
	// 		header("Location: ../anadir-paciente.html");
	// 	}
	// 	else{
	// 		echo '<h1>No conectao luser</h1>';
	// 	}
		
	// }
	public function comprobar_usuario($correo, $contrasenya,&$tipo_usuario){
    
		$res=false;
		$abd = new TAccesbd ();
  
		if($abd->conectado())
		{ 	
		
			$res=true;
			$sql="SELECT tipo FROM especialista WHERE correo='$correo' AND pass='$contrasenya' ";
			$stmt = $abd->consultar_dato($sql);
		}
		if( $stmt === false ) {

			$res=false;
			//die( print_r( sqlsrv_errors(), true));
		}
		else{
			$tipo_usuario = $stmt;
		}
	  return $res;
	}
	
	//Rellena el home del admin con la lista de fisios (tabla)
	
	public function listado_fisios(){

		
			$res=false;
			$abd = new TAccesbd ();
		
			if($abd->conectado())
			{ 	
			
				$res=true;
				$sql = "SELECT id_especialista, tipo, nombre, apellido1, apellido2, correo, pass FROM especialista where tipo='fisioterapeuta' ";
				$stmt = $abd->listado_asociativo($sql);
			}
			if( $stmt === false ) {

				$res=false;
			}
			else{
				$res = $stmt;
			}
			return $res;

			
	}


	public function registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo)
	{
		$res=0;
		$abd = new TAccesbd ();

		
		if($abd->conectado())
		{
			$sql="insert into especialista values ('$correo','$pass','$pass2','$nombre','$apellido','$apellido2','$tipo')";
			$stmt = $abd->ejecuta_sql($sql);
		}
		if( $stmt === false ) {
			$res=-1;
			die( print_r( sqlsrv_errors(), true));
		}


		return $res;
	}
}

?>