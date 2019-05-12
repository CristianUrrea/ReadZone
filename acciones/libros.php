<?php
require_once("./db/conexiondb.php");

if (isset($_POST["btn-insertar-libro"])) {
  if(empty($_POST['titulo_libro']) || empty($_POST['checked_id']) || empty($_POST['tipo-libro'])){
    echo '<script type="text/javascript">alert("Seleccione el tipo de libro, el titulo y los generos")</script>';
  } else {

    $tipo_libro = strip_tags($_POST["tipo-libro"]);
    $titulo = $_POST["titulo_libro"];
    $descripcion = $_POST["descripcion"];
    $autor = $_POST["autor"];
    // $imagen = addslashes(file_get_contents($_FILES['imagen-book']['tmp_name']));
    $archivo = $_FILES['fileimgbook']['tmp_name'];
    $destino = "./imagenes/libros/".$_FILES['fileimgbook']['name'];
    $idArr = $_POST['checked_id'];
    move_uploaded_file($archivo, $destino);
    echo '<script type="text/javascript">alert("¡Libro insertado!")</script>';

    mysqli_query($conn, "INSERT INTO Books (id_book, tipo, titulo, descripcion, autor, imagen) VALUES ('','$tipo_libro','$titulo','$descripcion','$autor','$destino')");
    $query = mysqli_query($conn, "SELECT * FROM Books WHERE titulo = '$titulo'");
    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $id_book = $row['id_book'];
        foreach ($idArr as $id) {
          $query1 = mysqli_query($conn, "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)");

          mysqli_query($conn, $query1);
        }
      }
    }
  }

}

