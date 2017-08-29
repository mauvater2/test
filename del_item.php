<?php
include ("includes/db.php");
global $conn;

$id_item = $_POST['id'];

$sql="DELETE FROM items WHERE id = ".$id_item;
if (!mysql_query($sql,$conn)){
	$error = "There was a problem. Please, retry in a few seconds.";
}
else
{
	//
}

echo "Item succesfully deleted.";

?>