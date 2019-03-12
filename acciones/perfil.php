<?php

// VARIABLES
$errors = array();
$_SESSION['success'] = "";
require_once("./db/conexiondb.php");
if (isset($_SESSION['username'])) {
  $user = $_SESSION['username'];
  // INSERTAR DATOS DE PERFIL
  if (isset($_POST['btn-perfil'])) {
    // echo ' <script type="text/javascript">alert("BOTON")</script>';
    // // $username_profile = mysqli_real_escape_string($conn, $_POST['nombre_usuario_perfil']);
    // // $username_profile = mysqli_real_escape_string($conn, $_POST['nombre_usuario_perfil']);

    $birthday_date = $_POST['fecha-cumpleanos'];

    $date_birth = strtr($birthday_date,'/','-');
    // $birthday_date = strtotime($_POST['fecha-cumpleanos']);
    $date = date("Y-m-d", strtotime($date_birth));

    $query = "UPDATE Users SET fecha_cumpleanos='$date' WHERE correo='$user'";
    mysqli_query($conn, $query);

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
}
