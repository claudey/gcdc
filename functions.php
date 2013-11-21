<?php

       

         include_once("db_connect.php");

        function signin($email,$password,$remember_me)
        {    
        	session_start();

        	// echo $email;
        	// echo $password;
        	// exit();
        	//include_once("db_connect.php");
        	//$dbh = new PDO("mysql:host=$hostname;dbname=demcratic_dialogue", $username, $password);    
            
	               if($email == "" || $password == ""){
					echo "Please enter your email and password";
			        exit();
				     } else {
				       $sql = mysql_query("SELECT email, password FROM users WHERE email='$email' AND password='$password' LIMIT 1");
				       // $sql = mysql_query("SELECT * FROM profile_data WHERE user_id='$user' LIMIT 1");
				       $count = mysql_num_rows($sql);

						if ($count < 1) {
							echo "No such user in our system first";
							// echo $count;
							 exit();
							
						}else{   
							   //echo $count;
							   //exit();
                               
                                // CREATE THEIR SESSIONS AND COOKIES
								$_SESSION['useremail'] = $email;
								$_SESSION['password'] = $password;
								$useremail =$_SESSION['useremail'];
								$userpass =$_SESSION['password'];

								// echo $useremail;
								// exit();

						       if($remember_me != ""){
									setcookie("user", $email, strtotime( '+30 days' ), "/", "", "", TRUE);
								// UPDATE THEIR "LASTLOGIN" FIELDS
									$sql =mysql_query("UPDATE users SET lastlogin=now() WHERE email='$useremail' LIMIT 1");
						            
						            header('Location:user.php');
						            //echo "You are now logged in with cookies set";
						            //header("location: user.php");
						            //header("location: userpage.php");
									//echo $db_username;
								    //exit();

							   } else {
								    
									$sql =mysql_query("UPDATE users SET lastlogin=now() WHERE email='$useremail' LIMIT 1");
						            
						            header('Location:user.php');


							   }
					}
		         }
			    
			   
		       	
      }



      function signup($email,$password,$firstName,$lastName)
      {
      	# code...

     
          $result = mysql_query("SELECT * FROM users WHERE email='$email'") OR DIE (mysql_error());
          if (mysql_num_rows($result)==0) {

               $result2 = mysql_query("INSERT INTO users (email,password,firstName,lastName) VALUES ('$email','$password','$firstName','$firstName') ") OR die (mysql_error());
               if (!$result2) {
                    # code...
                    die('Could not insert into database: '.mysql_error());
               }else{
                     
                     $_SESSION['id'] = mysql_insert_id();
                     header('Location:user.php');
               }
          }else{
               echo "User already exist";
               header('Location:login.php');
               

          }


      }


      function createIssue($issueTitle,$issueDescription,$issueAssignee)
      {
      	# code...

      	//$result = mysql_query("SELECT * FROM  issues WHERE ")

      	session_start();

      	if (isset($_SESSION['useremail'])) {
      		# code...
      	$owner= $_SESSION['useremail'];

      	$owner_id = mysql_query("SELECT id FROM users WHERE email='$owner' LIMIT 1") OR DIE (mysql_error());

      	$owner_id = 1;

      	if (strlen($issueAssignee) < 3) {
      		# code...
      		$addressee_id = 1;

      	}elseif(strlen($issueAssignee) > 3){
            
            $addressee_id = 2;
      	}else{
      		$addressee_id = 3;
      	}


      	$result = mysql_query("INSERT INTO issues (owner_id,addressee_id,issueTitle,issueDescription) VALUES('$owner_id','$addressee_id','$issueTitle','issueDescription')") OR die (mysql_error());
      	echo "Issue created";

      	}else{
      		echo "You must be a log in user to create an issues";
      		exit();
      	}

      }

 