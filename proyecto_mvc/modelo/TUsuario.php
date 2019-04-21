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
			echo '<h1>Conectado campeón</h1>';
		}
		else{
			echo '<h1>No conectao luser</h1>';
		}
		
    }
}

?>