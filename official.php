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
						<li class="active feedable min">
							<a>My Projects<span class="badge pull-right">0</span></a></li>
						<li class="feedable prez"><a>Profile</a></li>
					</ul>
				</div>
				<div class="feed col-md-9">
        			<p class="welcome">Welcome to Leaders Watch, interact with the electorate.</p>
        			<div class="fd feed-mp">
						<h3>Issues Concerning You</h3>
        				<div class="row news-item" id="3">
        					<div class="issue-container border-bottom">
                                <div class="content-header">
                                    <div class="content-title">
                                        <h5>The title of the issue</h5>
                                    </div>
                                    <div class="date-posted author">
                                        Posted by Albert Fiati on 12-December-2013
                                    </div>
                                </div>
                                <div class="content-content1">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. <a href="">Read more</a>
                                    </p>
                                </div>
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
	                    				<input type="text" name="title" class="form-control" placeholder="Project Title" required>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-8">
										<p>Project Description<p>
	                        			<textarea name="description" id="" cols="30" rows="10"  class="form-control" placeholder="Enter details about the project here" required></textarea>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-4">
										<p>Completion Date<p>
	                        			<input type="date" name="completionDate" class="form-control" required>
									</div>
								</div>

								<div class="row">
	                        			<div class="col-md-4"><button class="btn btn-lg btn-success btn-block" name="achievement" type="submit">Share achievement</button></div>
								</div>
							</fieldset>
                    	</form>
        			</div>
        			<div class="fd feed-min">
						<h3>Your Achievements</h3>
		
						<div class="achievement">
							<div class="panel panel-info">
								<div class="panel-heading">Title of Achievement</div>
								<div class="row panel-body">
									<div class="col-md-3"><img src="http://placehold.it/150x150" alt=""></div>
									<div class="col-md-9">
										<p>Details of the achievement are listed here: </p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro omnis esse deserunt! Placeat, itaque, repellendus, ipsa dolorum at reprehenderit explicabo facilis quod incidunt rem provident sapiente assumenda vel. Neque, cupiditate!</p>
									</div>
								</div>
							</div>

						</div>
        			</div>
        			<div class="fd feed-prez">
						<div class="row header">
							<div class="col-md-4 profile-pic"><img src="http://placehold.it/200x200" alt="official's image"></div>
							<div class="col-md-8 profile-text">
								<h2 class="row profile-name">Hon. Albert Fiati</h2>
								<div class="row profile-title">Minister of Code and Algorithms</div>
								<div class="row profile-stat">
									<div class="col-md-3">
										<h5>Projects</h5>
										<p>400</p>
									</div>
									<div class="col-md-3">
										<h5>Issues</h5>
										<p>38</p>
									</div>
									<div class="col-md-3">
										<h5>Followers</h5>
										<p>5483</p>
									</div>
								</div>
							</div>
						</div>
        			</div>

					<div class="box">
					<div class="blur"></div>
					</div>


				</div>
        	</div> <!-- row ends here -->
        </div>  <!-- container ends here -->

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