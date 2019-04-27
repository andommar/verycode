<?php
	header("Content-Type: text/html;charset=utf-8");		
	include_once ("accessbd.php");
	
class TUsuario{


    private $servidor;
<<<<<<< HEAD
	private $usuario;
	private $pass;
=======
	//private $usuario;
	//private $pass;
>>>>>>> anna
	private $bd;
	
	function __construct()
	{
<<<<<<< HEAD

    }

	/*
	Conexión: Microsoft SQL Server
	host: oracle.ilerna.com
	puerto: 1433
	Usuario: DAW2_VERYCODE
	Pass: a1VERYCODE

	*/

    public function acceder($usuario, $contrasenya){
		
		$abd = new TAccesbd ();

		if($abd->conectado()){
			echo 'Conectado campeón';
		}
		else
			echo 'No conectao luser';
		
		
    }
=======
		
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
			$sql="SELECT tipo FROM especialista WHERE correo='$correo'";
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
>>>>>>> anna
}

?>