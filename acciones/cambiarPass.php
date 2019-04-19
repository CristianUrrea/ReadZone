<?php

require_once("./db/conexiondb.php");
$_SESSION['success'] = "";



if(isset($_POST['btn-cambiar-password-submit'])){
  $email = $_SESSION['email'];
  $respuesta = $_SESSION['respuesta'];
  $password = mysqli_real_escape_string($conn, $_POST['nueva-password']);
  $password = $_POST['nueva-password'];
  $password_encryp = md5($password);
  echo $email.' '.$respuesta.' '.$password;
  $query = "UPDATE Users SET contrasena ='$password_encryp' WHERE correo='$email' AND respuesta = '$respuesta'";
  mysqli_query($conn, $query);
  $_SESSION['username'] = $email;
  $_SESSION['success'] = "You are now logged in";
  header('location: index.php');

}
 ?>
