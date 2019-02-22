<?php
require_once("./db/conexiondb.php");

if (isset($_POST["btn-insertar-libro"])) {
    $tipo_libro = strip_tags($_POST["tipo-libro"]);
    $titulo = $_POST["titulo_libro"];
    $descripcion = $_POST["descripcion"];
    $autor = $_POST["autor"];
    $artista = $_POST["artista"];
    // $imagen = addslashes(file_get_contents($_FILES['imagen-book']['tmp_name']));
    $archivo = $_FILES['fileimgbook']['tmp_name'];
    $destino = "./imagenes/".$_FILES['fileimgbook']['name'];

    move_uploaded_file($archivo, $destino);
    mysqli_query($conn, "INSERT INTO Books (id_book, tipo, titulo, descripcion, autor, artista, imagen) VALUES ('','$tipo_libro','$titulo','$descripcion','$autor','$artista','$destino')");
}

if (isset($_POST['btn-update-libro'])) {
  $titulo_libro= strip_tags($_POST['titulo-libro']);
  $query = mysqli_query($conn, "SELECT * FROM Books WHERE titulo = '$titulo_libro'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      $id_book = $row['id_book'];
      $idArr = $_POST['checked_id'];
      foreach ($idArr as $id) {
        // $descripcion = $_POST['descripcion_update'];
        $query1 = mysqli_query($conn, "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)");
        mysqli_query($conn, $query1);
      }
    }
  }




}

if (isset($_POST['btn-insertar-genero'])) {
  $genero_nombre = $_POST['genero'];
  $query = mysqli_query($conn, "INSERT INTO Genders (id_genero, nombre) VALUES ('','$genero_nombre')");
  mysqli_query($conn, $query);
}
