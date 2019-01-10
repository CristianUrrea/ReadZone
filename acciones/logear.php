<?php
session_start();
require '../db/conexiondb.php';

if(isset($_POST['btn-div-login-form-inicio-sesion'])){
  // echo '<script language="javascript">alert("Has entrado al login")</script>';
  if ($_POST['useremail-login'] != "" && $_POST['userpass-login'] != "") {
    $useremail_login = $_POST['useremail-login'];
    $userpass_login = $_POST['userpass-login'];
    $encriptacion = sha1($userpass_login);
    $query = mysqli_query($conn, "SELECT * FROM Users WHERE correo_usuario='$useremail_login' AND contrasena_usuario='$encriptacion'");
    $count1 = mysqli_num_rows($query);

    if($count1 == 1){
      $_SESSION['inicio_sesion']='user';
      //echo '<script language="javascript">alert("Usuario correcto")</script>';
      header('location: ../index.php');
    } else {
      echo '<script language="javascript">alert("Contraseña o correo incorrectos")</script>';
      // header('location: ../biblioteca.php');
    }
  // } else {
  //   echo '<script language="javascript">alert("Rellena todos los campos")</script>';
  // }
}
}
?>
