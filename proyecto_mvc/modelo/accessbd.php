<?php
//Classe d'accés a base de dades.
header("Content-Type: text/html;charset=utf-8");
ini_set('mssql.charset','utf-8');
class TAccesbd
{
	//oracle.ilerna.com, 1433 -> CASA
	//192.168.3.26, 1433 -> CLASE

	//BASE DE DATOS VERY CODE
	// private $servidor = "192.168.3.26, 1433";
	// private $connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");


		//private $servidor = "192.168.3.26, 1433";
		private $servidor = "oracle.ilerna.com, 1433";
		private $connectionInfo = array( "Database"=>"ONCOSALUT", "UID"=>"DAM2_VESTIGIUM", "PWD"=>"Vestigium2019", "CharacterSet"=>"UTF-8");
		private $conn;
		private $res;
		/*
		private $usuari;
		private $pass;
		private $bd;
		private $con;
		private $res;
		*/
    
        
    function __construct(){	
			if(isset($servidor) && $servidor !="" && isset($connectionInfo) && $connectionInfo !="");
				{
					$this->conn = sqlsrv_connect( $this->servidor, $this->connectionInfo);
					//echo "funciona";
				}
		}

		//Cierra conexión 
		function __destruct()
		{
			if(isset($this->conn))
			{
				sqlsrv_close( $this->conn );
			}
		}

		//Devuelve cierto si se ha establecido una conexión
		public function conectado()
		{
			$this->res = false;

			if( $this->conn ) {
				$this->res=true;
			}else{
				die( print_r( sqlsrv_errors(), true));
			}

			return ($this->res);
		}

		//Ejecuta instruccion sql 
		public function ejecuta_sql ($sql)
		{
			$this->res=false;
			if($this->conectado() && $sql !="" && isset($this->conn))
			{
				
				$this->res = sqlsrv_query($this->conn,$sql);
			}
			return($this->res);
		}

		//Consulta el dato a base de una instruccion SQL
		//Devuelve FALSE si no ha podido hacer la consulta, sino devuelve el dato
		public function consultar_dato ($sql)
		{
			$dato=FALSE;
			if(isset($sql) && $sql !="" && isset($this->conn))
			{
			
				$this->res=sqlsrv_query($this->conn,$sql);
				if($this->res)
				{
					
					if((sqlsrv_fetch($this->res)===FALSE)){
					
						//die(print_r(sqlsrv_errors(), true));
					}
					else{
						
							$dato = sqlsrv_get_field( $this->res, 0);
					}
					
				}
			}
			return($dato);
		}
		public function listado_asociativo($sql){
				
			$datos=false;
				if(isset($sql) && $sql !="" && isset($this->conn))
				{
					$this->res=sqlsrv_query($this->conn,$sql);
					if($this->res)
					{
						$datos = array();
						while( $row = sqlsrv_fetch_array( $this->res, SQLSRV_FETCH_ASSOC) ) {
							array_push($datos,(array) $row);
						}
						sqlsrv_free_stmt( $this->res);
					}
					
				}
				
				return($datos);	
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