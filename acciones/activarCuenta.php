<?php
require_once("./db/conexiondb.php");


if(isset($_POST['btn-respuesta-submit'])){

  $email = $_SESSION['email'];
  $respuesta = $_POST['respuesta'];

  $query = mysqli_query($conn, "SELECT * FROM Users WHERE respuesta = '$respuesta' AND correo = '$email'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      $respuesta_correcta = $row['respuesta'];
      $_SESSION['respuesta'] = $respuesta_correcta;
      // echo $respuesta_correcta;
      $query = "UPDATE Users SET estado = 0 WHERE correo='$email' AND respuesta = '$respuesta'";
      mysqli_query($conn, $query);
      $_SESSION['username'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
  } else {
    echo '<script type="text/javascript">alert("La respuesta es incorrecta");</script>';
  }
}

 ?>
