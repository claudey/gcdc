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
            try {
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