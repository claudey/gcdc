<nav class="container navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/"><i class="glyphicon glyphicon-eye-open"></i> Leaders Watch</a>
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
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Up / Login <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/login">Citizen</a></li>
					<li class="divider"></li>
					<li><a href="/signup">Official</a></li>
				</ul>
			</li>

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