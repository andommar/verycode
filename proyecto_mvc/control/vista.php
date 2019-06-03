<?php

header("Content-Type: text/html;charset=utf-8");
include_once("control.php");
//include_once("../control/control_login.php");

// ini_set('mssql.charset','utf-8');

if(isset($_POST["opcion"]))
{

    $opcion=$_POST["opcion"];

    $c= new TControl();

    switch($opcion)
    {
        case "modificar_especialista":

            $id_especialista_seleccionado = $_POST["id_especialista_seleccionado"];
            $nombre = $_POST["nombre"];
            $apellido1 = $_POST["apellido1"];
            $apellido2 = $_POST["apellido2"];
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"];
            $tipo = $_POST["tipo"];

            $error=$c->modificar_especialista($id_especialista_seleccionado, $nombre, $apellido1,
            $apellido2,$correo,$pass, $pass2, $tipo);
            if($error==0)
            {
                echo "true";
            }
            else
                echo "false";


        break;


        case "borrar_especialista":

            $id_especialista = $_POST["id_especialista"];
            $tipo_especialista = $_POST["tipo_especialista"];

            $error=$c->borrar_especialista($id_especialista, $tipo_especialista);
            if($error==0)
            {
                echo "true";
            }
            else
                echo "false";

            // BORRAR ESPECIALISTA
            // ____________________
            
            
            // -Borrar admin | (si es el mismo -> logout automático y le envía a la página de login)
            // delete from especialista where id_especialista = 10
            
            // -Borrar fisio | 
            
            // (primero tenemos que buscar si ese especialista tiene pacientes)
            // ->select count(*) from usuario where id_especialista = 7
            //     if resultat > 0
            //         -> update usuario set id_especialista=null where id_especialista = 7
                
            // ->delete from especialista where id_especialista = 7
        
        break;

        case "registro_admin":           

            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"]; 
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido1"];
            $apellido2 = $_POST["apellido2"];
            $tipo = $_POST["tipo"];

            $error=$c->registro_admin($correo, $pass, $pass2, $nombre, $apellido, $apellido2, $tipo);
            if($error==0)
            {
                echo "true";
            }
            else
                echo "false";

        break;

        case "registro_paciente":

            $id_usuario=0;
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"]; 
            $nombre = $_POST["nombre"];
            $apellido1 = $_POST["apellido1"];
            $apellido2 = $_POST["apellido2"];
            $id_especialista = $_POST["id_especialista"];
            
            
            $error=$c->registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista,$id_usuario);
            if($error==0)
            {
                // echo $id_usuario;
                $resultado = array($id_usuario,"");
            }
            else if($error==-2){
                // echo "correo"
                $resultado = array("","correo");
            }
            else
                // echo "false";
                $resultado = array("","false");
            
           echo json_encode($resultado);

        break;

        case "registro_historial_clinico": 
            
            $id_user=$_POST["id_user"];
            $doc_identificacion =$_POST["doc_identificacion"];
            $nacionalidad=$_POST["nacionalidad"];
            $raza =$_POST["raza"];
            $fecha_nacimiento =$_POST["fecha_nacimiento"];
            $sexo =$_POST["sexo"];
            $altura =$_POST["altura"];
            $peso =$_POST["peso"];
            $tipo_congenito =$_POST["tipo_congenito"];
            $subtipo_congenito =$_POST["subtipo_congenito"];
            $fecha_debut =$_POST["fecha_debut"];
            $familiar_linfedema =$_POST["familiar_linfedema"];
            $motivo_secundario =$_POST["motivo_secundario"];
            $ant_vasculares =$_POST["ant_vasculares"];
            $ant_infeccion_venosa =$_POST["ant_infeccion_venosa"];
            $ant_sobrepeso =$_POST["ant_sobrepeso"];
            $ant_lipedema =$_POST["ant_lipedema"];
            $ant_permeabilidad_cap =$_POST["ant_permeabilidad_cap"];
            $ant_ansiedad =$_POST["ant_ansiedad"];
            $ant_diabetes =$_POST["ant_diabetes"];
            $ant_triquiasis =$_POST["ant_triquiasis"];
            $ant_sindromes =$_POST["ant_sindromes"];
            $profesion =$_POST["profesion"];
            $grado_resp_profesion =$_POST["grado_resp_profesion"];
            $grado_stress_profesion =$_POST["grado_stress_profesion"];      

            $error=$c->registro_historial_clinico($id_user,$doc_identificacion,
            $nacionalidad, $raza, $fecha_nacimiento,
            $sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
            $fecha_debut, $familiar_linfedema,
            $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
            $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion); 

            if($error==0)//Todo bien
            {
                $resultado = "true";
            }
            else if($error==-2){//error, historial repetido
                $resultado = "historial";
            }
            else{//error sql por variables, conflicto bd...
                $resultado = "false";
            }
            echo ($resultado);
        break;

        

        case "registro_cirugias":

            $id_user=$_POST["id_user"];
            $nombre = $_POST["nombre_cirugia"];
            $fecha = $_POST["fecha"];
            $comentarios = $_POST["comentarios"];           
            
            $error=$c->registro_cirugias($id_user,$nombre,$fecha,$comentarios);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "cirugia";
            }
            else
                echo "false";

        break;

        case "registro_medicamento":

            $id_user=$_POST["id_user"];
            $medicamento = $_POST["medicamento"];
            $patologias = $_POST["patologias"];          
            
            $error=$c->registro_medicamento($id_user,$medicamento,$patologias);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "medicamento";
            }
            else
                echo "false";

        break;

        case "registro_infeccion":

            $id_user=$_POST["id_user"];
            $tipo = $_POST["tipo_inf"];
            $medicamento = $_POST["medicamentos_inf"];
            $fecha = $_POST["fecha_inf"];
            
            
            $error=$c->registro_infeccion($id_user,$tipo,$medicamento,$fecha);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "infeccion";
            }
            else
                echo "false";

        break;

        case "registro_habitos": 

            $id_user=$_POST["id_user"];
            $fumador = $_POST["fumador"];
            $cigarros = $_POST["cigarros"];
            $frec_cigarros = $_POST["frec_cigarros"];
            $fumador_social = $_POST["fumador_social"];
            $toma_alcohol = $_POST["toma_alcohol"];
            $frec_alcohol = $_POST["frec_alcohol"];
            $alcohol = $_POST["alcohol"];
            $tipo_alcohol = $_POST["tipo_alcohol"];
            $hace_deporte = $_POST["hace_deporte"];
            $frec_deporte = $_POST["frec_deporte"];
            $tipo_deporte = $_POST["tipo_deporte"];
            $t_sesion = $_POST["t_sesion"];
            $t_sesion_medidas = $_POST["t_sesion_medidas"];
            $alimentacion = $_POST["alimentacion"];   
            $suenyo_reparador = $_POST["suenyo_reparador"];
            $h_suenyo = $_POST["h_suenyo"];
            $astenico = $_POST["astenico"];  
            $erg_sentado = $_POST["erg_sentado"];
            $erg_bidepes_pasiva = $_POST["erg_bidepes_pasiva"];
            $erg_bidepes_activa = $_POST["erg_bidepes_activa"];
            $erg_otro = $_POST["erg_otro"];

            $error=$c->registro_habitos($id_user,$fumador,$cigarros,$frec_cigarros,$fumador_social,$toma_alcohol,$alcohol,$frec_alcohol,$tipo_alcohol,
                        $hace_deporte,$frec_deporte,$tipo_deporte,$t_sesion,$t_sesion_medidas,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,
                        $erg_bidepes_pasiva,$erg_bidepes_activa,$erg_otro);

            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "habito";
            }
            else
                echo "false";

        break;

        case "registro_tratamiento_linfedema":

            $id_user=$_POST["id_user"];
            $fecha_ult_tratamiento = $_POST["fecha_ult_tratamiento"];
            $satisfecho_result = $_POST["satisfecho_result"];
            $fallo_terapia = $_POST["fallo_terapia"];
            $tipo_drenaje_linfa = $_POST["tipo_drenaje_linfa"];
            $vendaje = $_POST["vendaje"];
            $nota = $_POST["nota"];
            $contencion_dia = $_POST["contencion_dia"];
            $contencion_tipo = $_POST["contencion_tipo"];
            $contencion_sensacion = $_POST["contencion_sensacion"];
            $contencion_dolor = $_POST["contencion_dolor"];
            $contencion_escala = $_POST["contencion_escala"];
            $contencion_pesadez = $_POST["contencion_pesadez"];

            $error=$c->registro_tratamiento_linfedema($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
            $vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez);
           
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "historial";
            }
            else
                echo "false";

        break;

        case "registro_valoracion_linfedema":

            $id_user=$_POST["id_user"];
            $fecha = $_POST["fecha"];
            $localizacion = $_POST["localizacion"];
            $consistencia_edema = $_POST["consistencia_edema"];
            $color = $_POST["color"];
            $valoracion_piel = $_POST["valoracion_piel"];
            $stemmer = $_POST["stemmer"];
            $fovea = $_POST["fovea"];
            $pesadez = $_POST["pesadez"];
            $rubor = $_POST["rubor"];
            // $foto_pierna_ant_d = $_POST["foto_pierna_ant_d"];
            // $foto_pierna_post_d = $_POST["foto_pierna_post_d"];
            // $foto_pierna_lat_d1 = $_POST["foto_pierna_lat_d1"];
            // $foto_pierna_lat_d2 = $_POST["foto_pierna_lat_d2"];
            // $foto_pierna_ant_i = $_POST["foto_pierna_ant_i"];
            // $foto_pierna_post_i = $_POST["foto_pierna_post_i"];
            // $foto_pierna_lat_i1 = $_POST["foto_pierna_lat_i1"];
            // $foto_pierna_lat_i2 = $_POST["foto_pierna_lat_i2"];
            // $foto_brazo_cruz_d = $_POST["foto_brazo_cruz_d"];
            // $foto_brazo_frontal_d = $_POST["foto_brazo_frontal_d"];
            // $foto_brazo_cruz_i = $_POST["foto_brazo_cruz_i"];
            // $foto_brazo_frontal_i = $_POST["foto_brazo_frontal_i"];

            
            $error=$c->registro_valoracion_linfedema($id_user,$fecha,$localizacion,$consistencia_edema,$color,
            $valoracion_piel,$stemmer,$fovea,$pesadez,$rubor);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "valoracion";
            }
            else
                echo "false";

        break;
