<?php 
           include_once('db_connect.php');
           include_once('functions.php');
           // GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
           if (isset($_POST['signin'])) {
           	# code...
             	$email = ($_POST['email']);
  			      $password = ($_POST['password']);
  			      $remember_me = isset($_POST['remember-me']);
  			      signin($email,$password,$remember_me);

           }elseif (isset($_POST['signup'])) {
             # code...
              //$username = isset($_POST['username']);
              $email = $_POST['email'];
              $password = $_POST['password'];
              $firstName = $_POST['firstName'];
              $lastName = $_POST['lastName'];

              echo $email;
              echo $password;
              echo $firstName;
              echo $lastName;
              exit();
              signup($email,$password,$firstName,$lastName);
           }elseif (isset($_POST['create_issue'])) {
             $issueTitle = $_POST['issueTitle'];
             $issueDescription = $_POST['issueDescription'];
             $issueAssignee = $_POST['issueAssignee'];
             createIssue($issueTitle,$issueDescription,$issueAssignee);

           }
?>