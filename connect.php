<?php
	$firstname = $_POST[firstname];
	$lastname = $_POST[lastname]
	$email = $_POST[email]
	$password = $_POST[password]
	$confirmpassword = $_POST[confirmpassword]
	
	$conn = new mysqli('localhost','root','','SignUp');
	if($conn->connect_error){
		die('Connection Failed:' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into sign-up(firstname, lastname, email, password, confirmpassword)	
		values(?,?,?,?,?)");
		$stmt->blind_param("sssss",$firstname, $lastname, $email, $password, $confirmpassword);
		$stmt->execute();
		echo "Sign Up Successful";
		$stmt->close();
		$conn->close();
	}
























?>