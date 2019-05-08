<?php
	header("Content-Type: text/html;charset=utf-8");		
	include_once ("accessbd.php");
	ini_set('mssql.charset','utf-8');
	
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
	public function obtener_id_especialista($correo, &$id_especialista){

		$abd = new TAccesbd ();
  
		if($abd->conectado())
		{ 	
		
			$res=true;
			$sql="SELECT id_especialista FROM especialista WHERE correo='$correo'";
			$stmt = $abd->consultar_dato($sql);
		}
		if( $stmt != false ) {

			$id_especialista = $stmt;
		}
	}
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

	public function registro_historial_clinico($id_user,$doc_identificacion,
	$nacionalidad, $raza, $fecha_nacimiento,
	$sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
  $fecha_debut, $familiar_linfedema,
  $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
	$ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion)
	{
		$res=0;
		$abd = new TAccesbd();

		if($abd->conectado())
		{
			$sql="insert into historial_clinico values ($id_user,'$doc_identificacion','$nacionalidad','$raza','$fecha_nacimiento','$sexo',$altura, $peso,'$tipo_congenito','$subtipo_congenito', 
			'$fecha_debut','$familiar_linfedema','$motivo_secundario','$ant_vasculares','$ant_infeccion_venosa','$ant_sobrepeso','$ant_lipedema','$ant_permeabilidad_cap','$ant_ansiedad',
			'$ant_diabetes','$ant_triquiasis','$ant_sindromes','$profesion',$grado_resp_profesion,$grado_stress_profesion)";

			// $fecha_debut','$familiar_linfedema',
			// '$motivo_secundario','$ant_vasculares','$ant_infeccion_venosa','$ant_sobrepeso','$ant_lipedema','$ant_permeabilidad_cap','$ant_ansiedad',
			// 'ant_diabetes','$ant_triquiasis','$ant_sindromes','$profesion',$grado_resp_profesion,$grado_stress_profesion
			// )";
			
			//NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
			
			$stmt = $abd->ejecuta_sql($sql);
		}

		if( $stmt === false ) {
			$res=-1;
			die( print_r( sqlsrv_errors(), true));
		}
		return $res;


	}



	//ESTA FUNCIÓN A PARTE DE REGISTRAR PACIENTE, DEVUELVE EL ID DESPUÉS DE REGISTRARLO
	public function registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista,&$id_user)
	{
		$res=0;
		$abd = new TAccesbd ();

		
		if($abd->conectado())
		{
			$sql="insert into usuario values ('$correo','$pass','$pass2','$nombre','$apellido1','$apellido2','$id_especialista');SELECT SCOPE_IDENTITY()";
			$stmt = $abd->ejecuta_sql($sql);
		}
		if( $stmt === false ) {
			$res=-1;
			die( print_r( sqlsrv_errors(), true));
		}

		sqlsrv_next_result($stmt); //Va al siguiente resultado y lo muestra (es un boolean si devuelve true o false si encuentra resultado)
		sqlsrv_fetch($stmt); //Obtiene el resultado encontrado
		$id_user= sqlsrv_get_field($stmt, 0);  //Coge el campo correspondiente (0 es la primera columna)


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

	public function registro_paciente($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$id_especialista)
	{
		$res=0;
		$abd = new TAccesbd ();

		
		if($abd->conectado())
		{
			$sql="insert into usuario values ('$correo','$pass','$pass2','$nombre','$apellido','$apellido2','$id_especialista')";
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