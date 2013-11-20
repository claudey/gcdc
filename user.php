<?php

      session_start();

      // echo $_SESSION['useremail'];
      // exit();

   // See if they are a logged in member by checking Session data
	if (isset($_SESSION['useremail'])) {
		// Put stored session variables into local php variable
	    $user = $_SESSION['useremail'];
	    $userpassword = $_SESSION['password'];

	    // echo $user;
	    // exit();



	} else {
		echo 'Please <a href="login.php">log in</a> to access your account';
	    exit(); 
	} 


?>

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
	    <link rel="stylesheet" href="assets/css/user.css">
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
	        		<a class="navbar-brand" href="#">Leaders Watch</a>
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

        		<nav class="offices">
        			<ul class="nav nav-pills office-list">
        			  <li class="active feedable mp"><a>MPs</a></li>
        			  <li class="feedable dce"><a>DCEs</a></li>
        			  <li class="feedable min"><a>Ministers</a></li>
        			  <li class="feedable prez"><a>The President</a></li>
        			</ul>
        		</nav>

        		<div class="feed col-md-8 col-md-offset-2">
        			<p class="welcome">Welcome to GCDC. Click on any of the tabs to see your feed.</p>
        			<div class="fd feed-mp">
        				This is the feed for members of parliament. It should show only when necessary

        				<div class="row news-item" id="3">
        					<div class="col-md-2">
        						an image to make the text less boring.
        					</div>
    						<div class="col-md-10">
	    						<p class="item-title">Water Issue</p>
	    						<div class="row">
	    							<div class="col-md-8">
	    								<p class="created-by">Creator</p>
	    								<p class="assigned-to">Assignee</p>
	    							</div>
	    							<div class="col-md-4 view-issue item-hover">
	    								<button class="btn btn-success">View Issue</button>
	    							</div>
	    						</div>
	    						<div class="votes item-hover">
	    							<div class="inl num-up-votes">243</div>
	    							<div class="inl num-down-votes">19</div>
	    							<div class="inl num-comments">104</div>
	    						</div>
	    						<div class="item-share item-hover"></div>
    						</div>
    					</div>
    				</div>
        			<div class="fd feed-dce">Feeds from DCEs are listed here. We like to keep it short</div>
        			<div class="fd feed-min">Minister will post their updates to subscribed users here. All short and sweet.</div>
        			<div class="fd feed-prez">The President sends out his greetings from the land of the flagstaffers.</div>
        		</div>
        	</div>
        </div>  <!-- container ends here -->

    	<div class="footer">footer</div>

        <script src="/assets/js/jquery-2.0.3.js"></script>
        <script src="/assets/js/bs.min.js"></script>
        <script src="/assets/js/gcdc.js"></script>
    </body>
</html>