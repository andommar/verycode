<?php
	header("Content-Type: text/html;charset=utf-8");		
	include_once ("accesbd.php");
	
class TLogin
{
    private $servidor;
	private $usuario;
	private $pass;
	private $bd;
	
	function __construct()
	{
		$this->servidor = "oracle.ilerna.com";
		$this->usuario = "DAW2_VERYCODE";
		$this->contrasenya = "a1VERYCODE"; 
		$this->bd = "DAW2_VERYCODE";
    }

	/*
	Conexión: Microsoft SQL Server
	host: oracle.ilerna.com
	puerto: 1433
	Usuario: DAW2_VERYCODE
	Pass: a1VERYCODE

	*/

    public function acceder($usuario, $contrasenya){
		
		
    }
}

?>