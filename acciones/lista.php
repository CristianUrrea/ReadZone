<?php
$_SESSION['success'] = "";
require_once("./db/conexiondb.php");

if (isset($_POST['btn-nueva-lista'])) {
  $lista_nombre = $_POST['nombre_lista'];
  mysqli_query($conn, "INSERT INTO List_books (nombre_lista) VALUES ('$lista_nombre')");
}

 ?>
