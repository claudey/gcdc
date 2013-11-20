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
						<li><a href="#">Sign up/Login</a></li>

	        		</ul>
	        	</div><!-- /.navbar-collapse -->
	        </nav>

        <div class="container">
        	<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked office-list">
						<li><button class="btn-lg btn-success">Create project</button></li>
						<li class="active feedable mp"><a>Issues</a></li>
						<li class="feedable prez"><a>Profile</a></li>
					</ul>
				</div>
				<div class="feed col-md-9">
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
        			<div class="fd feed-prez">
						<div class="row header">
							<div class="col-md-4 profile-pic"><img src="http://placehold.it/200x200" alt="official's image"></div>
							<div class="col-md-8 profile-text">
								<div class="profile-name">Hon. Albert Fiati</div>
								<div class="profile-title">Minister of Code and Algorithms</div>
								<div class="profile-stat">
									<p>projects</p>
									<p>Conversations</p>
									<p>followers</p>
								</div>
							</div>
						</div>
        			</div>
				</div>
        	</div> <!-- row ends here -->
        </div>  <!-- container ends here -->

    	<div class="footer">footer</div>

        <script src="/assets/js/jquery-2.0.3.js"></script>
        <script src="/assets/js/bs.min.js"></script>
		<script src="/assets/js/gcdc.js"></script>
    </body>
</html>