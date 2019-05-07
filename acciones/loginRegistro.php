<?php

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
        $resp = mysqli_real_escape_string($conn, $_POST['respuesta']);

        //Validacion de formulario:
        if (empty($username)) {
            array_push($errors, "¡Nombre de usuario necesario!");
        }
        if (empty($useremail)) {
            array_push($errors, "¡Email necesario!");
        }
        if (empty($userpass_1)) {
            array_push($errors, "¡Contraseña necesaria!");
        }
        if (empty($_POST['preguntas'])) {
            array_push($errors, "¡Seleccione una pregunta!");
        }
        if (empty($resp)) {
            array_push($errors, "¡La respuesta es necesaria!");
        }
        if (empty($_POST['termsconditions'])) {
            array_push($errors, "¡Acepte los terminos y condiciones!");
        }
        if ($userpass_1 != $userpass_2) {
            array_push($errors, "¡Las contraseñas no coinciden!");
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
            $pregunta = strip_tags($_POST['preguntas']);
            $respuesta = $_POST['respuesta'];
            $query = "INSERT INTO users (nombre, correo, contrasena, imagen_perfil, pregunta,respuesta)
					  VALUES('$username', '$useremail', '$userpass_encryp','$img_default','$pregunta','$respuesta')";
            mysqli_query($conn, $query);
            session_start();
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
            array_push($errors, "¡Email necesario!");
        }
        if (empty($userpass_login)) {
            array_push($errors, "¡Contraseña necesaria!");
        }

        if (count($errors) == 0) {
            $userpass_login_encryp = md5($userpass_login);
             // nombre='$username_login' OR
            $query = "SELECT * FROM users WHERE correo='$username_login' AND contrasena='$userpass_login_encryp'";
            $results = mysqli_query($conn, $query);

            if (mysqli_num_rows($results) == 1) {
              $query2 = mysqli_query($conn,"SELECT estado FROM users WHERE correo='$username_login' AND contrasena='$userpass_login_encryp'");
              if (mysqli_num_rows($query2) > 0) {
                while ($row2 = mysqli_fetch_assoc($query2)){
                  $estado= $row2['estado'];
                  if($estado == 1) {
                    $message = '¿Quiere usted recuperar su cuenta?';

                echo "<script type='text/javascript'> //not showing me this
                    if(confirm('$message')){
                      window.location.replace(\"activarCuenta.php\");

                    } else {
                      window.location.replace(\"index.php\");
                    }
                </script>";
                  } else {

                    $_SESSION['username'] = $username_login;
                    $_SESSION['success'] = "Yo  u are now logged in";
                    // header('location: index.php');
                    if($username_login == 'Admin' || $username_login == 'admin@gmail.com' && $userpass_login_encryp == '123456'){
                      // header('location: admin.php');
                    }
                  }


                }
              }

            } else {
                array_push($errors, "¡Email o contraseña incorrectas!");
            }
        }
    }
