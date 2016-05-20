<?php

include("config.php");

function checkIfUserExists($username){
	global $conn;
	$sql = "SELECT * FROM persons WHERE username=?";
	$query = $conn->prepare($sql);
	$query->bind_param('s',$username);
	$query->execute();
	$query->store_result();
	if ($query->num_rows > 0) {
		return true;
	} else{
		return false;
	}
	$query->close();
}

function addPerson($name, $lastname, $username, $email, $password)
{
	global $conn;
	if(!checkIfUserExists($email)){
		$insert = "INSERT INTO persons (name,lastname,username,email,password) VALUES (?,?,?,?,?)";
	$query = $conn->prepare($insert);
	$query->bind_param('sssss',$name,$lastname,$username, $email,$password);
	$query->execute();
	$query->close();
	} else{
		echo "Korisnik vec postoji!";
	}
}

function checkPerson($usename, $password){
	global $conn;
	$sql = "SELECT * FROM persons WHERE username=? AND password=?";
	$query = $conn->prepare($sql);
	$query->bind_param('ss',$username,md5($password));
	$query->execute();
	$query->store_result();
	if ($query->num_rows > 0) {
		return 1;
	} else{
		return 0;
	}
	$query->close();
}







