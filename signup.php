<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leaders Watch | Sign Up</title>
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
	        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Officials <b class="caret"></b></a>
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
				<div class="col-md-2">
				
				</div>
				<div class="col-md-7">
    				<form class="form-signin" action="/process" method="post">
                        <h2 class="form-signin-heading">Sign Up Here</h2>
						<fieldset>
							<div class="row">
								<div class="form-group col-md-6">
									<p>First Name<p>
                    				<input type="text" name="fname" class="form-control" placeholder="First Name" required>
								</div>
								<div class="form-group col-md-6">
									<p>Last Name<p>
                    				<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-8">
									<p>Email Address<p>
                        			<input type="text" name="email" class="form-control" placeholder="Email address" required>
								</div>
								<div class="col-md-4">
									<p>Date of Birth</p>
                        			<input type="date" name="dob" class="form-control" placeholder="Date of Birth">
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-6">
									<p>Password<p>
                        			<input type="password" name="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group col-md-6">
									<p>Verify Password<p>
                       				<input type="password" name="verifyPassword" class="form-control" placeholder="Verify Password" required>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-6">
									<p>Position<p>
                        			<select class="form-control">
                        			  <option>Member of Parliament</option>
                        			  <option>District Chief Executive</option>
                        			  <option>Minister</option>
                        			  <option>The President</option>
                        			</select>
								</div>
								<div class="form-group col-md-6">
									<p>Office<p>
                       				<input type="text" name="title" class="form-control" placeholder="eg. Agric, Okaikoi South, etc">
								</div>
							</div>			

							<div class="row">
                        		<div class="col-md-6">
                        			<input type="file">
                        		</div>
								<div class="col-md-6">
                        			<button class="btn btn-lg btn-success btn-block" name="signup" type="submit">Sign up</button>
								</div>
							</div>

						</fieldset>
                    </form>
                </div>


					<!-- </form> -->

        	</div> <!-- row ends here -->
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
</html>