<?php

include_once 'connection.php';

if(isset($_POST['signup'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$verifyPassword = $_POST['verifyPassword'];
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$office = $_POST['office'];
	$title = $_POST['title'];

	$insertQuery = "INSERT INTO officials(Title,firstName,lastName,portfolio,email,password,area_of_specification) VALUES('$title','$firstName','$lastName','','$email','$password', '$office')";
	$result = mysql_query($insertQuery);

	if($result){
		header("Location: /follow");
	}

}