<?php
header("Content-Type: text/html;charset=utf-8");		
include_once ("accessbd.php");
ini_set('mssql.charset','utf-8');

class TGrafica
{

    function __construct()
    {

    }

    public function mostrar_graficas($id_user)
    {
        $res="";
        $abd = new TAccesbd ();
        if($abd->conectado())
        {
            $sql="select id_user,extremidad,lado,lado_sano,p1,p2,p3,p4,p5 from mediciones where id_user= $id_user";
            $res=$abd->mostrar_graficas($sql);

            $sql2="select fecha from mediciones where id_user= $id_user";
            $res2=$abd->mostrar_fechas_graficas($sql2);
        }
        else
        {
            $res=-1;//error conexión
        }
        $datos= array($res, $res2);
        return $datos;
    }


}


?>