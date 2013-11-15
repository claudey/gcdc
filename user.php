<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GCDC</title>
        <link rel="stylesheet" href="assets/css/bs.css">
	    <link rel="stylesheet" href="assets/css/gcdc.css">
	    <link rel="stylesheet" href="assets/css/user.css">
    </head>
    <body>
        <div class="main">
	        <div class="navbar">
	            <div class="navbar navbar-default">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                            </button>
	                            <div class="navbar-header">
	                                <a class="navbar-brand" href="index.html"><img alt="GCDC" src="" /></a>
	                            </div>
	                            <div class="collapse navbar-responsive-collapse navbar-collapse">
	                                <ul class="nav nav-pills pull-right" id="nav">
	                                	<form class="navbar-form navbar-left" role="search">
                                	    	<div class="form-group">
                                	        	<input type="text" class="form-control" placeholder="Search">
                                	      	</div>
                                	      <button type="submit" class="btn btn-default">Submit</button>
                                	    </form>
	                                    <li class="dropdown">
	                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Officials<span class="caret"></span></a>
	                                        <ul class="dropdown-menu">
	                                            <li><a href="something.html">Something</a></li>
	                                            <li><a href="something.html">Something</a></li>
	                                            <li><a href="something.html">Something</a></li>
	                                        </ul>
	                                    </li>
	                                    <li>
	                                        <a href="#">Create Issue</a>
	                                    </li>
	                                    <li>
	                                        <a href="login.html">Signup/Login</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>          
	            </div>
	        </div>
        <!-- navbar ends -->

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

        <script src="assets/js/jquery-2.0.3.js"></script>
        <script src="assets/js/gcdc.js"></script>
    </body>
</html>