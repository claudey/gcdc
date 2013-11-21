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
	    <link rel="stylesheet" href="assets/css/leader.css">
    </head>
    <body>
        <div class="container main">
	        
	        <?php
                @include("header.php");
            ?>

        	<div class="row">
        		<div class="col-md-8 col-md-offset-2">
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

					<div class="leader-page">
						<ul class="nav nav-pills office-list">
							<li class="active feedable mp"><a>Projects</a></li>
							<li class="feedable prez"><a>Issues</a></li>
						</ul>
					</div>


				<div class="feed">
        			<div class="fd feed-mp">
						<h3>Their Achievements</h3>
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
        				<h3>Issues concerning them</h3>
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