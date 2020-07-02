<?php

$servername = "localhost";
$username 	= "root";
$password	= "";
$db_name	= "ingotse_school";
//new connection
$conn = new mysqli($servername,$username,$password,$db_name) ;
//check connection
	if($conn->connect_error)
	{
		die("connection failed" . $conn->connect_error);
	}
	echo "connected succesfuly";

 ?>