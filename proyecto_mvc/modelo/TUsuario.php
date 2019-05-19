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
	public function listado_usuarios($id_especialista){
			$res=false;
			$abd = new TAccesbd ();
		
			if($abd->conectado())
			{ 	
				$res=true;
				$sql = "SELECT id_user, nombre, apellido1, apellido2, correo, pass FROM usuario where id_especialista=$id_especialista ";
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
			//Comprobar primero si se repite el historial clínico
			$sql2="select count(*) from historial_clinico where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);

			if( $stmt2 === false ) {//error consulta sql
				$res=-1;
			}
			else{
				if($stmt2>0){//Ya existe el historial de ese paciente
					$res=-2;
				}
				else{//No existe, podemos hacer el insert

						 $sql="insert into historial_clinico values ($id_user,'$doc_identificacion','$nacionalidad','$raza','$fecha_nacimiento','$sexo',$altura, $peso,'$tipo_congenito','$subtipo_congenito','$fecha_debut','$familiar_linfedema','$motivo_secundario','$ant_vasculares','$ant_infeccion_venosa','$ant_sobrepeso','$ant_lipedema','$ant_permeabilidad_cap','$ant_ansiedad','$ant_diabetes','$ant_triquiasis','$ant_sindromes','$profesion',$grado_resp_profesion,$grado_stress_profesion)";
			
						$stmt = $abd->ejecuta_sql($sql);
						if( $stmt === false ) {//Fallo consulta
							$res=-1;
							die( print_r( sqlsrv_errors(), true));
						}
						
				}
			}
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
			$sql2="select count(*) from cirugia where id_user=$id_user and nombre='$nombre' and fecha='$fecha'";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite cirugia
					$res=-2;
				}
				else{
					$comentarios = empty($comentarios) ? "null" : "'$comentarios'";
					$sql="insert into cirugia values ('$id_user','$nombre','$fecha',$comentarios)";
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
				//Comprobar si se repite el medicamento antes
				$sql2="select count(*) from medicamento where id_user=$id_user and medicamento='$medicamento'";
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
 
	public function registro_infeccion($id_user,$tipo,$medicamento,$fecha)
	{
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite la cirugia antes
			$sql2="select count(*) from infeccion where id_user=$id_user and tipo='$tipo' and fecha='$fecha' ";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite infeccion
					$res=-2;
				}
				else{
						$sql="insert into infeccion values ($id_user,'$tipo','$medicamento','$fecha')";
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

	
	public function registro_habitos($id_user,$fumador,$cigarros,$frec_cigarros,$fumador_social,$toma_alcohol,$alcohol,$frec_alcohol,$tipo_alcohol,
																	$hace_deporte,$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,
																	$erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro)
	{
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite el habito
			$sql2="select count(*) from habitos where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite habito
					$res=-2;
				}
				else{
						$cigarros = empty($cigarros) ? "null" : "$cigarros";
						$frec_cigarros = empty($frec_cigarros) ? "null" : "'$frec_cigarros'";
						$fumador_social = empty($fumador_social) ? "null" : "'$fumador_social'";
						$frec_alcohol = empty($frec_alcohol) ? "null" : "'$frec_alcohol'";
						$alcohol = empty($alcohol) ? "null" : "$alcohol";
						$tipo_alcohol = empty($tipo_alcohol) ? "null" : "'$tipo_alcohol'";
						$frec_deporte = empty($frec_deporte) ? "null" : "'$frec_deporte'";
						$tipo_deporte = empty($tipo_deporte) ? "null" : "'$tipo_deporte'";
						$t_sesion = empty($t_sesion) ? "null" : "$t_sesion";
						$t_sesion_medidas = empty($t_sesion_medidas) ? "null" : "'$t_sesion_medidas'";
						$erg_sentado = empty($erg_sentado) ? "null" : "$erg_sentado";
						$erg_bidepes_pasiva = empty($erg_bidepes_pasiva) ? "null" : "$erg_bidepes_pasiva";
						$erg_bidepes_activa = empty($erg_bidepes_activa) ? "null" : "$erg_bidepes_activa";
						$erg_otro = empty($erg_otro) ? "null" : "$erg_otro";

						$sql="insert into habitos values ($id_user,'$fumador',$cigarros,$frec_cigarros,$fumador_social,'$toma_alcohol',$alcohol,$frec_alcohol,$tipo_alcohol,'$hace_deporte',$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,'$alimentacion','$suenyo_reparador',$h_suenyo,'$astenico',$erg_sentado,$erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro)";

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

	public function registro_tratamiento_linfedema($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
									$vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez){
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite el historial
			$sql2="select count(*) from historial_tratamiento_linfedema where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite historial
					$res=-2;
				}
				else{
						$fallo_terapia = empty($fallo_terapia) ? "null" : "'$fallo_terapia'";
						$nota = empty($nota) ? "null" : "'$nota'";

						$sql="insert into historial_tratamiento_linfedema values ($id_user,'$fecha_ult_tratamiento','$satisfecho_result',$fallo_terapia,'$tipo_drenaje_linfa','$vendaje',$nota,'$contencion_dia','$contencion_tipo','$contencion_sensacion','$contencion_dolor','$contencion_escala','$contencion_pesadez')";
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
	//** 
	public function registro_valoracion_linfedema($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,$stemmer,$fovea,$pesadez,$rubor){
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite la valoracion
			$sql2="select count(*) from valoracion_linfedema where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
			}
			else{
				if($stmt2>0){//se repite la valoracion
					$res=-2;
				}
				else{

					$sql="insert into valoracion_linfedema values ($id_user,'$fecha','$localizacion','$consistencia_edema','$color','$valoracion_piel','$stemmer','$fovea','$pesadez','$rubor', null, null, null, null, null, null, null, null, null, null, null, null)";
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

			if( $stmt === false ) {//error consulta sql
				$res=-1;
			}
			else{ //hace el count correctamente
				if($stmt>0){//Ya existe el correo
					$res=-2;
				}
				else{
					//Si no se repite, insertamos el usuario
					$sql2="insert into usuario values ('$correo','$pass','$pass2','$nombre','$apellido1','$apellido2',$id_especialista);SELECT SCOPE_IDENTITY()";
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