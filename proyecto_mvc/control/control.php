<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/TUsuario.php");

class TControl{

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

    public function registro_infeccion($id_user,$nombre_infeccion,$fecha,$descripcion)
    {
        $usr = new TUsuario();
        $resultat=$usr->registro_infeccion($id_user,$nombre_infeccion,$fecha,$descripcion);
        return ($resultat);
    }


}

?>