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
  $descripcion = $_POST['descripcion_update'];
  $query1 = mysqli_query($conn, "UPDATE Books SET descripcion = '$descripcion' WHERE titulo = '$titulo_libro'");
  mysqli_query($conn, $query1);

}
