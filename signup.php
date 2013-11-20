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
	    <link rel="stylesheet" href="assets/css/official.css">
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
				<div class="col-md-3">
				
				</div>
				<div class="feed col-md-9">
        			sign up

    				<form class="form-signin" action="process.php" method="post">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus required><br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="password" name="password" class="form-control" placeholder="Verify Password" required>
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                        <input type="date" name="dob" placeholder="Date of Birth">
                        <input type="text" name="office" placeholder="Your office eg. Minister">
                        <input type="text" name="title" placeholder="Your office eg. Title of office, eg. Agric, Okaikoi South, etc">
                        <input type="file">
                        <input type="text" placegolder="">
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign up</button>
                    </form>
				</div>
        	</div> <!-- row ends here -->
        </div>  <!-- container ends here -->

    	<div class="footer">footer</div>

        <script src="assets/js/jquery-2.0.3.js"></script>
        <script src="assets/js/bs.min.js"></script>
		<script src="assets/js/gcdc.js"></script>
    </body>
</html>