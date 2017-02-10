<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Indice</title>
</head>
<body>
<?php
echo("probando");
$dbconn3 = pg_connect("host=localhost port=5432 dbname=prueba user=postgres password=anime05");
//conectarse a una base de datos llamada "mary" en el host "sheep" con el nombre de usuario y password
if($dbconn3)
echo(" ya todo bien");
else
echo"aun nada";
?>
</body>
</html>
