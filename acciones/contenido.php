<?php
require_once("./db/conexiondb.php");


if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    if (isset($_POST['btn-añadir-a-lista'])) {
        $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
        // echo ' <script type="text/javascript">alert("hola")</script>';

        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $id_user = $row['id_user'];
                $id_book = $_REQUEST['id_book'];
                if(empty($_POST['elegir-lista'])){
                  // echo '<script type="text/javascript">alert("¡Seleccione una lista!")</script';

                  echo '<script type="text/javascript">M.toast({html: `¡Seleccione una lista!`, classes: `rounded red`})</script>';

                } else {
                  $nombre_lista = strip_tags($_POST['elegir-lista']);
                  // echo $id_book;
                  // echo $nombre_lista;
                  $query3 = mysqli_query($conn, "SELECT * FROM List_books WHERE id_book = '$id_book' AND nombre_lista = '$nombre_lista' AND id_user = '$id_user'");
                  // $results = mysqli_query($conn, $query3);
                  if (mysqli_num_rows($query3) > 0) {
                    while ($row3 = mysqli_fetch_assoc($query3)){
                      // echo '<script type="text/javascript">alert("¡El libro ya está en la lista seleccionada!")</script';
                      echo '<script type="text/javascript">M.toast({html: `¡El libro ya está en la lista seleccionada!`, classes: `rounded red`})</script';

                  }
                  } else {
                    echo '<script type="text/javascript">M.toast({html: `¡Libro añadido!`, classes: `rounded green`})</script';

                  // echo '<script type="text/javascript">alert("¡Libro añadido!")</script';
                  $query2 = "INSERT INTO List_books (nombre_lista,id_user,id_book) VALUES('$nombre_lista','$id_user','$id_book')";
                   mysqli_query($conn, $query2);
                  }
                }


            }
        }
    }
    if(isset($_POST['btn-like-book'])){
      $like = 1;
      $dislike = 0;

      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];

          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];

                // $query3 = mysqli_query($conn, "SELECT * FROM Books_score WHERE id_book = '$id_book'");
                // if (mysqli_num_rows($query3) > 0) {
                //   while ($row3 = mysqli_fetch_assoc($query3)){
                //
                //     $like_libro = $row3['like_libro'];
                //     if($like_libro == 1){
                //       echo $id_user;
                //       echo ',';
                //       echo $id_book;
                //       $query5 = "UPDATE Books_score SET like_libro = '0' WHERE id_book = '$id_book' id_user = '$id_user'";
                //       mysqli_query($conn, $query5);
                //     } else {
                //       $query4 = "INSERT INTO Books_score (like_libro, dislike_libro, id_user, id_book) VALUES('$like', '$dislike','$id_user','$id_book')";
                //       mysqli_query($conn, $query4);
                //     }
                //
                //   }
                // }
                $query3 = "INSERT INTO Books_score (like_libro, dislike_libro, id_user, id_book) VALUES('$like', '$dislike','$id_user','$id_book')";
                mysqli_query($conn, $query3);
                $query4 = mysqli_query($conn, "SELECT SUM(like_libro) AS like_libro, id_book FROM Books_score WHERE id_book = $id_book");
                if (mysqli_num_rows($query4) > 0) {
                  while($row4 = mysqli_fetch_assoc($query4)){
                    $like = $row4['like_libro'];
                    $id_book2 = $row4['id_book'];
                    // echo '<script type="text/javascript">alert('.$like.')</script>'.'AQUI RESTA';

                    $query6 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = $id_book2");
                    if (mysqli_num_rows($query6) > 0) {
                      $query7 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query7);

                    } else {
                      $query8 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query8);

                    }
                  }
                }
            }
          }
        }
      }
    }
    if(isset($_POST['btn-dislike-book'])){
      $like = 0;
      $dislike = 1;
      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];
          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];
                $query3 = "INSERT INTO Books_score (like_libro, dislike_libro, id_user, id_book) VALUES('$like', '$dislike','$id_user','$id_book')";
                mysqli_query($conn, $query3);
            }
          }
        }
      }
    }

    if(isset($_POST['btn-like-book-update'])){

      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];
          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];
                // echo $id_book;
                $query3 = "UPDATE Books_score SET like_libro = '0' WHERE id_book = '$id_book' AND id_user = '$id_user'";
                mysqli_query($conn, $query3);
                $query4 = mysqli_query($conn, "SELECT SUM(like_libro) AS like_libro, id_book FROM Books_score WHERE id_book = $id_book");
                if (mysqli_num_rows($query4) > 0) {
                  while($row4 = mysqli_fetch_assoc($query4)){
                    $like = $row4['like_libro'];
                    $id_book2 = $row4['id_book'];
                    // echo '<script type="text/javascript">alert('.$like.')</script>'.'AQUI RESTA';

                    $query6 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = $id_book2");
                    if (mysqli_num_rows($query6) > 0) {
                      $query7 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query7);

                    } else {
                      $query8 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query8);

                    }
                  }
                }
            }
          }
        }
      }
    }

    if(isset($_POST['btn-dislike-book-update'])){

      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];
          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];
                // echo $id_book;
                $query3 = "UPDATE Books_score SET dislike_libro = '0' WHERE id_book = '$id_book' AND id_user = '$id_user'";
                mysqli_query($conn, $query3);
            }
          }
        }
      }
    }

    if(isset($_POST['btn-like-book-update-two'])){

      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];
          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];
                // echo $id_book;
                $query3 = "UPDATE Books_score SET like_libro = '1' WHERE id_book = '$id_book' AND id_user = '$id_user'";
                mysqli_query($conn, $query3);
                $query4 = mysqli_query($conn, "SELECT SUM(like_libro) AS like_libro, id_book FROM Books_score WHERE id_book = $id_book");

                if (mysqli_num_rows($query4) > 0) {
                  while($row4 = mysqli_fetch_assoc($query4)){
                    $like = $row4['like_libro'];
                    $id_book2 = $row4['id_book'];
                    // echo '<script type="text/javascript">alert('.$like.')</script>'.'AQUI RESTA';

                    $query6 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = $id_book2");
                    if (mysqli_num_rows($query6) > 0) {
                      $query7 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query7);

                    } else {
                      $query8 = "UPDATE Books SET total_likes = '$like' WHERE id_book = '$id_book2'";
                      mysqli_query($conn, $query8);

                    }
                  }
                }
            }
          }
        }
      }
    }

    if(isset($_POST['btn-dislike-book-update-two'])){

      $query = mysqli_query($conn, "SELECT id_user FROM Users  WHERE correo = '$user'");
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)){
          $id_user = $row['id_user'];
          $id_book=$_REQUEST['id_book'];
          $query2 = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
                $id_book = $row2['id_book'];
                // echo $id_book;
                $query3 = "UPDATE Books_score SET dislike_libro = '1' WHERE id_book = '$id_book' AND id_user = '$id_user'";
                mysqli_query($conn, $query3);
            }
          }
        }
      }
    }
}
// $query2 = "INSERT INTO List_books (nombre_lista,id_user,id_book) VALUES('$nombre_lista','$id_user','$id_book')";
// mysqli_query($conn, $query2);
// $query1 = "DELETE FROM List_books WHERE id_book IS NULL";
// mysqli_query($conn, $query1);
// $query2 = "INSERT INTO List_books (nombre_lista,id_user,id_book) VALUES('$nombre_lista','$id_user','$id_book')";
// mysqli_query($conn, $query2);
