<style media="screen">
#toast-container {
  top: auto !important;
  left: auto !important;
  bottom: 10%;
  left:7%;
}
</style>
<?php

// VARIABLES
require_once("./db/conexiondb.php");

if (isset($_SESSION['username'])) {


  $user = $_SESSION['username'];
  // INSERTAR DATOS DE PERFIL
  if (isset($_POST['btn-perfil'])) {
    // echo ' <script type="text/javascript">alert("BOTON")</script>';
    $username_profile = $_POST['nombre_usuario_perfil'];
    // // $username_profile = mysqli_real_escape_string($conn, $_POST['nombre_usuario_perfil']);

    $birthday_date = $_POST['fecha-cumpleanos'];

    $date_birth = strtr($birthday_date,'/','-');
    // $birthday_date = strtotime($_POST['fecha-cumpleanos']);
    $date = date("Y-m-d", strtotime($date_birth));

    $query = "UPDATE Users SET fecha_cumpleanos='$date', nombre = '$username_profile' WHERE correo='$user'";
    mysqli_query($conn, $query);

    // header('location: nav.php');

    // // $gender_user = $_POST['genero'];
    //
    // // if ($gender_user == 'hombre') {
    //   $query = "UPDATE Users SET sexo='$gender_user', imagen_perfil='$destino' WHERE nombre='$user'";
    //   mysqli_query($conn, $query);
    //   // echo ' <script type="text/javascript">alert("hombre")</script>';
    // } else if($gender_user == 'mujer'){
    //   $query = "UPDATE Users SET sexo='$gender_user', imagen_perfil='$destino' WHERE nombre='$user'";
    //   mysqli_query($conn, $query);
    //   // echo ' <script type="text/javascript">alert("mujer")</script>';
    //
    //   // echo $gender_user;
    //   // echo ' <script type="text/javascript">alert("'+$gender_user+'")</script>';
    // } else if (empty($gender_user)) {
    //   echo ' <script type="text/javascript">alert("Elije un genero")</script>';
    // }
    // echo $birthday_date;
  }

  if (isset($_POST['btn-update-image'])) {
    $archivo = $_FILES['imagen-perfil-user']['tmp_name'];
    $destino = "./imagenes/perfiles/".$_FILES['imagen-perfil-user']['name'];
    move_uploaded_file($archivo, $destino);

    $query = "UPDATE Users SET imagen_perfil='$destino' WHERE correo='$user'";
    mysqli_query($conn, $query);
  }
  if(isset($_POST['btn-baja-usuario'])){
    $password_confirmar = mysqli_real_escape_string($conn, $_POST['password-confirmar-dar-baja']);
    if(empty($password_confirmar)){
      // echo "vacio";
      echo '<script type="text/javascript">M.toast({html: `¡Introduca dato!`, classes: `red`, inDuration: 1000, displayLength: 2000})</script>';

    } else {
      $userpass_encryp = md5($password_confirmar);
      // echo $user.' || '.$userpass_encryp.' || '.$password_confirmar;

      $de_baja = true;
      $query = mysqli_query($conn,"SELECT * FROM users WHERE correo='$user' AND contrasena = '$userpass_encryp'");
      if (mysqli_num_rows($query) == 1) {
        while ($row = mysqli_fetch_assoc($query)){


          //
          $query2 = "UPDATE Users SET estado = '$de_baja' WHERE correo = '$user'";
          mysqli_query($conn, $query2);
          // header("location: index.php");
          session_destroy();
          echo "<script type='text/javascript'>window.location.replace(\"index.php\");</script>";


        }
      } else {
        echo '<script type="text/javascript">M.toast({html: `¡Password incorrecta!`, classes: `red`, inDuration: 1000, displayLength: 2000})</script>';

      }
    }
  }
} else {
  // header('location: index.php');

}
