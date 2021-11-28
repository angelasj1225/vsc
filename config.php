<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localconnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
	{
		echo json_encode("Connection Failed");
	}
	

	
?>
