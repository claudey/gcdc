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
        <div class="container main" id="wrap">
	        
	        <?php
                @include("header.php");
            ?>

        	<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked office-list">
						<li><a class="btn-lg btn-success feedable dce">Create project</a></li>
						<li><p><br></p></li>
						<li class="active feedable mp"><a>Issues</a></li>
						<li class="active feedable min"><a>My Projects</a></li>
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
        			<div class="fd feed-min">
						<h3>Your Achievements</h3>
        			</div>
        			<div class="fd feed-prez">
						<div class="row header">
							<!-- <div class="blur"> -->
								<div class="col-md-4 profile-pic"><img src="http://placehold.it/200x200" alt="official's image"></div>
								<div class="col-md-8 profile-text">
									<div class="profile-name">Hon. Albert Fiati</div>
									<div class="profile-title">Minister of Code and Algorithms</div>
									<div class="row profile-stat">
										<div class="col-md-3 col-md-offset-1">
											<span>Projects</span>
											<p>400</p>
										</div>
										<div class="col-md-3">
											<span>Issues</span>
											<p>38</p>
										</div>
										<div class="col-md-3">
											<span>Followers</span>
											<p>5483</p>
										</div>
									</div>
								<!-- </div> -->
							</div>
						</div>
        			</div>

					<div class="box">
					<div class="blur"></div>
					</div>


				</div>
        	</div> <!-- row ends here -->
        </div>  <!-- container ends here -->

    	<div class="footer container">
			<p class="pull-left">Leader Watch, <script>document.write(new Date().getFullYear())</script></p>
			<p class="pull-right">About us, Terms of Use, plus 1 link</p>
    	</div>

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