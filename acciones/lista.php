<?php
require_once("./db/conexiondb.php");

$user = $_SESSION['username'];
if (isset($_POST['btn-nueva-lista'])) {
  $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE nombre = '$user'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      if (isset($_SESSION['username'])) {
        $lista_nombre = $_POST['nombre_lista'];
        $id_user = $row['id_user'];

        // echo ' <script type="text/javascript">alert("hola")</script>';
        // echo $user;

        $query2 = "INSERT INTO List_books (nombre_lista,id_user) VALUES('$lista_nombre','$id_user')";
        mysqli_query($conn, $query2);
      }
    }
  }
}
 ?>
