<?php 
           include_once('db_connect.php');
           include_once('functions.php');
           // GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
           if (isset($_POST['submit'])) {
           	# code...
           	$email = ($_POST['email']);
			$password = ($_POST['password']);
			$remember_me = isset($_POST['remember-me']);
			signin($email,$password,$remember_me, $dbh);
           }
?>