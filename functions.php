<?php
         include_once("db_connect.php");

        function signin($email,$password,$remember_me, $dbh)
        {    
        	session_start();
        	//include_once("db_connect.php");
        	//$dbh = new PDO("mysql:host=$hostname;dbname=demcratic_dialogue", $username, $password);    
            try {
	                if($email == "" || $password == ""){
					echo "Please enter your email and password";
			        exit();
				} else {
				       $sql = $dbh->prepare("SELECT username, password FROM users WHERE email=:email AND password= :password LIMIT 1");
					   $sql->execute(array('email' => $email,'password'=>$password));
					   $count = $sql->rowCount();
						if ($count < 1) {
							echo $count;
							 exit();
							//echo "No such user in our system";
						}else{   
							   echo $count;
							   exit();
                               
                                // CREATE THEIR SESSIONS AND COOKIES
								$_SESSION['useremail'] = $email;
								$_SESSION['password'] = $password;
								$useremail =$_SESSION['useremail'];
								$userpass =$_SESSION['password'];

						       if($remember_me != ""){
									setcookie("user", $email, strtotime( '+30 days' ), "/", "", "", TRUE);
								// UPDATE THEIR "LASTLOGIN" FIELDS
									$sql =$dbh->prepare("UPDATE users SET lastlogin=now() WHERE email='$useremail' LIMIT 1");
						            $sql->execute();
						            echo "You are now logged in with cookies set";
						            //header("location: user.php");
						            //header("location: userpage.php");
									//echo $db_username;
								    exit();

							   } else {
								    
									$sql =$dbh->prepare("UPDATE users SET lastlogin=now() WHERE email='$useremail' LIMIT 1");
						            $sql->execute();
						            //header("location: user.php");
						            echo "Yo!! U are log in without cookies set";
									//echo $db_username;
								    exit();

							   }
					}
		         }
			    /*** close the database connection ***/
			    $dbh = null;  
			   }
		       catch(PDOException $e){

			       echo $e->getMessage();

			    }		
      }

?>