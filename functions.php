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
				       $sql = mysql_query("SELECT id, email, password FROM users WHERE email='$email' AND password='$password' LIMIT 1");
				       // $sql = mysql_query("SELECT * FROM profile_data WHERE user_id='$user' LIMIT 1");
				       $count = mysql_num_rows($sql);

						if ($count < 1) {
							echo "No such user in our system first";
							// echo $count;
							 exit();
							
						}else{   
							   //echo $count;
							   //exit();

							       //details of a user who has log in or sign up
								  while($row = mysql_fetch_array($sql)){
										$user_id = $row['id'];
										$email = $row["email"];
										$password = $row["password"];
									}
							                               
                                // CREATE THEIR SESSIONS AND COOKIES
								$_SESSION['id'] = $row['id'];
								$_SESSION['useremail'] = $email;
								$_SESSION['password'] = $password;
								$useremail =$_SESSION['useremail'];
								$userpass =$_SESSION['password'];
								$userid = $_SESSION['id'];

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

               $result2 = mysql_query("INSERT INTO users (email,password,firstName,lastName,lastlogin) VALUES ('$email','$password','$firstName','$firstName',now()) ") OR die (mysql_error());
               if (!$result2) {
                    # code...
                    die('Could not insert into database: '.mysql_error());
               }else{
                     
                    // $_SESSION['id'] = mysql_insert_id();
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
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45904698-1', 'gcdc2013-leaderswatchapp.appspot.com');
  ga('send', 'pageview');

</script>

