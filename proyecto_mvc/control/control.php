<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/TUsuario.php");
include_once("../modelo/TGrafica.php");

class TControl{

    public function get_miembro_afecto($id_user){
        $usr = new TUsuario();
        $resultado = $usr->get_miembro_afecto($id_user);
        return ($resultado);
    }
    public function modificar_especialista($id_especialista_seleccionado, $nombre, $apellido1,
    $apellido2,$correo,$pass, $pass2, $tipo){
        
        $usr = new TUsuario();
        $resultado = $usr->modificar_especialista($id_especialista_seleccionado, $nombre, $apellido1,
        $apellido2,$correo,$pass, $pass2, $tipo);
        return ($resultado);
    }

    public function datos_especialista($id_especialista){
        $usr = new TUsuario();
        $resultado = $usr->datos_especialista($id_especialista);
        return ($resultado);
    }

    public function listado_usuarios($id_especialista){
        $usr = new TUsuario();
        $resultado = $usr->listado_usuarios($id_especialista);
        return ($resultado);
    }
    
    public function listado_usuarios_no_asignados($id_especialista){
        $usr = new TUsuario();
        $resultado = $usr->listado_usuarios_no_asignados($id_especialista);
        return ($resultado);
    }
    public function borrar_especialista($id_especialista, $tipo_especialista){
        
        $usr = new TUsuario();
        $resultado = $usr->borrar_especialista($id_especialista, $tipo_especialista);
        return ($resultado);
    }

    public function comprobar_usuario($correo,$contrasenya,&$tipo_usuario, &$id_especialista){
        $usr = new TUsuario();
        $id_especialista=0;
        $resultado = $usr->comprobar_usuario($correo,$contrasenya,$tipo_usuario);
        $usr->obtener_id_especialista($correo, $id_especialista);
        
        return ($resultado);
    }

    public function registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo)
    {
        
        $usr = new TUsuario();
        $resultado = $usr->registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo);
        return ($resultado);
    }

    public function listado_especialistas(){
        $usr = new TUsuario();
        $resultado = $usr->listado_especialistas();
        return ($resultado);
    }
    public function listado_pacientes(){
        $usr = new TUsuario();
        $resultado = $usr->listado_pacientes();
        return ($resultado);
    }
    
    public function registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista,&$id_user)
    { 
        $usr = new TUsuario();
        $resultat = $usr->registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista,$id_user);
        return ($resultat);
    }
    
   
 
    public function registro_historial_clinico($id_user,$doc_identificacion,$nacionalidad, $raza, $fecha_nacimiento,$sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
    $fecha_debut, $familiar_linfedema,$motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
	$ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion)
    {
        $usr = new TUsuario();
        $resultat = $usr->registro_historial_clinico($id_user,$doc_identificacion,$nacionalidad, $raza, $fecha_nacimiento,$sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
        $fecha_debut, $familiar_linfedema,$motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
        $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion);

        return ($resultat);
    }

    public function registro_cirugias($id_user,$nombre,$fecha,$comentarios)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_cirugias($id_user,$nombre,$fecha,$comentarios);
        return ($resultat);

    }
 
    public function registro_medicamento($id_user,$medicamento,$patologias)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_medicamento($id_user,$medicamento,$patologias);
        return ($resultat);
    }

    public function registro_infeccion($id_user,$tipo,$medicamento,$fecha) 
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_infeccion($id_user,$tipo,$medicamento,$fecha);
        return ($resultat);
    }

    public function registro_habitos($id_user,$fumador,$cigarros,$frec_cigarros,$fumador_social,$toma_alcohol,$alcohol,$frec_alcohol,$tipo_alcohol,
                    $hace_deporte,$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,
                    $erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_habitos($id_user,$fumador,$cigarros,$frec_cigarros,$fumador_social,$toma_alcohol,$alcohol,$frec_alcohol,$tipo_alcohol,
                                        $hace_deporte,$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,
                                        $erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro);

        return ($resultat);
    }


    public function registro_tratamiento_linfedema($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
    $vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_tratamiento_linfedema($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
        $vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez);

        return ($resultat);
    }

    public function registro_valoracion_linfedema($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,$stemmer,$fovea,$pesadez,$rubor)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_valoracion_linfedema($id_user,$fecha,$localizacion,$consistencia_edema,$color,$valoracion_piel,$stemmer,$fovea,$pesadez,$rubor);

        return ($resultat);
    }
    public function registro_mediciones($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_mediciones($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d);

        return ($resultat);
    }
   public function registro_nueva_medicion($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d){
        $usr = new TUsuario();
        $resultat=$usr->registro_nueva_medicion($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d);
    return ($resultat);
   }
   public function asignar_fisio($id_user, $id_especialista){
        $usr = new TUsuario();
        $resultat=$usr->asignar_fisio($id_user, $id_especialista);
    return ($resultat);
   }
     
    //--------------------------- Mediciones/Gráficas -----------------------

    public function mostrar_graficas($id_user)
    {
        $graf = new TGrafica();
        $resultat=$graf->mostrar_graficas($id_user);
        return $resultat;
    }
    public function mostrar_fechas_graficas($id_user)
    {
        $graf = new TGrafica();
        $resultat=$graf->mostrar_fechas_graficas($id_user);
        return $resultat;
    }
    public function get_paciente_no_asignado($id_user){
        
        $usr = new TUsuario();
        $resultat=$usr->get_paciente_no_asignado($id_user);

        return ($resultat);
    }
    //** 
    // 1) Datos personales
    public function get_datos_personales($id_user){
        
        $usr = new TUsuario();
        $resultat=$usr->get_datos_personales($id_user);

        return ($resultat);
    }
    // 2) Historial clínico
    public function get_historial_clinico($id_user){
        
        $usr = new TUsuario();
        $resultat=$usr->get_historial_clinico($id_user);

        return ($resultat);
    }
    //EDITAR DATOS PERSONALES PACIENTE
    public function editar_datos_personales($correo,$pass,$nombre,$apellido1,$apellido2,$id_especialista,$id_usuario){
        $usr = new TUsuario();
        $resultat = $usr->editar_datos_personales($correo,$pass,$nombre,$apellido1,$apellido2,$id_especialista,$id_usuario);
        return ($resultat);
    }


}

?>