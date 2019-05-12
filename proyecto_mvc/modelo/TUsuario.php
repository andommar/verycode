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
	
	public function listado_especialistas(){

		
			$res=false;
			$abd = new TAccesbd ();
		
			if($abd->conectado())
			{ 	
			
				$res=true;
				$sql = "SELECT id_especialista, tipo, nombre, apellido1, apellido2, correo, pass FROM especialista where tipo<>'especialista' ";
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

	public function listado_pacientes(){

		
		$res=false;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
		
			$res=true;
			$sql = "select id_user, id_especialista,nombre, apellido1, apellido2, correo, pass from usuario";
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

//  =============================== REGISTROS  ===========================================

	public function registro_historial_clinico($id_user,$doc_identificacion,$nacionalidad, $raza, $fecha_nacimiento,$sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
  $fecha_debut, $familiar_linfedema, $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
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

	public function registro_cirugias($id_user,$nombre,$fecha,$comentarios)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{

			//Comprobar si se repite la cirugia antes
			$sql2="select count(*) from cirugia where nombre='$nombre' and fecha='$fecha'";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite cirugia
					$res=-2;
				}
				else{
					$sql="insert into cirugia values ('$id_user','$nombre','$fecha','$comentarios')";
					$stmt = $abd->ejecuta_sql($sql);
					if( $stmt === false ) {
						$res=-1;
						die( print_r( sqlsrv_errors(), true));
					}
				}
			}
		
		}
	


		return $res;
	}


	public function registro_medicamento($id_user,$medicamento,$patologias)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{
				//Comprobar si se repite la cirugia antes
				$sql2="select count(*) from medicamento where medicamento='$medicamento'";
				$stmt2 = $abd->consultar_dato($sql2);
				if( $stmt2 === false ) {
					$res=-1;
				}
				else{
					if($stmt2>0){//se repite medicamento
						$res=-2;
					}
					else{
						$sql="insert into medicamento values ($id_user,'$medicamento','$patologias')";
						$stmt = $abd->ejecuta_sql($sql);
						if( $stmt === false ) {
							$res=-1;
							die( print_r( sqlsrv_errors(), true));
						}
					}
				}
		}
		
		return $res;
	}

	public function registro_infeccion($id_user,$nombre_infeccion,$fecha,$descripcion)
	{
		$res=0;
		$abd = new TAccesbd ();

		
		if($abd->conectado())
		{
			$sql="insert into infeccion values ($id_user,'$medicamento','$patologias')";
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
			//Comprobar si se repite el correo antes
			$sql="select count(*) from usuario where correo='$correo'";
			$stmt = $abd->consultar_dato($sql);

			if( $stmt === false ) {
				$res=-1;
			}
			else{ //hace el count correctamente
				if($stmt>0){//Ya existe el correo
					$res=-2;
				}
				else{
					//Si no se repite, insertamos el usuario
					$sql2="insert into usuario values ('$correo','$pass','$pass2','$nombre','$apellido1','$apellido2','$id_especialista');SELECT SCOPE_IDENTITY()";
					$stmt2 = $abd->ejecuta_sql($sql2);
					if( $stmt2 === false ) {
						$res=-1;
						die( print_r( sqlsrv_errors(), true));
					}
					else{
						sqlsrv_next_result($stmt2); //Va al siguiente resultado y lo muestra (es un boolean si devuelve true o false si encuentra resultado)
						sqlsrv_fetch($stmt2); //Obtiene el resultado encontrado
						$id_user= sqlsrv_get_field($stmt2, 0);  //Coge el campo correspondiente (0 es la primera columna)
					}
				}
			}
			
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

	//  =============================== ELIMINACIÓN /  MODIFICACIÓN  ===========================================

	public function borrar_especialista($id_especialista, $tipo_especialista){
			
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			if($tipo_especialista=="administrador"){
				//delete from especialista where id_especialista = 10
				$sql="delete from especialista where id_especialista = $id_especialista";
				$stmt = $abd->ejecuta_sql($sql);

				if( $stmt === false ) {
					$res=-1;
				}

			}
			else{//fisioterapeuta
				$sql="select count(*) from usuario where id_especialista = $id_especialista";
				$stmt = $abd->consultar_dato($sql);

				if( $stmt === false ) {
					$res=-1;
					// die( print_r( sqlsrv_errors(), true));
				}
				else{
					$num_pacientes = $stmt;
					$stmt2="";
					if($num_pacientes>0){//Tiene pacientes
						$sql2="update usuario set id_especialista=null where id_especialista = $id_especialista";
						$stmt2 = $abd->ejecuta_sql($sql2);
					}
					if($stmt2 === false){
						$res=-1;
					}
					else{//si tiene pacientes o si no tiene
						$sql3="delete from especialista where id_especialista = $id_especialista";
						$stmt3 = $abd->ejecuta_sql($sql3);
					}
					

					
				}


			}//fisioterapeuta
			
		}//conectado
	


		return $res;

	}


}

?>