//**
        case "registro_mediciones":
            
            $id_user=$_POST["id_user"];
            $fecha= $_POST["fecha"];
            $extremidad = $_POST["extremidad"];//brazo, pierna
            $lado_sano = $_POST["lado_sano"]; //pierna_d, pierna_i, brazo_i, brazo_d

            $p1_i = $_POST["p1_i"];
            $p2_i = $_POST["p2_i"];
            $p3_i = $_POST["p3_i"];
            $p4_i = $_POST["p4_i"];
            $p5_i = $_POST["p5_i"];
            $p6_i = $_POST["p6_i"];

            $p1_d = $_POST["p1_d"];
            $p2_d = $_POST["p2_d"];
            $p3_d = $_POST["p3_d"];
            $p4_d = $_POST["p4_d"];
            $p5_d = $_POST["p5_d"];
            $p6_d = $_POST["p6_d"];
                  
            $error=$c->registro_mediciones($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "medicion";
            }
            else 
                echo "false";

        break;

        case "datos_especialista":

            $id_especialista = $_POST["id_especialista"];
            $error=$c->datos_especialista($id_especialista);
            if($error==-1)
            {
                echo "Error carga datos especialista";
            }
            else
                echo json_encode($error);

        break;
        case "registro_nueva_medicion": //**

            $id_user=$_POST["id_usuario"];
            $fecha= $_POST["fecha"];
            $extremidad = $_POST["extremidad"];//pierna_d, pierna_i, brazo_i, brazo_d
            $lado_sano = $_POST["lado_sano"]; //pierna_d, pierna_i, brazo_i, brazo_d

            $p1_i = $_POST["p1_i"];
            $p2_i = $_POST["p2_i"];
            $p3_i = $_POST["p3_i"];
            $p4_i = $_POST["p4_i"];
            $p5_i = $_POST["p5_i"];
            $p6_i = $_POST["p6_i"];

            $p1_d = $_POST["p1_d"];
            $p2_d = $_POST["p2_d"];
            $p3_d = $_POST["p3_d"];
            $p4_d = $_POST["p4_d"];
            $p5_d = $_POST["p5_d"];
            $p6_d = $_POST["p6_d"];
                
            $error=$c->registro_nueva_medicion($id_user,$fecha,$extremidad,$lado_sano,$p1_i,$p2_i,$p3_i,$p4_i,$p5_i,$p6_i,$p1_d,$p2_d,$p3_d,$p4_d,$p5_d,$p6_d);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){//no hay 1a medicion
                echo "medicion";
            }
            else if($error==-3){//ya existen mediciones en ese día
                echo "fecha";
            }
            else //-1 
                echo "false";

        break;
        case "asignar_fisio":
            $id_user = $_POST["id_usuario"];
            $id_especialista = $_POST["id_especialista"];
            $error=$c->asignar_fisio($id_user, $id_especialista);
            if($error==0)
            {
                echo "true";
            }
            else //-1
                echo "false";


        break;


    }
}

