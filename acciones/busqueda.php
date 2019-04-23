<?php
require_once("./db/conexiondb.php");

if (isset($_POST['btn-aplicar-cambios'])) {
  // echo '<script type="text/javascript">alert("Hola")</script>';
  if(!empty($_POST['gender_list'])){
  // Loop to store and display values of individual checked checkbox.
    foreach($_POST['gender_list'] as $selected){
      echo $selected."</br>";
    }
  }
}

if(isset($_POST['input-div-nav-search'])){
  // echo '<script type="text/javascript">alert("funciona")<script>';
  $text = mysqli_real_escape_string($conn, $_POST['input-div-nav-search']);
  // echo '<script type="text/javascript">alert("asdas")</script>';
  $cookie_name = "titulo_libro";
  $cookie_value = $text;
  setcookie($cookie_name, $cookie_value, time() + (1), "/"); // 86400 = 1 day

  header('location: biblioteca.php');
}
 ?>
