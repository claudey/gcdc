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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45904698-1', 'gcdc2013-leaderswatchapp.appspot.com');
  ga('send', 'pageview');

</script>