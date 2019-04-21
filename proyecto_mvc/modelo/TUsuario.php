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

    public function acceder($usuario, $contrasenya){
		
		$abd = new TAccesbd ();

		if($abd->conectado()){
			header("Location: ../anadir-paciente.html");
		}
		else{
			echo '<h1>No conectao luser</h1>';
		}
		
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