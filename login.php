<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GCDC</title>
        <link rel="stylesheet" href="assets/css/bs.css">
	    <link rel="stylesheet" href="assets/css/gcdc.css">
    </head>
    <body>
        <div class="main">
	        <div class="navbar">
	            <div class="navbar navbar-default">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                            </button>
	                            <div class="navbar-header">
	                                <a class="navbar-brand" href="index.php"><img alt="GCDC" src="" /></a>
	                            </div>
	                            <div class="collapse navbar-responsive-collapse navbar-collapse">
	                                <ul class="nav nav-pills pull-right" id="nav">
	                                    <li class="dropdown">
	                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Officials<span class="caret"></span></a>
	                                        <ul class="dropdown-menu">
	                                            <li><a href="something.html">Something</a></li>
	                                            <li><a href="something.html">Something</a></li>
	                                            <li><a href="something.html">Something</a></li>
	                                        </ul>
	                                    </li>
	                                    <li>
	                                        <a href="#">Create Issue</a>
	                                    </li>
	                                    <li>
	                                        <a href="login.php">Signup/Login</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>          
	            </div>
	        </div>
        <!-- navbar ends -->

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
	                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
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
        <script src="assets/js/gcdc.js"></script>
    </body>
</html>