<?php
session_start();
require '../db/conexiondb.php"';

if(isset($_POST['btn-registro']) && $_POST['useremail'] != "" && $_POST['username'] != "" && $_POST['userpass'] != ""){
  $useremail = $_POST['useremail'];
  $username = $_POST['username'];
  $userpass = $_POST['userpass'];
  $encriptarpass = sha1($userpass);

  $query1 = mysqli_query($conn, "SELECT * FROM Users WHERE correo_usuario='$useremail'");
  $query2 = mysqli_query($conn, "SELECT * FROM Users WHERE nombre_usuario='$username'");

  $contar1 = mysqli_num_rows($query1);
  $contar2 = mysqli_num_rows($query2);

  if($contar1 == 1){
    echo '<script language="javascript">alert("La dirección de correo ya esta registrada")</script>';
    header('location: ../registro.php');

  } else if($contar2 == 2){
    echo '<script language="javascript">alert("El nombre de usuario ya esta registrado")</script>';
    header('location: ../registro.php');

  } else {
    echo '<script language="javascript">alert("Usuario registrado")</script>';
    mysqli_query($conn, "INSERT INTO Users (id_user, correo_usuario, nombre_usuario, contrasena_usuario) VALUES ('','$useremail','$username','$encriptarpass')");
    $_SESSION['inicio_sesion']='user';
    header('location: ../index.php');
  }
}
?>
