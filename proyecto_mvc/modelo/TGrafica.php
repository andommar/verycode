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
            $sql="select id_user,fecha,extremidad,lado,lado_sano,p1,p2,p3,p4,p5 from mediciones where id_user= $id_user";
            $res=$abd->mostrar_graficas($sql);
        }
        else
        {
            $res=-1;//error conexión
        }
        return $res;
    }


}


?>