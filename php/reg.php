<?php
include("functions.php");


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(!empty($name) && !empty($lastname) && !empty($username) && !empty($email) && !empty($password)){
				addPerson($name,$lastname,$username,$email, $password);
				header("Location: ../login.php");
	} else{
		header("Location: ../registration.php");
	}
}

?>