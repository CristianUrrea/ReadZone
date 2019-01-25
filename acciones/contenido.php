<?php
require_once("./db/conexiondb.php");

if (isset($_SESSION['username'])) {
$user = $_SESSION['username'];
if (isset($_POST['btn-añadir-a-lista'])) {
  $query1 = "DELETE FROM List_books WHERE id_book IS NULL";
  mysqli_query($conn, $query1);

  $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE nombre = '$user'");

  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $id_user = $row['id_user'];
        $id_book=$_REQUEST['id_book'];
        $nombre_lista = strip_tags($_POST['elegir-lista']);
        $query2 = "INSERT INTO List_books (nombre_lista,id_user,id_book) VALUES('$nombre_lista','$id_user','$id_book')";
        mysqli_query($conn, $query2);
      }
    }

}
}
 ?>
