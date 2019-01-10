<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'readzonedb');

	// REGISTER USER
	if (isset($_POST['btn-registro'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$useremail = mysqli_real_escape_string($db, $_POST['useremail']);
		$userpass_1 = mysqli_real_escape_string($db, $_POST['userpass_1']);
		$userpass_2 = mysqli_real_escape_string($db, $_POST['userpass_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($useremail)) { array_push($errors, "Email is required"); }
		if (empty($userpass_1)) { array_push($errors, "Password is required"); }

		if ($userpass_1 != $userpass_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$userpass_encryp = md5($userpass_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (nombre, correo, contrasena)
					  VALUES('$username', '$useremail', '$userpass_encryp')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ...

	//LOGIN USER

	if (isset($_POST['btn-div-login-form-inicio-sesion'])) {
		$username_login = mysqli_real_escape_string($db, $_POST['username-login']);
		$userpass_login = mysqli_real_escape_string($db, $_POST['userpass-login']);

		if (empty($username_login)) {
			array_push($errors, "Username is required");
		}
		if (empty($userpass_login)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$userpass_login_encryp = md5($userpass_login);
			$query = "SELECT * FROM users WHERE nombre='$username_login' AND contrasena='$userpass_login_encryp'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username_login;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");

			}
		}
	}


?>
