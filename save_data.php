<?php
include ("includes/db.php");
global $conn;

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$description = $_POST['description'];
$image_info = getimagesize($_FILES["image"]["tmp_name"]);
$image_width = $image_info[0];
$image_height = $image_info[1];

if(($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") && ($image_width == 320 && $image_height == 320)) {
	
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);	
	
	$image = $_FILES["image"]["name"];
	
	$sql="INSERT INTO items (description, image) VALUES ('$description', '$image')";
	if (!mysql_query($sql,$conn)){
		$error = "There was a problem. Please, retry in a few seconds.";
	}
	else
	{
		//
	}
	
	echo "Thanks for uploading!";
}
else
{
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}


?>