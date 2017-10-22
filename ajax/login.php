<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make suer the user does not exist.
		$user_found = User::Find($email, true);

		if($user_found) {
			// User exists. try and sign them in
			// We can also check to see if they are able to log in.
			
			$user_id = (int) $user_found['user_id'];
			$hash = (String) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] = 'dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "密碼錯誤";
			}

		} else {
			$return['error'] = "此信箱並無申請帳號.";
		}

		// Make suer the user CAN be added AND is added

		//Return the proper information back to JavaScript to redirect us.

		echo json_encode($return, JSON_PRETTY_PRINT); exit();
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless
		exit('Invalide Url');
	}

?>