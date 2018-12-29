<?php
session_start();
require_once("./db/conexiondb.php");

if($_POST["btn-registrar"]){
  if($_POST["password"] === $_POST["password-confirm"]){
    $test = "funciona";
    echo "<script>alert('hola')</script>";
  }
}
?>
