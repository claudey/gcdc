<?php
	    session_start();
	   /* 
	Created By Aliu 
	-----------------------November 20, 2013----------------------- 
	*/
		session_destroy(); 
		if(!isset($_SESSION['id'])){ 
		   //$msg = "You are now logged out";
			header("Location:index.php");
		} else 
		{
			echo "<h2>Could not log you out</h2>";
		} 
?>

<!--
<html>
<link rel="stylesheet" type="text/css" href="css/all.css">
<body>
<?php //echo "$msg"; ?><br>
<p><a href="index.php">Click here</a> to return to our home page </p>
</body>
</html>-->