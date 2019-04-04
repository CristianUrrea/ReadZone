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
 ?>
