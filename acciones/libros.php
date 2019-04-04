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
    $destino = "./imagenes/libros/".$_FILES['fileimgbook']['name'];

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
if (isset($_POST['btn-insert-chapter-libro'])) {
  // echo 'boton insertar capitulo';
  $titulo_libro = strip_tags($_POST['titulo-libro-2']);
  $num_capitulo = $_POST['num_capitulo'];
  // echo $num_capitulo;
  if (!file_exists('imagenes/capitulos/'.$titulo_libro.'/'.$num_capitulo)) {
    mkdir('imagenes/capitulos/'.$titulo_libro.'/'.$num_capitulo, 0777, true);
  }

  $total = count($_FILES['upload']['name']);
  for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = './imagenes/capitulos/'.$titulo_libro.'/'.$num_capitulo.'/'.$_FILES['upload']['name'][$i];

      //Upload the file into the temp dir
      move_uploaded_file($tmpFilePath, $newFilePath);
    }
  }
  $query = mysqli_query($conn, "SELECT * FROM Books WHERE titulo = '$titulo_libro'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      $id_book = $row['id_book'];
      $newFilePath2 = './imagenes/capitulos/'.$titulo_libro.'/'.$num_capitulo.'/';
      $query2 = mysqli_query($conn, "INSERT INTO Books_chapter (id_cap_libro, id_book, capitulo) VALUES ('','$id_book','$newFilePath2')");
      mysqli_query($conn, $query2);

    }
  }
}
// if (isset($_POST['btn-insert-chapter-libro'])) {
//   $titulo_libro= strip_tags($_POST['titulo-libro']);
//   $query = mysqli_query($conn, "SELECT * FROM Books WHERE titulo = '$titulo_libro'");
//   if (mysqli_num_rows($query) > 0) {
//     while ($row = mysqli_fetch_assoc($query)) {
//       $id_book = $row['id_book'];
//       $archivo = $_FILES['filedirname']['tmp_name'];
//       echo $archivo;
//       $destino = "./imagenes/".$_FILES['filedirname']['name'];
//       move_uploaded_file($archivo, $destino);
//       $query2 = mysqli_query($conn, "INSERT INTO Books_chapter (id_cap_libro, id_book, capitulo) VALUES ('','$id_book','$dir')");
//       mysqli_query($conn, $query2);
//
//     }
//   }
// }