if (isset($_POST['btn-update-libro'])){

  if(empty($_POST['id-book-edit'])){
    // echo '<script type="text/javascript">alert("vacio")</script>';
  } else if(!empty($_POST['id-book-edit'])){

    $id_book = $_POST['id-book-edit'];
    $titulo_libro = $_POST['titulo_libro_edit'];
    $tipo_libro = strip_tags($_POST['tipo-libro-edit']);
    $descripcion = $_POST["descripcion-edit"];
    $autor = $_POST["autor-edit"];

    $query = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $id_book_edit = $row['id_book'];
        if(empty($_FILES['fileimgbookedit']['tmp_name'])){
          // echo "imagen vacia";
          $archivo = $_FILES['fileimgbookedit']['tmp_name'];
          $destino = "./imagenes/libros/".$_FILES['fileimgbookedit']['name'];
          // mysqli_query($conn, "INSERT INTO Books (imagen) VALUES ('$destino')");
          // move_uploaded_file($archivo, $destino);
          echo '<script type="text/javascript">alert("¡Libro actualizado!")</script>';

          $query7 = "UPDATE Books SET tipo = '$tipo_libro', titulo = '$titulo_libro', descripcion = '$descripcion', autor = '$autor' WHERE id_book='$id_book_edit'";
          mysqli_query($conn, $query7);

        } else if(!empty($_FILES['fileimgbookedit']['tmp_name'])){
          $archivo = $_FILES['fileimgbookedit']['tmp_name'];
          $destino = "./imagenes/libros/".$_FILES['fileimgbookedit']['name'];
          // mysqli_query($conn, "INSERT INTO Books (imagen) VALUES ('$destino')");
          echo '<script type="text/javascript">alert("¡Libro actualizado!")</script>';
          move_uploaded_file($archivo, $destino);
          $query7 = "UPDATE Books SET tipo = '$tipo_libro', titulo = '$titulo_libro', descripcion = '$descripcion', autor = '$autor', imagen = '$destino' WHERE id_book='$id_book_edit'";
          mysqli_query($conn, $query7);


        }
        // if(!empty($_POST['checked_id_edit'])){
        //   $query3 = "DELETE FROM Books_genders_values WHERE id_book='$id_book_edit'";
        //   mysqli_query($conn, $query3);
        //
        //   $idArr = $_POST['checked_id_edit'];
        //
        //   // echo '<script type="text/javascript">alert("No esta vacio");</script>';
        //   $id = implode(",", $idArr);
        //   $query2 = "INSERT INTO Books_genders_values (id_book, valores) VALUES ('$id_book_edit','$id')";
        //   mysqli_query($conn, $query2);
        //
        // } else {
        //   // echo '<script type="text/javascript">alert("Vacio");</script>';
        // }
        //
        // if(!empty($_POST['checked_id_edit2'])){
        //   // echo '<script type="text/javascript">alert("No esta vacio 2");</script>';
        //   $idArr = $_POST['checked_id_edit2'];
        //   $id = implode(",", $idArr);
        //   $query3 = "INSERT INTO Books_genders_values (id_book, valores) VALUES ('$id_book_edit','$id')";
        //   mysqli_query($conn, $query3);
        //
        // }
        if(!empty($_POST['checked_id'])){
          // echo "lleno checked_id"."</br>";
          $query3 = "DELETE FROM Books_genders WHERE id_book='$id_book_edit'";
          mysqli_query($conn, $query3);

          $idArr = $_POST['checked_id'];
          // $query2 = "UPDATE Books SET tipo = '$tipo_libro', titulo = '$titulo_libro', descripcion = '$descripcion', autor = '$autor'  WHERE id_book='$id_book_edit'";
          // mysqli_query($conn, $query2);
          foreach ($idArr as $id) {
            $query4 = "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)";
            mysqli_query($conn, $query4);
            // echo $id;
          }
          if(empty($_POST['checked_id_edit'])){
            // echo "checked_id_edit vacio dentro de checked id";

          } else if(!empty($_POST['checked_id_edit'])){
            $idArr2 = $_POST['checked_id_edit'];
            foreach ($idArr2 as $id) {
              $query5 = "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)";
              mysqli_query($conn, $query5);
            }
          }


        } else if(empty($_POST['checked_id'])){
          $query6 = "DELETE FROM Books_genders WHERE id_book='$id_book_edit'";
          mysqli_query($conn, $query6);

          // echo "vacio checked_id"."</br>";
          if(!empty($_POST['checked_id_edit'])){
            $idArr2 = $_POST['checked_id_edit'];
            foreach ($idArr2 as $id) {
              // echo $id;
              $query2 = "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)";
              mysqli_query($conn, $query2);
            }
          } else if(empty($_POST['checked_id_edit'])){
            // echo "checked_id_edit vacio";
          }

        } else if(empty($_POST['checked_id_edit'])){
          // echo "vacio checked_id_edit";
        }


      }
    }

  }

  //
  // $query = "UPDATE Books SET titulo='$titulo_libro' WHERE titulo='$user'";
  // mysqli_query($conn, $query);

  // $titulo_libro= strip_tags($_POST['titulo_libro_edit']);
  // $query = mysqli_query($conn, "SELECT * FROM Books WHERE titulo = '$titulo_libro'");
  // if (mysqli_num_rows($query) > 0) {
  //   while ($row = mysqli_fetch_assoc($query)) {
  //     $id_book = $row['id_book'];
  //     $idArr = $_POST['checked_id'];
  //     foreach ($idArr as $id) {
  //       // $descripcion = $_POST['descripcion_update'];
  //       $query1 = mysqli_query($conn, "INSERT INTO Books_genders (id_book, id_genero) VALUES ($id_book,$id)");
  //       mysqli_query($conn, $query1);
  //     }
  //   }
  // }
}

if (isset($_POST['btn-insertar-genero'])) {
  $genero_nombre = $_POST['genero'];
  $query = mysqli_query($conn, "INSERT INTO Genders (id_genero, nombre) VALUES ('','$genero_nombre')");
  mysqli_query($conn, $query);
}
if (isset($_POST['btn-insert-chapter-libro'])) {
  // echo 'boton insertar capitulo';
  if(empty($_POST['titulo-libro-2'])){
    echo '<script type="text/javascript">alert("¡Seleccione un libro!")</script>';

  } else {
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
