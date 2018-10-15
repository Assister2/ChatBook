<?php
	// declaring variable to hold data
	$first_name = "";
	$last_name = "";
	$login_email = "";
	$login_password = "";
	$reg_email = "";
	$reg_password = "";
	$reg_confirm_password = "";
	$remember = "";
	$error_array = array();
	
	if (isset($_POST['reg_button'])){

		$first_name = strip_tags($_POST['signup_first_name']);
		$first_name = str_replace(' ', '', $first_name);
		$first_name = ucfirst(strtolower($first_name));
		$_SESSION['signup_first_name'] = $first_name;

		$last_name = strip_tags($_POST['signup_last_name']);
		$last_name = str_replace(' ', '', $last_name);
		$last_name = ucfirst(strtolower($last_name));
		$_SESSION['signup_last_name'] = $last_name;

		$email = strip_tags($_POST['signup_email']);
		$email = str_replace(' ', '', $email);
		$email = ucfirst(strtolower($email));
		$_SESSION['signup_email'] = $email;

		$password = strip_tags($_POST['signup_password']);
		$confirm_password = strip_tags($_POST['signup_confirm_password']);

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
			$email_check = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
			if (mysqli_num_rows($email_check) > 0) {
				array_push($error_array, "Email already in use");
			}
		} else {
			array_push($error_array, "Invalid email format");
		}

		if (strlen($first_name) > 25 || strlen($first_name) < 2) {
			array_push($error_array, "Your first name must be between 2 and 25 characters");
		}

		if (strlen($last_name) > 25 || strlen($last_name) < 2) {
			array_push($error_array, "Your last name must be between 2 and 25 characters");
		}

		if ($password != $confirm_password) {
			array_push($error_array, "Your passwords do not match");
		} elseif (preg_match('/[^A-Za-z0-9_@]/', $password)) {
				array_push($error_array, "Only allow [A-Za-z0-9_@]");
			}
		}

		if (strlen($password) > 15 || strlen($password) < 8) {
			array_push($error_array, "Your password must be betwen 8 to 15 characters");
		}

		if (empty($error_array)) {
			$password = md5($password);
			$username = strtolower($first_name . "_" . $last_name);
			$check_username_query = mysqli_query($conn, "SELECT username FROM users WHERE username like '$username'");
			$username = $username . mysqli_num_rows($check_username_query);
			$profile_pic = "assets/images/profile_pics/defaults/head_deep_blue.png";

			$query = mysqli_query($conn, "INSERT INTO users (user_id, first_name, last_name, username, email, password, signup_date, deactivate_account, friend_array, is_online) VALUES (DEFAULT, '$first_name', '$last_name', '$username', '$email', '$password', DEFAULT, DEFAULT, ',', DEFAULT)");
			array_push($error_array, "You're all set! Go ahead and login!");

			//Clear session variables
			$_SESSION['signup_first_name'] = "";
			$_SESSION['signup_last_name'] = "";
			$_SESSION['signup_email'] = "";
		}
	}
?>