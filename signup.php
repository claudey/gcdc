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
	        
	        <?php
                @include("header.php");
            ?>

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
    <?php
        @include("footer.php")
    ?>
</html>