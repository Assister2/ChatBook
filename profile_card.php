<style type="text/css">

	/*Profile card*/
	.profile-card .profile-card-img-block{
	    float:left;
	    width:100%;
	    height:150px;
	    overflow:hidden;
	}
	.profile-card .profile-card-body{
	    position:relative;
	}
	.profile-card .profile {
	    position: absolute;
	    top: -62px;
	    left: 50%;
	    width:100px;
	    margin-left: -50px;
	}
	.profile-card .profile-card-img-block{
	    position:relative;
	}
	.profile-card .profile-card-img-block .btn-over-img{
		position: absolute;
		bottom: -10px;
    right: -25px;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	}
	.profile-card .profile-card-img-block > .profile-info-box{
	    position:absolute;
	    width:100%;
	    height:100%;
	    color:#fff;
	    padding:20px;
	    text-align:center;
	    font-size:14px;
	   -webkit-transition: 1s ease;
	    transition: 1s ease;
	    opacity:0;
	}
	.profile-card .profile-card-img-block:hover > .profile-info-box{
			border-radius: .25rem!important;
	    opacity:1;
	    -webkit-transition: all 1s ease;
	    transition: all 1s ease;
	}
</style>

<div class="col-md-4">
	<div class="card profile-card shadow p-3 mb-4 bg-white rounded">
    <div class="profile-card-img-block">
      <div class="profile-info-box bg-primary">
      	<?php echo $user->getBio(); ?>
      </div>
      <img class='rounded' src='<?php echo $user->getCoverPic(); ?>' style="height: 100%; width: 100%;">     
      <a href="#" class="btn-over-img btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
    </div>
    <div class="profile-card-body pt-5">
      <a href="profile.php?profile_username='<?php echo $user->getUsername(); ?>'" style="text-decoration: none;" class="text-primary"><img src="<?php echo $user->getProfilePic(); ?>" alt="profile-image" class="rounded profile border border-default"/>
      <center><h6><?php echo $user->getFirstAndLastName(); ?></h6></center></a>
      <table class="table">
      	<tr>
      		<td><i class="fa fa-users"></i> &nbsp;Friends</td>
      		<td><?php echo $user->getNumOfFriends(); ?></td>
      	</tr>
      	<tr>
      		<td><i class="fa fa-paperclip"></i> &nbsp;Posts</td>
      		<td id='totalpostsCounts'><?php echo $user->getNumOfPosts(); ?></td>
      	</tr>
      </table>
    </div>
  </div>
</div>