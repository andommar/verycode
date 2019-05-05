<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/TUsuario.php");

class TControl{
    
    public function comprobar_usuario($correo,$contrasenya,&$tipo_usuario, &$id_especialista){
        //echo("<h1>CACA DE VACA GIGANTE</h1>");
        $usr = new TUsuario();
        $id_especialista=0;
        $resultado = $usr->comprobar_usuario($correo,$contrasenya,$tipo_usuario);
        $usr->obtener_id_especialista($correo, $id_especialista);
        
        return ($resultado);
    }

    //no usada aún
    public function registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo)
    {
        
        $usr = new TUsuario();
        $resultado = $usr->registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo);
        return ($resultado);
    }

    public function listado_fisios(){
        $usr = new TUsuario();
        $resultado = $usr->listado_fisios();
        return ($resultado);
    }
    
    public function registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista)
    { 
        $usr = new TUsuario();
        $resultat = $usr->registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista);
        return ($resultat);
    }

    public function registro_historial_clinico($id_user,$doc_identificacion, $nacionalidad, $raza, $fecha_nacimiento, $sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
    $fecha_debut, $familiar_linfedema, $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
    $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion)
    {
        $usr = new TUsuario();
        $resultat = $usr->registro_historial_clinico($id_user,$doc_identificacion, $nacionalidad, $raza, $fecha_nacimiento, $sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
        $fecha_debut, $familiar_linfedema, $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
        $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion);
        return ($resultat);
    }


}

?>