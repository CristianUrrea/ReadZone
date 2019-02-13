<?php
    session_start();

    // VARIABLES
    $errors = array();
    $_SESSION['success'] = "";

    require_once("./db/conexiondb.php");

    // REGISTRO DE USUARIO
    if (isset($_POST['btn-registro'])) {
        //Inputs del formulario
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $useremail = mysqli_real_escape_string($conn, $_POST['useremail']);
        $userpass_1 = mysqli_real_escape_string($conn, $_POST['userpass_1']);
        $userpass_2 = mysqli_real_escape_string($conn, $_POST['userpass_2']);

        //Validacion de formulario:
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($useremail)) {
            array_push($errors, "Email is required");
        }
        if (empty($userpass_1)) {
            array_push($errors, "Password is required");
        }

        if ($userpass_1 != $userpass_2) {
            array_push($errors, "The two passwords do not match");
        }
        $query = "SELECT * FROM users WHERE nombre='$username' OR correo='$useremail'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) != $username) {
          array_push($errors, "El usuario o email existen, introdusca de nuevo los datos!");
        }

        //Registrar usuario si no encuntra errores en el formulario
        if (count($errors) == 0) {
            $userpass_encryp = md5($userpass_1);//encrypt the password before saving in the database
            $img_default = "./imagenes/perfiles/default.png";
            $query = "INSERT INTO users (nombre, correo, contrasena,imagen_perfil)
					  VALUES('$username', '$useremail', '$userpass_encryp','$img_default')";
            mysqli_query($conn, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }
    // filter_var($email, FILTER_VALIDATE_EMAIL)

    //LOGIN USUARIO

    if (isset($_POST['btn-div-login-form-inicio-sesion'])) {
        $username_login = mysqli_real_escape_string($conn, $_POST['username-login']);
        $userpass_login = mysqli_real_escape_string($conn, $_POST['userpass-login']);

        if (empty($username_login)) {
            array_push($errors, "Username is required");
        }
        if (empty($userpass_login)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $userpass_login_encryp = md5($userpass_login);
             // nombre='$username_login' OR
            $query = "SELECT * FROM users WHERE correo='$username_login' AND contrasena='$userpass_login_encryp'";
            $results = mysqli_query($conn, $query);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username_login;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
                if($username_login == 'Admin' || $username_login == 'admin@gmail.com' && $userpass_login_encryp == '123456'){
                  header('location: admin.php');
                }
            } else {
                array_push($errors, "Wrong username/email/password combination");
            }
        }
    }
