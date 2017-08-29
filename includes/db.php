<?php
// ----------------------------------------------------------------------
// Data Connection
// ----------------------------------------------------------------------
//local

$hostname="localhost";
$username="root";
$password="mauchoxxx";
$dbname="test_db";


$conn = mysql_connect($hostname,$username, $password); 
mysql_select_db($dbname);

if (!$conn) {
	echo "ERROR DE CONEXION!<br><br>Contactese por favor con el programador para su pronta resolucion. Gracias.";
    die('Could not connect--: ' . mysql_error());
}
?>