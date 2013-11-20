<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GCDC</title>
	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/bs.css">
	    <link rel="stylesheet" href="assets/css/gcdc.css">
	    <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body>
        <div class="container main">
	        <nav class="navbar navbar-default" role="navigation">
	        	<!-- Brand and toggle get grouped for better mobile display -->
	        	<div class="navbar-header">
	        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        			<span class="sr-only">Toggle navigation</span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        		</button>
	        		<a class="navbar-brand" href="#">Leader Watch</a>
	        	</div>

	        	<!-- Collect the nav links, forms, and other content for toggling -->
	        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        		
	        		<ul class="nav navbar-nav navbar-right">

	        			<li class="dropdown">
	        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	        				<ul class="dropdown-menu">
	        					<li><a href="/follow#mp">MPs</a></li>
	        					<li><a href="/follow#dce">DCEs</a></li>
	        					<li><a href="/follow#min">Ministers</a></li>
	        					<li class="divider"></li>
	        					<li><a href="/follow#prez">The President</a></li>
	        				</ul>
	        			</li>
						<li><a href="#">Create Issue</a></li>
						<li><a href="#">Sign up / Login</a></li>

	        		</ul>
	        	</div><!-- /.navbar-collapse -->
	        </nav>

        <div class="container">
        	<div class="row">
        		<div class="col-md-6"><div class="login-text">image about the projects/quotes about it</div></div>
        		<div class="col-md-4">
        			<div class="sign-in">
        				<form class="form-signin" action="process.php" method="post">
	                        <h2 class="form-signin-heading">Please sign in</h2>
	                        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus required><br>
	                        <input type="password" name="password" class="form-control" placeholder="Password" required>
	                        <label class="checkbox">
	                            <input type="checkbox" name="remember-me" value="remember-me"> Remember me
	                        </label>
	                        <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
	                    </form>

	                    <br>

	                    <form method="get" action="oauth/login_with_google.php">
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
    </body>
</html>