if(isset($_GET["opcion"]))
{
    $opcion=$_GET["opcion"];

    $c= new TControl();

    switch($opcion)
    {
        case "listado_usuarios":

            $id_especialista = $_GET["id_especialista"];
            $error=$c->listado_usuarios($id_especialista);
            if($error!=false){
                echo json_encode($error);
            }
        
        break;
        case "listado_usuarios_no_asignados":
            $id_especialista = $_GET["id_especialista"];
            $error=$c->listado_usuarios_no_asignados($id_especialista);
            if($error!=false){
                echo json_encode($error);
            }
        break;

        case "mostrar_graficas":
            $id_user=$_GET["id_usuario"];

            $error=$c->mostrar_graficas($id_user);
            $error2=$c->mostrar_fechas_graficas($id_user);
            
            echo json_encode(array($error,$error2));

        break;
        //Buscamos si el miembro afecto es brazo o pierna
        //-3 brazo_i_afecto, -4 brazo_d_afecto, -5 pierna_i_afecto, -6 pierna_d_afecto
        case "get_miembro_afecto":
            $id_user=$_GET["id_usuario"];
            $error=$c->get_miembro_afecto($id_user);
            
            if($error==-1){
                echo "false";
            }
            else if($error==-2){
                echo "no_tiene";
            }
            else if($error==-3){
                echo "brazo_i";
            }
            else if($error==-4){
                echo "brazo_d";
            }
            else if($error==-5){
                echo "pierna_i";
            }
            else if($error==-6){
                echo "pierna_d";
            }
        break;
        case "get_paciente_no_asignado":

            $id_user=$_GET["id_usuario"];
            $error=$c->get_paciente_no_asignado($id_user);
            if($error==-1){
                echo "false";
            }
            else{
                echo json_encode($error);
            }
        break;     
    }
}
?>