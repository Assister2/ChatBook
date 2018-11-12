<?php
	if(isset($_POST['last_request_id'])){
		require '../config/config.php';
		require 'classes/FriendRequest.php';
		require 'classes/User.php';
		define('LIMIT', 10);
		$user = new User($conn, $_SESSION['username']);
		$request = new FriendRequest($conn, $_SESSION['username']);
		$data_query = $request->getAllFriendRequests($_POST['last_request_id'],LIMIT);
		$str = "";
		if (mysqli_num_rows($data_query) == 0 and $_POST['last_request_id'] == 0) {
			$str .= "<input type='hidden' id='noMoreRequests' value='true'><div class='card'><p class='text-muted p-3 m-2 bg-light'> 
									No Requests</p></div>";
		} elseif (mysqli_num_rows($data_query) == 0) {
			$str .= "<input type='hidden' id='noMoreRequests' value='true'><div class='card'><p class='text-muted p-3 m-2 bg-light'> No More Requests </p></div>";
		} else {
			while ($row = mysqli_fetch_array($data_query)) {
				$request_id = $row['request_id'];
				$user_from = $row['user_from'];
				$user_to = $row['user_to'];
				$request_time = $row['request_time'];
				$last_request_id =$request_id;
				$user_from_obj = new User($conn, $user_from);

				if ($user_to == $user->getUsername()){
					$user_from_obj = new User($conn, $user_from);
					$str .= "<div id='" . $request_id . "' class='p-0 col-12 request mb-3 card'>
		                <div class='card-body media p-3'>
			                <a href='profile.php?profile_username=". $user_from ."' class='text-primary'><img src='" . $user_from_obj->getProfilePic() . "' alt='profile-image' class='padding-5-circle' style='width:60px;height:60px;'/>
		                  <div class='media-body pl-1'>
		                    <h6>" . $user_from_obj->getFirstAndLastName() . "</h6></a><small class='text-muted'>
		                    <em>" . $user->getMutualFriendsCount($user_from) . " mutual friends</em></small>
		                  </div>
		                  <div class='form-row' style='width:30%;'>
		                    <div class='col-xs-6'>
		                      <button id='" . $request_id . "' class='btn btn-sm btn-success' value='" . $user_from . "' onclick='acceptRequest(this);deleteRequest(this)' value='1'>Accept</button>
		                    </div>
		                    <div class='col-xs-6'>
		                      <button id='" . $request_id . "' class='btn btn-sm width-60 btn-danger' value='" . $user_from . "' onclick='rejectRequest(this);deleteRequest(this);'> Reject</button>
		                    </div>
		                  </div>
		                </div>
			            </div>";
				} elseif ($user_from == $user->getUsername()) {
					$user_to_obj = new User($conn, $user_to);
					$str .= "<div id='" . $row['request_id'] . "' class='p-0 mb-3 col-12 request card'>
		                <div class='card-body media p-3'>
			                <a href='profile.php?profile_username=". $user_to ."' class='text-primary'><img src='" . $user_to_obj->getProfilePic() . "' alt='profile-image' class='padding-5-circle' style='width:60px;height:60px;'/>
		                  <div class='media-body pl-1'>
		                    <h6>" . $user_to_obj->getFirstAndLastName() . "</h6></a><small class='text-muted'>
		                    <em>" . $user->getMutualFriendsCount($user_to) . " mutual friends</em></small>
		                  </div>
		                  <div class='form-row' style='width:30%;'>
		                    <div class='col-xs-6'>
		                      <button id='" . $user_to . "' class='btn btn-warning btn-sm addfriend' onclick='friend(this)' value='2' onmouseleave='friendAction(this)'>Cancel Request</button>
		                    </div>
		                  </div>
		                </div>
			            </div>";
				}
			}
			if ($last_request_id == $_POST['last_request_id']){
				$str .= "<input type='hidden' id='noMoreRequests' value='true'><div class='card'><p class='text-muted p-3 m-2 bg-light'> No More Requests </p></div>";
			} else {
				$str .= "<input type='hidden' id='noMoreRequests' value='false'>";
			}
		}
		echo $str;
	}
?>