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

              signup($email,$password,$firstName,$lastName);
           }elseif (isset($_POST['create_issue'])) {
             $issueTitle = $_POST['issueTitle'];
             $issueDescription = $_POST['issueDescription'];
             $issueAssignee = $_POST['issueAssignee'];
             createIssue($issueTitle,$issueDescription,$issueAssignee);

           }elseif (isset($_POST['achievement'])) {
             # code...
              $title = $_POST['title'];
              $description = $_POST['description'];
              $completionDate = $_POST['completionDate'];


              createAchievement($title,$description,$completionDate);
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
