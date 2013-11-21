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

              $username = isset($_POST['username']);
              //$username = isset($_POST['username']);
              $email = ($_POST['email']);
              $password = ($_POST['password']);
              
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