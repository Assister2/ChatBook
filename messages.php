<!DOCTYPE html>
<html>
<head>
	<title>Chatbook - Messages</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include("header.php"); ?>


<style>
.list-group{
  max-height: 476px;
  overflow-y:scroll;
}
.list-group-item:active{
	background-color:#f1f1f1;
}
::-webkit-scrollbar {
	width: 5px;
}
::-webkit-scrollbar-track {
	background: #f1f1f1; 
}
::-webkit-scrollbar-thumb {
	background: #888; 
}
::-webkit-scrollbar-thumb:hover {
	background: #555; 
}
.has-search .form-control {
    padding-left: 2.375rem;
}
.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.resize-box{
	max-width: 200px;
}
</style>
	<div role="main" class="container">
		<div class="row">
			<div class="col-md-4">
				<div class=" border border-default">
					<div class="form-group has-search">
				    <span class="fa fa-search form-control-feedback"></span>
				    <input type="text" class="form-control" placeholder="Search">
				  </div>
					<div class="list-group">
					  <li class="list-group-item list-group-item-action active">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					  <li class="list-group-item list-group-item-action">
					  	<div class="media">
							  <img class="mr-1" src="assets/images/profile_pics/arpit_gupta15415322931541581420.png" style="width:40px;border-radius:50%;" alt="username">
							  <div class="media-body">
							  	<div class="float-left resize-box">
							  		<h6 class="m-0 d-inline-block text-truncate" style="max-width: inherit;">Jitendra Sharma</h6><br/>
							  		<p class="m-0 d-inline-block text-truncate"  style="max-width: inherit;">hi friend...</p>
							  	</div>
							  	<div class="float-right">
							    	<span class="float-right badge badge-success badge-pill">12</span><br/>
							    	<small class="float-right"><em>12d ago</em></small>
							  	</div>
							  </div>
							</div>
					  </li>
					</div>
				</div>
				<br>
			</div>
			<div class="col-md-8">
				<iframe src="message_card.php?user_to=arpit_gupta1541532293" class="border border-default" style="height:514px;width:100%;">
					
				</iframe>
			</div>
		</div><br/>
	</div>
</body>
</html>
<script>
	window.onresize = function() {
	  $('.resize-box').css({
	    "maxWidth": $('.resize-box').parent().width() - 50 + "px"
	  });
	}
</script>