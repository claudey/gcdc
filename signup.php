<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leaders Watch</title>
	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/assets/css/bs.css">
	    <link rel="stylesheet" href="/assets/css/gcdc.css">
	    <link rel="stylesheet" href="/assets/css/official.css">
    </head>
    <body>
        <div class="container main">
	        
	        <?php
                @include("header.php");
            ?>

        <div class="container">
        	<div class="row">
				<div class="col-md-3">
				
				</div>
				<div class="feed col-md-9">
        			sign up

    				<form class="form-signin" action="/process" method="post">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus required><br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="password" name="verifyPassword" class="form-control" placeholder="Verify Password" required>
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                        <input type="date" name="dob" placeholder="Date of Birth">
                        <input type="text" name="office" placeholder="Your office eg. Minister">
                        <input type="text" name="title" placeholder="Your office eg. Title of office, eg. Agric, Okaikoi South, etc">
                        <input type="file">
                        <input type="text" placeholder="">
                        <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit">Sign up</button>
                    </form>
				</div>
        	</div> <!-- row ends here -->
        </div>  <!-- container ends here -->

    	<div class="footer">footer</div>

        <script src="/assets/js/jquery-2.0.3.js"></script>
        <script src="/assets/js/bs.min.js"></script>
		<script src="/assets/js/gcdc.js"></script>
    </body>
    <?php
        @include("footer.php")
    ?>
</html>