<?php
class Conectar{

    public static function conexion(){      
		$conexion = pg_connect("host=localhost port=5432 dbname=Db_propuesta user=postgres password=anime05");
        return $conexion;
    }
}
?>

