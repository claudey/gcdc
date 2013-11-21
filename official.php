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
						<li><a href="#">Sign up/Login</a></li>

	        		</ul>
	        	</div><!-- /.navbar-collapse -->
	        </nav>

        	<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked office-list">
						<li><a class="btn-lg btn-success feedable dce">Create project</a></li>
						<li><p><br></p></li>
						<li class="active feedable mp"><a>Issues</a></li>
						<li class="feedable prez"><a>Profile</a></li>
					</ul>
				</div>
				<div class="feed col-md-9">
        			<p class="welcome">Welcome to Leaders Watch, interact with the electorate.</p>
        			<div class="fd feed-mp">
        				A feed where all issues concerning this official will be displayed.

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
        			<div class="fd feed-dce">

						<form class="form-signin" action="/process" method="post">
                        <h2 class="form-signin-heading">Share Your Achievements</h2>
						<fieldset>
							<div class="row">
								<div class="form-group col-md-8">
									<p>Project Title<p>
                    				<input type="text" name="fname" class="form-control" placeholder="Project Title" required>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-8">
									<p>Project Description<p>
                        			<textarea name="" id="" cols="30" rows="10"  class="form-control" placeholder="Enter details about the project here" required></textarea>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-4">
									<p>Completion Date<p>
                        			<input type="date" name="completionDate" class="form-control" required>
								</div>
							</div>

							<div class="row">
                        			<div class="col-md-4"><button class="btn btn-lg btn-success btn-block" name="signup" type="submit">Share achievement</button></div>
							</div>
						</fieldset>
                    </form>

        			</div>
        			<div class="fd feed-min">Minister will post their updates to subscribed users here. All short and sweet.</div>
        			<div class="fd feed-prez">
						<div class="row header">
							<div class="col-md-4 profile-pic"><img src="http://placehold.it/200x200" alt="official's image"></div>
							<div class="col-md-8 profile-text">
								<div class="profile-name">Hon. Albert Fiati</div>
								<div class="profile-title">Minister of Code and Algorithms</div>
								<div class="row profile-stat">
									<div class="col-md-2 col-md-offset-2">
										<p>projects</p>
										<span>400</span>
									</div>
									<div class="col-md-2">
										<p>Issues</p>
										<span>38</span>
									</div>
									<div class="col-md-2">
										<p>followers</p>
										<span>5483</span>
									</div>
								</div>
							</div>
						</div>
        			</div>
				</div>
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