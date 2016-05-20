<?php

$server="localhost";
$user="root";
$pass="";
$db="it255-dz08";

$conn=new mysqli($server,$user,$pass,$db);

if($conn->connect_error) {
	die("Error: ".$conn->connect_error);
}

?>