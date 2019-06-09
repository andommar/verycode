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

	public function datos_especialista($id_especialista)	
	{

		$res=true;
		$abd = new TAccesbd ();
  
		if($abd->conectado())
		{ 	
		
			$sql = "SELECT correo, pass, pass2, nombre, apellido1, apellido2, tipo FROM especialista where id_especialista=$id_especialista ";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {

			$res=-1;

		}

		return $stmt;
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
	public function obtener_nre_especialista($id_especialista, &$nre_especialista){
		$res=false;
		$abd = new TAccesbd ();
  
		if($abd->conectado())
		{ 	
			$res=true;
			$sql="SELECT nombre FROM especialista WHERE id_especialista=$id_especialista ";
			$stmt = $abd->consultar_dato($sql);
		}
		if( $stmt === false ) {
			$res=false;
		}
		else{
			$nre_especialista = $stmt;
		}
		return $res;
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
	public function listado_cirugias($id_user){
		$res=true;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
			//comprobamos si hay datos
			$sql2="SELECT count(*) from cirugia where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=false;
			}
			else{
				if($stmt2>0){//tiene cirugias
					$sql = "SELECT ref_cirugia, nombre, fecha FROM cirugia where id_user=$id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt === false ) {

						$res=false;
					}
					else{
						$res = $stmt;
					}
				}
				else{//no tiene
					$res=-1;
				}
			}
			
		}
		
		return $res;
	}
	public function listado_medicamentos($id_user){
		$res=true;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
			//comprobamos si hay datos
			$sql2="SELECT count(*) from medicamento where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=false;
			}
			else{
				if($stmt2>0){//tiene registros
					$sql = "SELECT id_medicamento, medicamento, patologias FROM medicamento where id_user=$id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt === false ) {

						$res=false;
					}
					else{
						$res = $stmt;
					}
				}
				else{//no tiene
					$res=-1;
				}
			}
			
		}
		
		return $res;
	}
	public function listado_infecciones($id_user){
		$res=true;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
			//comprobamos si hay datos
			$sql2="SELECT count(*) from infeccion where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=false;
			}
			else{
				if($stmt2>0){//tiene registros
					$sql = "SELECT * FROM infeccion where id_user=$id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt === false ) {

						$res=false;
					}
					else{
						$res = $stmt;
					}
				}
				else{//no tiene
					$res=-1;
				}
			}
			
		}
		
		return $res;
	}
	public function listado_val_linf($id_user){
		$res=true;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
			//comprobamos si hay datos
			$sql2="SELECT count(*) from valoracion_linfedema where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=false;
			}
			else{
				if($stmt2>0){//tiene registros
					$sql = "SELECT * FROM valoracion_linfedema where id_user=$id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt === false ) {

						$res=false;
					}
					else{
						$res = $stmt;
					}
				}
				else{//no tiene
					$res=-1;
				}
			}
			
		}
		
		return $res;
	}
	public function listado_usuarios_no_asignados($id_especialista){
		$res=false;
		$abd = new TAccesbd ();
	
		if($abd->conectado())
		{ 	
			$res=true;
			$sql = "SELECT id_user, nombre, apellido1, apellido2, correo, pass FROM usuario where id_especialista is null or id_especialista=95";
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
						}
						
				}
			}
		}

	
		return $res;


	}
	
	public function editar_infeccion($id_user,$tipo,$medicamento,$fecha,$id_infeccion)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{
			
			//Comprobar si se repite la infeccion antes
			$sql2="select count(*) from infeccion where id_infeccion=$id_infeccion";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				
				if($stmt2>0){//ya existe, UPDATE
					//Comprobar si se repite la infeccion antes
					$sql5="select count(*) from infeccion where id_user=$id_user and tipo='$tipo' and fecha='$fecha'";
					$stmt5 = $abd->consultar_dato($sql5);
					if( $stmt5 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							//insert into infeccion values ($id_user,'$tipo','$medicamento','$fecha')
							$sql3="update infeccion set tipo='$tipo', medicamento='$medicamento', fecha='$fecha' where id_infeccion=$id_infeccion";
							$stmt3 = $abd->ejecuta_sql($sql3);
							if( $stmt3 === false ) {
								$res=-1;
							}
						}
					}
					
				}
				else{//no existe, INSERT
					//Comprobar si se repite la infeccion antes
					$sql4="select count(*) from infeccion where id_user=$id_user and tipo='$tipo' and fecha='$fecha'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql="insert into infeccion values ($id_user,'$tipo','$medicamento','$fecha')";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
						}
					}
					
				}
			}
		
		}
		return $res;
	}
	//editar_val_linf($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,$stemmer,$fovea,$pesadez,$rubor,$ref_valoracion)
	public function editar_val_linf($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,
	$stemmer,$fovea,$pesadez,$rubor,$ref_valoracion)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{
			
			//Comprobar si se repite la valoracion antes
			$sql2="select count(*) from valoracion_linfedema where ref_valoracion=$ref_valoracion";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				
				if($stmt2>0){//ya existe, UPDATE
					//Comprobar si se repite la valoracion antes
					$sql5="select count(*) from valoracion_linfedema where id_user=$id_user and fecha='$fecha'";
					$stmt5 = $abd->consultar_dato($sql5);
					if( $stmt5 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
						
							$sql3="update valoracion_linfedema set fecha='$fecha', localizacion='$localizacion', consistencia_edema='$consistencia_edema', color='$color', valoracion_piel='$valoracion_piel', stemmer='$stemmer', fovea='$fovea', pesadez='$pesadez', rubor='$rubor' where ref_valoracion=$ref_valoracion";
							$stmt3 = $abd->ejecuta_sql($sql3);
							if( $stmt3 === false ) {
								$res=-1;
							}
						}
					}
					
				}
				else{//no existe, INSERT
					//Comprobar si se repite la valoracion antes
					$sql4="select count(*) from valoracion_linfedema where id_user=$id_user and fecha='$fecha'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql="insert into valoracion_linfedema values ($id_user,'$fecha','$localizacion','$consistencia_edema','$color','$valoracion_piel','$stemmer','$fovea','$pesadez','$rubor', null, null, null, null, null, null, null, null, null, null, null, null)";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
						}
					}
					
				}
			}
		
		}
		return $res;
	}
	public function editar_medicamento($id_user,$medicamento,$patologias,$id_medicamento)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{
			
			//Comprobar si se repite el medicamento antes
			$sql2="select count(*) from medicamento where id_medicamento=$id_medicamento";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				
				if($stmt2>0){//ya existe, UPDATE
					//Comprobar si se repite el medicamento antes
					$sql5="select count(*) from medicamento where id_user=$id_user and medicamento='$medicamento'";
					$stmt5 = $abd->consultar_dato($sql5);
					if( $stmt5 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql3="update medicamento set medicamento='$medicamento', patologias='$patologias' where id_medicamento=$id_medicamento";
							$stmt3 = $abd->ejecuta_sql($sql3);
							if( $stmt3 === false ) {
								$res=-1;
							}
						}
					}
					
				}
				else{//no existe, INSERT
					//Comprobar si se repite el medicamento antes
					$sql4="select count(*) from medicamento where id_user=$id_user and medicamento='$medicamento'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql="insert into medicamento values ($id_user,'$medicamento','$patologias')";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
						}
					}
					
				}
			}
		
		}
		return $res;
	}
	public function editar_cirugia($id_user,$nombre,$fecha,$comentarios,$ref_cirugia)
	{
		$res=0;
		$abd = new TAccesbd ();

		if($abd->conectado())
		{
			
			//Comprobar si se repite la cirugia antes
			$sql2="select count(*) from cirugia where ref_cirugia=$ref_cirugia";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				$comentarios = empty($comentarios) ? "null" : "'$comentarios'";
				if($stmt2>0){//ya existe, UPDATE
					//Comprobar si se repite la cirugia antes
					$sql5="select count(*) from cirugia where id_user=$id_user and nombre='$nombre' and fecha='$fecha'";
					$stmt5 = $abd->consultar_dato($sql5);
					if( $stmt5 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql3="update cirugia set nombre='$nombre', fecha='$fecha', comentarios=$comentarios where ref_cirugia=$ref_cirugia";
							$stmt3 = $abd->ejecuta_sql($sql3);
							if( $stmt3 === false ) {
								$res=-1;
							}
						}
					}
					
				}
				else{//no existe, INSERT
					//Comprobar si se repite la cirugia antes
					$sql4="select count(*) from cirugia where id_user=$id_user and nombre='$nombre' and fecha='$fecha'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite
							$res=-2;
						}
						else{
							$sql="insert into cirugia values ('$id_user','$nombre','$fecha',$comentarios)";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
						}
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
			//Comprobar si se repite la infeccion antes
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
						}
				}
			}
		}
		return $res;
	}

	// 6) EDITAR HABITOS
	public function editar_habitos($id_user,$fumador,$cigarros,$frec_cigarros,$fumador_social,$toma_alcohol,$alcohol,$frec_alcohol,$tipo_alcohol,
	$hace_deporte,$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,
	$erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro)
	{
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar existe un registro de habito
			$sql2="select count(*) from habitos where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
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

//"update habitos set fumador='no', cigarros=null, frec_cigarros=null, fumador_social=null, toma_alcohol='si', alcohol=4, frec_alcohol='Frecuentemente', tipo_alcohol='dee', hace_deporte='si', frec_deporte='Todos los días', tipo_deporte='Aeróbico', t_sesion=5, t_sesion_medidas='minutos', alimentacion='frre', suenyo_reparador='si', h_suenyo=4, astenico='si', erg_sentado=1, erg_bidepes_pasiva=null, erg_bidepes_activa=3, erg_otro=3 where id_user=2"
				if($stmt2>0){//ya existe, UPDATE
						
					$sql3="update habitos set id_user=$id_user, fumador='$fumador', cigarros=$cigarros, frec_cigarros=$frec_cigarros, fumador_social=$fumador_social, toma_alcohol='$toma_alcohol', alcohol=$alcohol, frec_alcohol=$frec_alcohol, tipo_alcohol=$tipo_alcohol, hace_deporte='$hace_deporte', frec_deporte=$frec_deporte, tipo_deporte=$tipo_deporte, t_sesion=$t_sesion, t_sesion_medidas=$t_sesion_medidas, alimentacion='$alimentacion', suenyo_reparador='$suenyo_reparador', h_suenyo=$h_suenyo, astenico='$astenico', erg_sentado=$erg_sentado, erg_bidepes_pasiva=$erg_bidepes_pasiva, erg_bidepes_activa=$erg_bidepes_activa, erg_otro=$erg_otro where id_user=$id_user";

					$stmt3 = $abd->ejecuta_sql($sql3);
					if( $stmt3 === false ) {
						$res=-1;
					}
				}
				else{//no existe, INSERT
						
					$sql="insert into habitos values ($id_user,'$fumador',$cigarros,$frec_cigarros,$fumador_social,'$toma_alcohol',$alcohol,$frec_alcohol,$tipo_alcohol,'$hace_deporte',$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,'$alimentacion','$suenyo_reparador',$h_suenyo,'$astenico',$erg_sentado,$erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro)";

					$stmt = $abd->ejecuta_sql($sql);
					if( $stmt === false ) {
						$res=-1;
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
						}
				}
			}
		}
		return $res;
	}

	public function registro_valoracion_linfedema($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,$stemmer,$fovea,$pesadez,$rubor){
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite la valoracion en esa fecha
			$sql2="select count(*) from valoracion_linfedema where id_user=$id_user and fecha='$fecha'";
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
					}
				}
			}
		}
		return $res;
		}

	

		public function registro_mediciones($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d){
			$res=0;
			$abd = new TAccesbd ();
			if($abd->conectado())
			{
				$p6_i = ($p6_i==0) ? "null" : $p6_i;
				$p6_d = ($p6_d==0) ? "null" : $p6_d;

				if($extremidad=="brazo"){
					
					//Comprobar si se repite la 1a medicion (si o si se insertarán lado d y lado i)
					$sql2="select count(*) from mediciones where id_user=$id_user and fecha='$fecha' and extremidad='brazo'";
					$stmt2 = $abd->consultar_dato($sql2);
					if( $stmt2 === false ) {//error sql
						$res=-1;
					}
					else{
						if($stmt2>0){//se repite la 1a medicion brazo (derecho e izquierdo)
							$res=-2;
						}
						else{//no hay primera medición
							
							//BRAZO IZQUIERDO
							//$lado_sano: brazo_i, brazo_d
							$lado_sano = ($lado_sano=="brazo_i") ? "si" : "no";
							$sql="insert into mediciones values ($id_user,'$fecha','brazo','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
							else{//BRAZO DERECHO
								$lado_sano = ($lado_sano=="brazo_d") ? "si" : "no";
								$sql3="insert into mediciones values ($id_user,'$fecha','brazo','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
								$stmt3 = $abd->ejecuta_sql($sql3);
								if( $stmt3 === false ) {
									$res=-1;
								}
							}
						}
					}

				}//fin brazo
				else if($extremidad="pierna"){

					//Comprobar si se repite la 1a medicion (si o si se insertarán lado d y lado i)
					$sql4="select count(*) from mediciones where id_user=$id_user and fecha='$fecha' and extremidad='pierna'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {//error sql
						$res=-1;
					}
					else{
						if($stmt4>0){//se repite la 1a medicion pierna (derecho e izquierdo) 
							$res=-2;
						}
						else{//no hay primera medición
							
							//PIERNA IZQUIERDA
							//$lado_sano: pierna_d, pierna_i, 
							$lado_sano = ($lado_sano=="pierna_i") ? "si" : "no";
							$sql5="insert into mediciones values ($id_user,'$fecha','pierna','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
							$stmt5 = $abd->ejecuta_sql($sql5);
							if( $stmt5 === false ) {
								$res=-1;
							// die( print_r( sqlsrv_errors(), true));
							}
							else{//PIERNA IZQUIERDA
								$lado_sano = ($lado_sano=="pierna_d") ? "si" : "no";
								$sql6="insert into mediciones values ($id_user,'$fecha','pierna','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
								$stmt6 = $abd->ejecuta_sql($sql6);
								if( $stmt6 === false ) {
									$res=-1;
								}
							}
						}
					}

				}//fin pierna
			}
			return $res;
		 }
		
		 public function editar_medicion_inicial($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d){
			$res=0;
			$abd = new TAccesbd ();
			if($abd->conectado())
			{
				$p6_i = ($p6_i==0) ? "null" : $p6_i;
				$p6_d = ($p6_d==0) ? "null" : $p6_d;

				if($extremidad=="brazo"){
					
					//Comprobar si se repite la 1a medicion (si o si se insertarán lado d y lado i)
					$sql2="select count(*) from mediciones where id_user=$id_user and extremidad='brazo'"; //and fecha='$fecha' and 
					$stmt2 = $abd->consultar_dato($sql2);
					if( $stmt2 === false ) {//error sql
						$res=-1;
					}
					else{
						
						if($stmt2>0){//se repite la 1a medicion brazo (derecho e izquierdo) | UPDATE

							//Intenta insertar segunda medición
							$sql11="select count(*) from mediciones where id_user=$id_user and extremidad='brazo' and fecha='$fecha'"; 
							$stmt11 = $abd->consultar_dato($sql11);
							if( $stmt11 === false ) {
								$res=-1;
							}
							else{
								if($stmt11>0){//quiere hacer update
									//BRAZO IZQ
									$lado_sano = ($lado_sano=="brazo_i") ? "si" : "no";
									$sql7="update mediciones set fecha='$fecha',extremidad='brazo',lado='izquierdo',lado_sano='$lado_sano',p1=$p1_i,p2=$p2_i,p3=$p3_i,p4=$p4_i,p5=$p5_i, p6=null where id_user=$id_user and fecha='$fecha' and extremidad='brazo' and lado='izquierdo'";
									$stmt7 = $abd->ejecuta_sql($sql7);
									if( $stmt7 === false ) {
										$res=-1;
									}
									else{
										//BRAZO DER
										$lado_sano = ($lado_sano=="brazo_d") ? "si" : "no";
										$sql8="update mediciones set fecha='$fecha',extremidad='brazo',lado='derecho',lado_sano='$lado_sano',p1=$p1_d,p2=$p2_d,p3=$p3_d,p4=$p4_d,p5=$p5_d, p6=null where id_user=$id_user and fecha='$fecha' and extremidad='brazo' and lado='derecho'";
										$stmt8 = $abd->ejecuta_sql($sql8);
										if( $stmt8 === false ) {
											$res=-1;
										}

									}
								}
								else{//intenta insertar 2a medicion
									$res=-2;
								}
							}

							
						}
						else{//no hay primera medición
							
							//BRAZO IZQUIERDO
							//$lado_sano: brazo_i, brazo_d
							$sql="insert into mediciones values ($id_user,'$fecha','brazo','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
							$stmt = $abd->ejecuta_sql($sql);
							if( $stmt === false ) {
								$res=-1;
							}
							else{//BRAZO DERECHO
								$lado_sano = ($lado_sano=="brazo_d") ? "si" : "no";
								$sql3="insert into mediciones values ($id_user,'$fecha','brazo','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
								$stmt3 = $abd->ejecuta_sql($sql3);
								if( $stmt3 === false ) {
									$res=-1;
								}
							}
						}
					}

				}//fin brazo
				else if($extremidad="pierna"){

					//Comprobar si se repite la 1a medicion (si o si se insertarán lado d y lado i)
					$sql4="select count(*) from mediciones where id_user=$id_user and extremidad='pierna'"; //and fecha='$fecha'
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {//error sql
						$res=-1;
					}
					else{
						$lado_sano = ($lado_sano=="pierna_i") ? "si" : "no";
						if($stmt4>0){//se repite la 1a medicion pierna (derecho e izquierdo) | UPDATE

							//Intenta insertar segunda medición
							$sql12="select count(*) from mediciones where id_user=$id_user and extremidad='pierna' and fecha='$fecha'"; 
							$stmt12 = $abd->consultar_dato($sql12);
							if( $stmt12 === false ) {
								$res=-1;
							}
							else{
								if($stmt12>0){//quiere hacer update
									//PIERNA IZQ
									$lado_sano = ($lado_sano=="pierna_i") ? "si" : "no";
									$sql9="update mediciones set fecha='$fecha',extremidad='pierna',lado='izquierdo',lado_sano='$lado_sano',p1=$p1_i,p2=$p2_i,p3=$p3_i,p4=$p4_i,p5=$p5_i, p6=$p6_i where id_user=$id_user and fecha='$fecha' and extremidad='pierna' and lado='izquierdo'";
									$stmt9 = $abd->ejecuta_sql($sql9);
									if( $stmt9 === false ) {
										$res=-1;
									}
									else{
										//PIERNA DER
										$lado_sano = ($lado_sano=="pierna_d") ? "si" : "no";
										$sql10="update mediciones set fecha='$fecha',extremidad='pierna',lado='derecho',lado_sano='$lado_sano',p1=$p1_d,p2=$p2_d,p3=$p3_d,p4=$p4_d,p5=$p5_d, p6=$p6_d where id_user=$id_user and fecha='$fecha' and extremidad='pierna' and lado='derecho'";
										$stmt10 = $abd->ejecuta_sql($sql10);
										if( $stmt10 === false ) {
											$res=-1;
										}
		
									}
								}
								else{//intenta insertar 2a medicion
									$res=-2;
								}
							}



							
							
						}
						else{//no hay primera medición
							
							//PIERNA IZQUIERDA
							//$lado_sano: pierna_d, pierna_i, 
							
							$sql5="insert into mediciones values ($id_user,'$fecha','pierna','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
							$stmt5 = $abd->ejecuta_sql($sql5);
							if( $stmt5 === false ) {
								$res=-1;
							// die( print_r( sqlsrv_errors(), true));
							}
							else{//PIERNA IZQUIERDA
								$lado_sano = ($lado_sano=="pierna_d") ? "si" : "no";
								$sql6="insert into mediciones values ($id_user,'$fecha','pierna','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
								$stmt6 = $abd->ejecuta_sql($sql6);
								if( $stmt6 === false ) {
									$res=-1;
								}
							}
						}
					}

				}//fin pierna
			}
			return $res;
		 }

		public function registro_nueva_medicion($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d){
			$res=0;
			$abd = new TAccesbd ();
			if($abd->conectado())
			{
				$p6_i = ($p6_i==0) ? "null" : $p6_i;
				$p6_d = ($p6_d==0) ? "null" : $p6_d;

				if($extremidad=="brazo_d" || $extremidad=="brazo_i"){
					
					//Comprobar si existe una 1a medicion de brazo
					$sql2="select count(*) from mediciones where id_user=$id_user and extremidad='brazo'";
					$stmt2 = $abd->consultar_dato($sql2);
					if( $stmt2 === false ) {//error sql
						$res=-1;
					}
					else{
						if($stmt2>0){//existe la 1a medicion

							//Comprobamos si coincide la fecha o es anterior a la última
							$sql7="select count(*) from mediciones where id_user=$id_user and fecha>='$fecha' and extremidad='brazo'";
							$stmt7 = $abd->consultar_dato($sql7);
							if( $stmt7 === false ) {//error sql
								$res=-1;
							}
							else{
								if($stmt7>0){//coincide con otra medición
									$res=-3;
								}
								else{//no hay mediciones en esa fecha

									//BRAZO IZQUIERDO
									if($p1_i!=0 && $p2_i!=0 && $p3_i!=0 && $p4_i!=0 && $p5_i!=0){

										$lado_sano = ($lado_sano=="brazo_i") ? "si" : "no";
										$sql="insert into mediciones values ($id_user,'$fecha','brazo','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
										$stmt = $abd->ejecuta_sql($sql);
										if( $stmt === false ) {
											$res=-1;
										}
									}
									
									//BRAZO DERECHO
									if($p1_d!=0 && $p2_d!=0 && $p3_d!=0 && $p4_d!=0 && $p5_d!=0){
										
										$lado_sano = ($lado_sano=="brazo_d") ? "si" : "no";
										$sql3="insert into mediciones values ($id_user,'$fecha','brazo','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
										$stmt3 = $abd->ejecuta_sql($sql3);
										if( $stmt3 === false ) {
											$res=-1;
										}
									}
								}
							}
						}
						else{//no hay primera medición
							$res=-2;
						}
					}
				}//fin brazo
				else if($extremidad=="pierna_d" || $extremidad=="pierna_i"){

					//Comprobar si existe una 1a medicion de pierna
					$sql4="select count(*) from mediciones where id_user=$id_user and extremidad='pierna'";
					$stmt4 = $abd->consultar_dato($sql4);
					if( $stmt4 === false ) {//error sql
						$res=-1;
					}
					else{
						if($stmt4>0){//existe la 1a medicion

							//Comprobamos si coincide la fecha o es anterior a la última
							$sql8="select count(*) from mediciones where id_user=$id_user and fecha>='$fecha' and extremidad='pierna'";
							$stmt8 = $abd->consultar_dato($sql8);
							if( $stmt8 === false ) {//error sql
								$res=-1;
							}
							else{
								if($stmt8>0){//coincide con otra medición
									$res=-3;
								}
								else{//no hay mediciones en esa fecha

									//PIERNA IZQUIERDA
									if($p1_i!=0 && $p2_i!=0 && $p3_i!=0 && $p4_i!=0 && $p5_i!=0 && $p6_i!=0){
										$lado_sano = ($lado_sano=="pierna_i") ? "si" : "no";
										$sql5="insert into mediciones values ($id_user,'$fecha','pierna','izquierdo','$lado_sano',$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i)";
										$stmt5 = $abd->ejecuta_sql($sql5);
										if( $stmt5 === false ) {
											$res=-1;
										// die( print_r( sqlsrv_errors(), true));
										}
									}
									//PIERNA DERECHA
									if($p1_d!=0 && $p2_d!=0 && $p3_d!=0 && $p4_d!=0 && $p5_d!=0 && $p6_d!=0){
										$lado_sano = ($lado_sano=="pierna_d") ? "si" : "no";
										$sql6="insert into mediciones values ($id_user,'$fecha','pierna','derecho','$lado_sano',$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)";
										$stmt6 = $abd->ejecuta_sql($sql6);
										if( $stmt6 === false ) {
											$res=-1;
										}
									}
								
									
								
								}
							}
						}
						else{//no hay primera medición
							$res=-3;
						}
					}
				}//fin pierna

			}

			return $res;
		}



		public function get_miembro_afecto($id_user){
			$res=-3;
			$abd = new TAccesbd ();

			if($abd->conectado())
			{
				//-3 brazo_i_afecto, -4 brazo_d_afecto, -5 pierna_i_afecto, -6 pierna_d_afecto
				//Comprobar si tiene medición inicial
				$sql="select count(*) from mediciones where id_user=$id_user";
				$stmt = $abd->consultar_dato($sql);
				if( $stmt === false ) {//error consulta sql
					$res=-1;
				}
				else{
					if($stmt<2){//no tiene medicion inicial
						$res=-2;
					}
					else{//tiene medicion inicial, buscamos si es brazo o pierna, primero
						$sql2="SELECT TOP 1 extremidad FROM mediciones WHERE id_user = $id_user ORDER BY fecha";
						$stmt2 = $abd->consultar_dato($sql2);
						if( $stmt2 === false ) {//error consulta sql
							$res=-1;
						}
						else{
							if($stmt2=="brazo"){
								$sql3="SELECT TOP 1 lado FROM mediciones WHERE id_user = $id_user and lado_sano='no' and extremidad='brazo' ORDER BY fecha";
								$stmt3 = $abd->consultar_dato($sql3);
								if( $stmt3 === false ) {//error consulta sql
									$res=-1;
								}
								else{//lado izquierdo es el afecto
									if($stmt3=="izquierdo"){
										$res=-3;
									}
									else{//lado derecho es el afecto
										$res=-4;
									}
								}
							}
							else{//"pierna"
								$sql4="SELECT TOP 1 lado FROM mediciones WHERE id_user = $id_user and lado_sano='no' and extremidad='pierna' ORDER BY fecha";
								$stmt4 = $abd->consultar_dato($sql4);
								if( $stmt4 === false ) {//error consulta sql
									$res=-1;
								}
								else{//lado izquierdo es el afecto
									if($stmt4=="izquierdo"){
										$res=-5;
									}
									else{//lado derecho es el afecto
										$res=-6;
									}
								}

							}
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

	public function editar_datos_personales($correo,$pass,$nombre,$apellido1,$apellido2,$id_especialista,$id_usuario){
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si se repite el correo antes (en el caso de que decida cambiarlo)
			$sql="select count(*) from usuario WHERE correo='$correo' and id_user!=$id_usuario";
			$stmt = $abd->consultar_dato($sql);
			if( $stmt === false ) {//error consulta sql
				$res=-1;
			}
			else{
					if($stmt>0){//Ya existe el correo, error
						$res=-2;
					}
					else{
							//Modificamos el usuario
							$sql2="update usuario set pass='$pass', nombre='$nombre', correo='$correo', apellido1='$apellido1', apellido2='$apellido2' where id_user=$id_usuario";
							$stmt2 = $abd->ejecuta_sql($sql2);
							if( $stmt2 === false ) {
								$res=-1;
							}
					}
			}
		} 
		return $res;
	}

	public function editar_historial_clinico($id_user,$doc_identificacion,$nacionalidad, $raza, $fecha_nacimiento,$sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
	$fecha_debut, $familiar_linfedema, $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
	  $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion)
	  {
		  $res=0;
		  $abd = new TAccesbd();
  
		  if($abd->conectado())
		  {
			  //Comprobar si existe el historial clínico
			  $sql2="select count(*) from historial_clinico where id_user=$id_user";
			  $stmt2 = $abd->consultar_dato($sql2);
  
			  if( $stmt2 === false ) {//error consulta sql
				  $res=-1;
			  }
			  else{
				  if($stmt2>0){//Ya existe el historial de ese paciente, hacemos UPDATE
					$sql3="update historial_clinico set doc_identificacion='$doc_identificacion', nacionalidad='$nacionalidad', raza='$raza', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', altura=$altura, peso=$peso, tipo_congenito='$tipo_congenito', subtipo_congenito='$subtipo_congenito', fecha_debut='$fecha_debut', familiar_linfedema='$familiar_linfedema', motivo_secundario='$motivo_secundario', ant_vasculares='$ant_vasculares', ant_infeccion_venosa='$ant_infeccion_venosa', ant_sobrepeso='$ant_sobrepeso', ant_lipedema='$ant_lipedema', ant_permeabilidad_cap='$ant_permeabilidad_cap', ant_ansiedad='$ant_ansiedad', ant_diabetes='$ant_diabetes', ant_triquiasis='$ant_triquiasis', ant_sindromes='$ant_sindromes', profesion='$profesion', grado_resp_profesion=$grado_resp_profesion, grado_stress_profesion=$grado_stress_profesion where id_user=$id_user";
					$stmt3 = $abd->ejecuta_sql($sql3);
					if( $stmt3 === false ) {//Fallo consulta
						$res=-1;
					}
				}
				  else{//No existe, HACEMOS INSERT
  
						$sql="insert into historial_clinico values ($id_user,'$doc_identificacion','$nacionalidad','$raza','$fecha_nacimiento','$sexo',$altura, $peso,'$tipo_congenito','$subtipo_congenito','$fecha_debut','$familiar_linfedema','$motivo_secundario','$ant_vasculares','$ant_infeccion_venosa','$ant_sobrepeso','$ant_lipedema','$ant_permeabilidad_cap','$ant_ansiedad','$ant_diabetes','$ant_triquiasis','$ant_sindromes','$profesion',$grado_resp_profesion,$grado_stress_profesion)";
			  
						$stmt = $abd->ejecuta_sql($sql);
						if( $stmt === false ) {//Fallo consulta
							$res=-1;
						}
						  
				  }
			  }
		  }
  
	  
		  return $res;
	  }

	public function editar_hist_trat_linf($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
		$vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez){
		
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//Comprobar si existe el historial
			$sql2="select count(*) from historial_tratamiento_linfedema where id_user=$id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {//error sql
				$res=-1;
			}
			else{
				
				$fallo_terapia = empty($fallo_terapia) ? "null" : "'$fallo_terapia'";
				$nota = empty($nota) ? "null" : "'$nota'";

				if($stmt2>0){//ya existe, UPDATE
					$sql3="update historial_tratamiento_linfedema set fecha_ult_tratamiento='$fecha_ult_tratamiento', satisfecho_result='$satisfecho_result', fallo_terapia=$fallo_terapia, tipo_drenaje_linfa='$tipo_drenaje_linfa', vendaje='$vendaje', nota=$nota, contencion_dia='$contencion_dia', contencion_tipo='$contencion_tipo', contencion_sensacion='$contencion_sensacion', contencion_dolor='$contencion_dolor', contencion_escala='$contencion_escala', contencion_pesadez='$contencion_pesadez' where id_user=$id_user";
					$stmt3 = $abd->ejecuta_sql($sql3);
					if( $stmt3 === false ) {
						$res=-1;
					}
				}
				else{//No existe, INSERT
					
					$sql="insert into historial_tratamiento_linfedema values ($id_user,'$fecha_ult_tratamiento','$satisfecho_result',$fallo_terapia,'$tipo_drenaje_linfa','$vendaje',$nota,'$contencion_dia','$contencion_tipo','$contencion_sensacion','$contencion_dolor','$contencion_escala','$contencion_pesadez')";
					$stmt = $abd->ejecuta_sql($sql);
					if( $stmt === false ) {
						$res=-1;
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


	public function modificar_especialista($id_especialista_seleccionado, $nombre, $apellido1,
	$apellido2,$correo,$pass, $pass2, $tipo)
	{
		
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="update especialista set correo='$correo', pass='$pass', pass2='$pass2', nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', tipo='$tipo'  where id_especialista = $id_especialista_seleccionado";
			$stmt = $abd->ejecuta_sql($sql);
		}
		if( $stmt === false ) {
			$res=-1;
		}
		return $res;

	}

	//update usuario set id_especialista=$id_especialista where id_user=$id_user and id_especialista is null **

	public function asignar_fisio($id_user, $id_especialista){
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="update usuario set id_especialista=$id_especialista where id_user=$id_user and (id_especialista is null or id_especialista=95)";
			$stmt = $abd->ejecuta_sql($sql);	
		}
		if( $stmt === false ) {//error sql

			$res=-1;

		}
		return $res;
	}

	public function get_paciente_no_asignado($id_user){	
			$res=0;
			$abd = new TAccesbd ();
			if($abd->conectado())
			{
				$sql="select nombre,apellido1, apellido2, correo, pass from usuario	where id_user = $id_user";
				$stmt = $abd->listado_asociativo($sql);
			}
			if( $stmt != false ) {//error sql

				$res=$stmt;
	
			}
			return $res;
	}
	
	//DATOS PACIENTE
	// 1) Datos personales
	public function get_datos_personales($id_user){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="select nombre,apellido1, apellido2, correo, pass from usuario	where id_user = $id_user";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {//error sql

			$res=$stmt;

		}
		return $res;
	}
	
	public function get_datos_medicamento($id_medicamento){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="select * from medicamento where id_medicamento = $id_medicamento";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {//error sql

			$res=$stmt;

		}
		return $res;
	}
	public function get_datos_infeccion($id_infeccion){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="select * from infeccion where id_infeccion = $id_infeccion";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {//error sql

			$res=$stmt;

		}
		return $res;
	}

	public function get_datos_val_linf($ref_valoracion){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="select * from valoracion_linfedema where ref_valoracion = $ref_valoracion";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {//error sql

			$res=$stmt;

		}
		return $res;
	}
	public function get_datos_cirugia($ref_cirugia){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql="select * from cirugia where ref_cirugia = $ref_cirugia";
			$stmt = $abd->listado_asociativo($sql);
		}
		if( $stmt != false ) {//error sql

			$res=$stmt;

		}
		return $res;
	}

	// 2) Historial clínico
	public function get_historial_clinico($id_user){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			$sql2="select count(*) from historial_clinico where id_user = $id_user";
			$stmt2 = $abd->consultar_dato($sql2);

			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){
					$sql="select * from historial_clinico where id_user = $id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt != false ) {//error sql
						$res=$stmt;
					}
				}
				else{//aun no hay datos
					$res=-2;
				}
			}
			
		}
			
		return $res;
	}
	//**
	
	// 6) Hábitos
	public function get_habitos($id_user){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//comprobamos si ya tiene datos guardados
			$sql2="select count(*) from habitos where id_user = $id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){//sí tiene datos
					$sql="select * from habitos where id_user = $id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt != false ) {//error sql
						$res=$stmt;
					}
				}
				else{//no tiene
					$res=-2;
				}
			}

		}
		
		return $res;
	}
	// 9) Medicion inicial
	public function get_medicion_inicial($id_user){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//comprobamos si ya tiene datos guardados
			$sql2="select count(*) from mediciones where id_user = $id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){//sí tiene datos
					$sql="SELECT TOP 2 * FROM mediciones WHERE id_user=$id_user ORDER BY fecha";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt != false ) {//error sql
						$res=$stmt;
					}
				}
				else{//no tiene
					$res=-2;
				}
			}

		}
		
		return $res;
	}
	// 7) Hist Trat Linf
	public function get_hist_trat_linf($id_user){	
		$res=0;
		$abd = new TAccesbd ();
		if($abd->conectado())
		{
			//comprobamos si ya tiene datos guardados
			$sql2="select count(*) from historial_tratamiento_linfedema where id_user = $id_user";
			$stmt2 = $abd->consultar_dato($sql2);
			if( $stmt2 === false ) {
				$res=-1;
			}
			else{
				if($stmt2>0){//sí tiene datos

					$sql="select * from historial_tratamiento_linfedema where id_user = $id_user";
					$stmt = $abd->listado_asociativo($sql);
					if( $stmt != false ) {//error sql
						$res=$stmt;
					}
				}
				else{//no tiene datos
					$res=-2;
				}
			}
			
		}
		
		return $res;
	}
	


}

?>