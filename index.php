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
	    <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>       
        <nav class="container navbar navbar-inverse navbar-fixed-top" role="navigation">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#"><i class="glyphicon glyphicon-eye-open"></i> Leaders Watch</a>
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
					<li><a href="#" data-toggle="modal" data-target="#myModal">Create Issue</a></li>
					<li><a href="#">Sign up / Login</a></li>

        		</ul>
        	</div><!-- /.navbar-collapse -->
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<h4 class="modal-title" id="myModalLabel">Create Issue</h4>
        			</div>
        			<div class="modal-body">
        				<form class="form-horizontal" role="form">
        					<div class="form-group">
        					<label class="col-sm-2 control-label">Title</label>
        						<div class="col-sm-10">
        							<input type="email" class="form-control" placeholder="Title of the issue">
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-sm-2 control-label">Content</label>
        						<div class="col-sm-10">
        							 <textarea class="form-control" rows="5" placeholder="Say it as it is."></textarea>
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-sm-2 control-label">Assignee</label>
        						<div class="col-sm-10">
        							<div class="input-group">
        								<div class="input-group-btn">
        									<button type="button" class="btn btn-default dropdown-toggle office" data-toggle="dropdown">Office <span class="caret"></span></button>
        									<ul class="dropdown-menu">
        										<li class="off"><a href="#">MP</a></li>
        										<li class="off"><a href="#">DCE</a></li>
        										<li class="off"><a href="#">Minister</a></li>
        										<li class="divider off"></li>
        										<li class="off"><a href="#">The President</a></li>
        									</ul>
        								</div><!-- /btn-group -->
        								<input type="text" class="form-control" placeholder="Please enter a name or title">
        							</div><!-- /input-group -->
        						</div><!-- /.col-lg-6 -->
        					</div>
        				</form>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Create an Issue</button>
        			</div>
        		</div><!-- /.modal-content -->
        	</div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
	    
        <div class="banner">
        	<div class="tagline">
        		Holding Politicaly Elected Leaders Accountable
        	</div>
    	</div>

        <div class="container main">
			<!-- new feed -->
			<div class="row feed">
			    <div class="col-lg-4 feed-item">
			    	<h5 class="center feed-head">Most Recent Issues</h5>
			    	<div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue one
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue two
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue three
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>	
				</div>
			    <div class="col-lg-4 feed-item">
			    	<h5 class="center feed-head">Most Read Issues</h5>
			    	<div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue one
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue two
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue three
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>	
				</div>
			    <div class="col-lg-4 feed-item">
			    	<h5 class="center feed-head">Most Voted Issues</h5>
			    	<div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue one
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue two
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="feed-item-list">
			    			<div class="feed-item-title">
			    				Title of issue three
			    				</br>
			    				<span class="author right">Authored By: Juveniel</span>
			    			</div>
			    			<div class="social-media-buttons">			    				
			    				<div class="row">
			    					<div class="col-lg-6">
				    					<i class="glyphicon glyphicon-thumbs-up thumb"></i> <span class="count">345</span> &nbsp;
				    					<i class="glyphicon glyphicon-thumbs-down thumb"></i> <span class="count">35</span>
				    				</div>
				    				<div class="col-lg-6">
				    					<img src="assets/img/facebook-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Twitter-Icon.png" class="pull-right padding-right">
				    					<img src="assets/img/Google-plus-icon.png" class="pull-right padding-right">
				    				</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>	
				</div>
			</div>
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
