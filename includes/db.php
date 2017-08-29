<?php
// ----------------------------------------------------------------------
// Data Connection
// ----------------------------------------------------------------------

$hostname="yourhostname";
$username="yourusername";
$password="yourpassword";
$dbname="yourdbname";


$conn = mysql_connect($hostname,$username, $password); 
mysql_select_db($dbname);

if (!$conn) {
	echo "Error!!";
    die('Could not connect--: ' . mysql_error());
}
?>