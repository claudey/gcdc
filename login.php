<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leaders Watch</title>
	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/bs.css">
	    <link rel="stylesheet" href="assets/css/gcdc.css">
	    <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body>
        <div class="container main">
	    <?php
            @include("header.php");
        ?>

        <div class="container">
        	<div class="row">
        		<div class="col-md-4">
        			<div class="login-text">image about the projects/quotes about it</div>
        				<form class="form-signin" action="process.php" method="post">
	                        <h2 class="form-signin-heading">Please sign up</h2>
	                        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus required><br>
	                        <input type="password" name="password" class="form-control" placeholder="Password" autofocus required><br>
	                        <input type="text" name="firstName" class="form-control" placeholder="Your First Name" required>
	                        <input type="text" name="lastName" class="form-control" placeholder="Your Last Name">
	                        <br>

	                        <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit">Sign Up</button>
	                    </form>
	                    <br>
        			</div>
        		<div class="col-md-4 col-md-offset-2">
        			<div class="sign-in">

        				<form class="form-signin" action="process.php" method="post">
	                        <h2 class="form-signin-heading">Sign In Here</h2>
	                        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus required><br>
	                        <input type="password" name="password" class="form-control" placeholder="Password" required>
	                        <label class="checkbox">
	                            <input type="checkbox" name="remember-me" value="remember-me"> Remember me
	                        </label>
	                        <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
	                    </form>

	                    <br>

	                    <form method="get" action="oauth/login">
	                        <button value="submit">Sign in with Google</button>
	                    	<p><a href="#"></a></p>
	                    </form>
        			</div>
        		</div>
        	</div>


        </div>  <!-- container ends here -->

    	<div class="footer">footer</div>

        <script src="assets/js/jquery-2.0.3.js"></script>
        <script src="assets/js/bs.min.js"></script>
        <script src="assets/js/gcdc.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45904698-1', 'gcdc2013-leaderswatchapp.appspot.com');
          ga('send', 'pageview');

        </script>
    </body>
    <?php
        @include("footer.php")
    ?>
</html>