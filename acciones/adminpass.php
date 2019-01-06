<?php
if(isset($_POST["btn-div-login-form-inicio-sesion-2"])){
  if($_POST["usuario"] == "admin" && $_POST["password"] == "12345"){
      header('location: admin.php');
  }

}
 ?>
