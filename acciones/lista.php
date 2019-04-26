<?php
require_once("./db/conexiondb.php");

$user = $_SESSION['username'];
if (isset($_POST['btn-nueva-lista'])) {
  // echo ' <script type="text/javascript">alert("hola")</script>';
// echo $user;
  $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      if (isset($_SESSION['username'])) {
        $lista_nombre = $_POST['nombre_lista'];
        $id_user = $row['id_user'];
        // echo $id_user;
        // echo $lista_nombre;
        // echo ' <script type="text/javascript">alert("hola")</script>';
        // echo $user;

        $query2 = "INSERT INTO List_books (nombre_lista,id_user) VALUES('$lista_nombre','$id_user')";
        mysqli_query($conn, $query2);
      }
    }
  }
}
  if(empty($_REQUEST['nombre_lista'])){

  } else {
    $nombre_lista = $_REQUEST['nombre_lista'];
    if (strlen($nombre_lista) > 0) {
          if(empty( $_GET['nombre_lista'])){
              }else{
                $name_list = $_GET['nombre_lista'];
                $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $id_user = $row['id_user'];

                $query6 = mysqli_query($conn, "SELECT * FROM list_books WHERE id_user = '$id_user' AND nombre_lista = '$name_list'");
                if (mysqli_num_rows($query6) > 0) {
                  $row6 = mysqli_fetch_assoc($query6);
                    $id_user_list = $row6['id_user'];
                    $id_book_list = $row6['id_book'];
                    $query7 = mysqli_query($conn, "DELETE FROM list_books WHERE id_user = '$id_user_list' AND nombre_lista = '$name_list'");
                    mysqli_query($conn, $query7);
                }
              }

        }
        }
    } else {
      echo "es null";
    }
  }
  if(isset($_POST['btn-nueva-lista-update'])){
      // echo ' <script type="text/javascript">alert("update")</script>';
      // $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      // if (mysqli_num_rows($query) > 0) {
      //   while ($row = mysqli_fetch_assoc($query)) {
      //     if (isset($_SESSION['username'])) {
      //       $lista_nombre_update = $_POST['nombre_lista_update'];
      //       $id_user = $row['id_user'];
      //       // echo $id_user;
      //       // echo $lista_nombre;
      //       // echo ' <script type="text/javascript">alert("hola")</script>';
      //       // echo $user;
      //
      //       $query = "UPDATE List_books SET nombre_lista = '$lista_nombre_update' WHERE id_user = '$id_user'";
      //       mysqli_query($conn, $query);
      //     }
      //   }
      // }
  }

// }
// if(isset($_GET['a-delete-list-profile'])){
//   echo ' <script type="text/javascript">alert("eliminado")</script>';
//   $nombre_lista = $_REQUEST['nombre_lista'];
//   $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
//   if (mysqli_num_rows($query) > 0) {
//     while ($row = mysqli_fetch_assoc($query)) {
//       $id_user = $row['id_user'];
//
//   $query6 = mysqli_query($conn, "SELECT * FROM list_books WHERE id_user = '$id_user' AND nombre_lista = '$nombre_lista'");
//   if (mysqli_num_rows($query6) > 0) {
//     $row6 = mysqli_fetch_assoc($query6);
//       $id_user_list = $row6['id_user'];
//       $id_book_list = $row6['id_book'];
//       $query7 = mysqli_query($conn, "DELETE FROM list_books WHERE id_user = '$id_user_list' AND nombre_lista = '$nombre_lista'");
//       mysqli_query($conn, $query7);
//   }
// }
// }
//   }
 ?>
