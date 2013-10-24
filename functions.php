<?php
       

       public function signin($email,$password,$remember_me)
        {    
        	$dbh = new PDO("mysql:host=$hostname;dbname=demcratic_dialogue", $username, $password);
            // GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
        	//$email = mysqli_real_escape_string($db_connect, $_POST['email']);
			//$password = md5($_POST['password']);
			//$remember_me = $_POST['remember-me'];    
            try {
	                if($email == "" || $password == ""){
					echo "Please provide enter your email and password";
			        exit();
				} else {
				       $sql = $dbh->prepare("SELECT username, password FROM users WHERE email='$email' AND password='$password' LIMIT 1");
					   $sql->execute();
						
						$count = $sql->rowCount();
						
						if ($count < 0) {
							echo "No such user in our system";
						}else{ 
						       if($remember_me != ""){
								// CREATE THEIR SESSIONS AND COOKIES
								$_SESSION['userid'] = $db_id;
								$_SESSION['username'] = $db_username;
								$username =$_SESSION['username'];
								$userid =$_SESSION['userid'];
								setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
								// UPDATE THEIR "LASTLOGIN" FIELDS
								$sql =$dbh->prepare("UPDATE users SET lastlogin=now() WHERE username='$username' LIMIT 1");
					            $sql->execute();
					            //header("location: user.php");
					            header("location: userpage.php");
								//echo $db_username;
							    exit();

							   } else {
								    
								 // CREATE THEIR SESSIONS AND COOKIES
								$_SESSION['userid'] = $db_id;
								$_SESSION['username'] = $db_username;
								$username =$_SESSION['username'];
								$userid =$_SESSION['userid'];
								$sql =$dbh->prepare("UPDATE users SET lastlogin=now() WHERE username='$username' LIMIT 1");
					            $sql->execute();
					            //header("location: user.php");
					            header("location: userpage.php");
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