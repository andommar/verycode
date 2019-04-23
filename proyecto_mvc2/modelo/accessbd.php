<?php
//Classe d'accés a base de dades.
header("Content-Type: text/html;charset=utf-8");

class TAccesbd
{
		public $servidor = "oracle.ilerna.com, 1433";
		public $connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");
		/*
		private $usuari;
		private $pass;
		private $bd;
		private $con;
		private $res;
		*/
    
        
        function __construct(){
            
		}
		
		public function conectado()
		{
			$res = false;
			$conn = sqlsrv_connect( $this->servidor, $this->connectionInfo);
			
			if( $conn ) {
				$res=true;
			}else{
				die( print_r( sqlsrv_errors(), true));
			}

			return $res;
		}
		
        


    
    /*
	//Connecta a la base de dades del servidor indicat, amb l'usuari i contrasenya que se li passi
	//Retorna la connexió, o FALSE si no ha pogut connectar
	function __construct($servidor, $usuari, $contrasenya, $bd)
	{
		$this->con = false;
		if (isset($servidor) && $servidor != "" && isset($bd) && $bd != "")
		{
			$this->servidor = $servidor;
			$this->usuari = $usuari;
			$this->pass = $contrasenya;
			$this->bd = $bd;
			$this->con = sqlsrv_connect ($servidor, $usuari, $contrasenya, $bd);
			mysqli_set_charset($this->con,"utf8");
		}
	}
	
	
	// Tanca una connexió feta préviament amb la base de dades
	function __destruct ()
	{
		if (isset($this->con))
		{
			mysqli_close($this->con);
		}
	}
	
	// retorna CERT si hi ha una connexió establerta
	public function connectat()
	{
		return ($this->con != false);
	}
	
	// Executa una instrucció SQL que no sigui un SELECT
	// Retorna CERT si ha anat be l'execució de la instrucció. 
	public function executa_SQL ($SQL)
	{
		$this->res = false;
		if ($this->connectat() && $SQL != "" && isset($this->con))
		{
			$this->res = mysqli_query ($this->con, $SQL);
		}
		return ($this->res);
	}
	
	//Consulta una única dada a la base de dades 
	//Retorna la dada, o FALSE si no ha pogut fer la consulta
	public function consulta_dada ($SQL)
	{
		$dada = FALSE;
		if (isset($SQL) && $SQL != "" && isset($this->con))
		{
			$this->res = mysqli_query ($this->con, $SQL);
			if ($this->res)
			{
				$fila = mysqli_fetch_array($this->res,MYSQLI_BOTH);
				$dada = $fila[0];
			}
			mysqli_free_result($this->res);
		}
		return($dada);
	}
	
	//obre una consulta de vàries dades amb vàries files
	//retorna l'enllaç a les dades de la consulta per poder accedir fila a fila
	public function consulta_multiple ($SQL)
	{
		$this->res = FALSE;
		if (isset($SQL) && $SQL != "" && isset($this->con))
		{
			$this->res = mysqli_query ($this->con, $SQL);
		}
	}
	
	// Retorna la fila dada indicada pel nom del camp indicat com a paràmetre
	// Si no hi ha més files, retorna NULL
	// Avança també la fila de dades
	public function obtenir_fila ()
	{
		$fila = null;
		if (isset($this->res) && $this->res != null)
		{
			$fila = mysqli_fetch_array($this->res, MYSQLI_BOTH); //Per poder accedir tant per nom com per ìndex
		}
		return ($fila);
	}
	
	// retorna la dada indicada de la fila indicada
	public function obtenir_dada ($fila, $camp)
	{
		if ($fila != null)
		{
			$dada = $fila[$camp];
		}
		return ($dada);
	}
	
	//Comprova si s'ha arribat al final
	public function final_dades ()
	{
		return ($this->res == null);
	}
	
	//tanca la consulta múltiple alliberant memoria
	public function tancar_consulta_multiple ()
	{
		if (isset($this->res) && $this->res != null)
		{
			mysqli_free_result($this->res);
		}
	}
	
	//retorna el número de columnes d'una fila. Si la fila està buida o no està, retorna 0
	public function num_dades ()
	{
		$quants = 0;
		if (isset($this->res) && $this->res != null)
		{
			$quants = mysqli_num_fields($this->res);
		}
		return($quants);
	}
	
	//retorna el número de columnes d'una fila. Si la fila està buida o no està, retorna 0
	public function num_files ()
	{
		$quants = 0;
		if (isset($this->res) && $this->res != null)
		{
			$quants = mysqli_num_rows($this->res);
		}
		return($quants);
    }
    
    */
}
	
?>