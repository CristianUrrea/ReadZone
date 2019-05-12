<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ReadZone</title>
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</head>
<style media="screen">
  #list_genders li{
    display: inline;
  }

</style>
<body>
  <!--################ NAV ################-->
  <?php
  session_start();

    // require_once("db/conexiondb.php");
    $id_book=$_REQUEST['id_book'];


    include 'nav.php';
    include_once('acciones/contenido.php');
  ?>
      <!--################################-->

    <main>
        <div id="div-row-contenido-info" class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="card horizontal">
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM Books WHERE id_book = '$id_book'");
                  if (mysqli_num_rows($query) > 0) {
                      while ($row = mysqli_fetch_assoc($query)) {
                          ?>
                    <div class="card-image center" style="">

                        <img id="image-div-content-type-book" src="<?php echo $row['imagen']; ?>" class="" width="200px"height="200px">
                        <div class="card-content">
                            <p><?php echo $row['titulo']; ?></p>
                        </div>
                        <div class='progressBar' style="margin: 0px; margin-left: 15%;">
                             <div class='likes'></div>
                             <div class='dislikes'></div>
                        </div>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><?php  echo $row['titulo'];?></span>
                            <p><?php echo $row['descripcion']; ?></p>
                        </div>
                        <div class="card-action">
                            <b>Generos</b>
                            <ul id="list_genders">
                              <?php
                              $query2 = mysqli_query($conn, "SELECT * FROM Books_genders WHERE id_book = '$id_book'");
                             if (mysqli_num_rows($query2) > 0) {
                               while ($row2 = mysqli_fetch_assoc($query2)) {
                                 $id_genero = $row2['id_genero'];
                                 $query3 = mysqli_query($conn, "SELECT * FROM Genders WHERE id_genero = '$id_genero'");
                                 if (mysqli_num_rows($query3) > 0) {
                                   while ($row3 = mysqli_fetch_assoc($query3)) {
                               ?>
                               <li style="margin-right: 20px;"><?php echo $row3['nombre']; ?></li>
                               <?php
                                    }
                                  }
                                }
                               }
                                ?>
                            </ul>
                            <b>Autor</b>
                            <p><?php echo $row['autor'] ?></p>
                        </div>
                    </div>
                    <?php
                      }
                  }
                  ?>
                </div>

                <?php  if (isset($_SESSION['username'])) {?>

                <div id="div-card-horizontal" class="card horizontal red">
                    <div class="card-stacked center">
                      <form  action="" method="post" enctype="multipart/form-data">
                        <ul id="div-ul-like-favorite-add-list">

                          <?php
                          $user = $_SESSION['username'];
                          $query = mysqli_query($conn, "SELECT * FROM Users  WHERE correo = '$user'");
                          if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                              $id_user = $row['id_user'];
                              $query2 = mysqli_query($conn, "SELECT * FROM Books_score  WHERE id_user = '$id_user' AND id_book = '$id_book'");
                              if (mysqli_num_rows($query2) > 0) {
                                while ($row2 = mysqli_fetch_assoc($query2)) {
                                  $like = $row2['like_libro'];
                                  $dislike = $row2['dislike_libro'];
                                  if($like == 1){
                                    // echo 'like';
                                    ?>
                                    <li><button type="submit" class="btn-flat" name="btn-like-book-update"><i class="material-icons green-text text-darken-3">thumb_up</i></button></li>
                                    <li><button type="submit" class="btn-flat" name="btn-dislike-book-update"><i class="material-icons white-text">thumb_down</i></button></li>
                                    <?php
                                  } else if($dislike == 1){
                                    // echo 'dislike';
                                    ?>
                                    <li><button type="submit" class="btn-flat" name="btn-like-book-update"><i class="material-icons white-text">thumb_up</i></button></li>
                                    <li><button type="submit" class="btn-flat" name="btn-dislike-book-update"><i class="material-icons green-text text-darken-3">thumb_down</i></button></li>
                                    <?php
                                  } else if($like == 0 && $dislike == 0){
                                    ?>
                                    <li><button type="submit" class="btn-flat" name="btn-like-book-update-two"><i class="material-icons white-text">thumb_up</i></button></li>
                                    <li><button type="submit" class="btn-flat" name="btn-dislike-book-update-two"><i class="material-icons white-text">thumb_down</i></button></li>
                                    <?php
                                  }
                                }
                              } else {
                                ?>
                                <li><button type="submit" class="btn-flat" id="btn-like-book" name="btn-like-book"><i class="material-icons white-text">thumb_up</i></button></li>
                                <li><button type="submit" class="btn-flat" id="btn-dislike-book" name="btn-dislike-book"><i class="material-icons white-text">thumb_down</i></button></li>
                                <?php
                              }

                            }
                          }
                          ?>
                            <!-- <li><button type="submit" class="btn-flat"><i class="material-icons white-text">favorite</i></button></li> -->
                            <li><button class="btn-flat modal-trigger" data-target="modal1"><i class="material-icons white-text">library_add</i></button></li>
                        </ul>
                      </form>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <form  action="" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <h4>Elegir lista</h4>
              <div id="form-div-input-form" class="row">
                <div class="input-field col s12">

                     <select name="elegir-lista">
                       <option value="" disabled selected>Elige la lista a añadir libro</option>
                       <?php
                       if (isset($_SESSION['username'])) {
                         $user = $_SESSION['username'];
                         $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                         if (mysqli_num_rows($query) > 0) {
                             while ($row = mysqli_fetch_assoc($query)) {
                               $id_user = $row['id_user'];
                               $query2 = mysqli_query($conn, "SELECT nombre_lista FROM List_books WHERE id_user = '$id_user' GROUP BY nombre_lista");
                               if (mysqli_num_rows($query2) > 0) {
                                   while ($row2 = mysqli_fetch_assoc($query2)) {
                                   ?>
                                   <option value="<?php echo $row2['nombre_lista'] ?>"><?php echo $row2['nombre_lista'] ?></option>
                                   <?php
                                   }
                                 }
                             }
                           }
                         }
                               ?>
                     </select>
                   </div>
              </div>
          </div>
          <div class="modal-footer">
            <div id="form-div-input-form" class="row">
                <div class="input-field col s12">
                    <button id="btn-añadir-a-lista" type="submit" name="btn-añadir-a-lista" class="btn red modal-close  waves-effect waves-red">Añadir a lista</button>
                </div>
            </div>
          </div>
        </form>
        </div>

        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
              <table cellpadding="1" cellspacing="1" class="table white table-hover" id="myTable">
          <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT id_cap_libro FROM Books_chapter WHERE id_book = '$id_book'");
            if (mysqli_num_rows($query) > 0) {
              $count = 1;

              while ($row = mysqli_fetch_assoc($query)) {
             ?>
             <tr>
               <td>
                  <a href="capitulo.php?id_cap_libro=<?php echo $row['id_cap_libro'];?>"> Capitulo <?php echo $count++; ?></a>
                    <?php
                    // $dirname = $row['capitulo'];
                    // $images = glob( $dirname."*.jpg" );
                    // foreach($images as $image) {
                    //   echo '<a>"'.$image.'"</a>';
                    // }
                  ?>
               </td>
             </tr>
             <?php
              }
            }
              ?>
            </tbody>
          </table>
                <!--<button id="btn-read-more" type="button" name="button" class="col s12 m12 l12 btn red white-text">Ver más</button>-->
                <div class="col-md-12 center text-center">
                  <ul class="pagination pager" id="myPager"></ul>
                </div>
            </div>
        </div>
        <!-- Back to top -->
        <div class="fixed-action-btn">
            <a id="back-to-top" class="btn-floating btn-large red scale-transition">
                <i class="large material-icons">keyboard_arrow_up</i>
            </a>
        </div>
        <?php
        $query = mysqli_query($conn, "SELECT SUM(like_libro) AS like_libro, SUM(dislike_libro) AS dislike_libro FROM Books_score  WHERE id_book = '$id_book'");

        if (mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_assoc($query)){
            // echo 'Likes: '.$row['like_libro'];
            // echo '<br>';
            // echo 'Dislikes: '.$row['dislike_libro'];
          }
        }
        ?>
    </main>
    <!--################################-->
    <!--################ FOOTER ################-->
    <?php include 'footer.php'; ?>
        <!--################################-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/pinzon1992/materialize_table_pagination/f9a8478f/js/pagination.js"></script>
    <script type="text/javascript" src="scripts/comun.js"></script>
    <script type="text/javascript" src="scripts/contenido.js"></script>

    <script type="text/javascript">

    <?php
    $query = mysqli_query($conn, "SELECT SUM(like_libro) AS like_libro, SUM(dislike_libro) AS dislike_libro FROM Books_score  WHERE id_book = '$id_book'");

    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)){
        ?>
        var likes = <?php echo $row['like_libro']?>;
        var dislikes = <?php echo $row['dislike_libro']?>;

        var total = likes+dislikes;
        var likePerc = (likes/total)*100;
        var dislikePerc = (dislikes/total)*100;

          $(".likes").css("width", likePerc);
          $(".dislikes").css("width", dislikePerc);
        <?php
      }
    }
    ?>


    </script>

</body>

</html>
