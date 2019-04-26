<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ReadZone</title>
    <!-- Import flickty -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--################ NAV ################-->
    <?php include 'nav.php';
    include_once('acciones/lista.php');
    ?>
        <!--################################-->
        <main>
            <div id="row-content" class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <ul class="tabs">
                        <li class="tab col s6 m6 l6"><a class="red-text" href="#perfil">Perfil</a></li>
                        <li class="tab col s6 m6 l6"><a class="red-text" href="#listas">Listas</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
              <p id="testeo"></p>

                <!--################ PERFIL ################-->
                <div id="perfil" class="col s12 m12 l8 offset-l2">
                    <div class="card horizontal">
                        <?php
                          if (isset($_SESSION['username'])) {
                              $user = $_SESSION['username'];
                              $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                              if (mysqli_num_rows($query) > 0) {
                                  while ($row = mysqli_fetch_assoc($query)) {
                                      ?>
                            <div id="image-card" class="card-image">
                                <img src="<?php echo $row['imagen_perfil'] ?>" height="200" width="200" class="fadeIn center" style="border-radius: 50%; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
                                  <div id="edit-row"class="row">
                                    <a href="editPerfil.php">
                                        <div id="edit-settings" class="col s2 m2 l2 card-content">
                                            <i class="material-icons red-text">settings</i>
                                        </div>
                                        <div id="text-settings" class="col s9 m8 l8 card-content center">
                                            <p>Editar perfil</p>
                                        </div>
                                    </a>
                                  </div>
                                  <?php
                                if($user == 'Admin' || $user == 'admin'|| $user == 'admin@gmail.com'){
                                        ?>
                                        <script type="text/javascript">
                                          $('#edit-row').hide();
                                        </script>
                                        <div id="edit-row-admin" class="row">
                                          <a href="editPerfil.php">
                                              <div id="edit-settings-admin" class="col s1 m2 l1 card-content left">
                                                  <i class="material-icons red-text">settings</i>
                                              </div>
                                              <div id="text-settings-admin" class="col s4 m5 l5 card-content">
                                                  <p>Editar perfil</p>
                                              </div>
                                          </a>
                                          <a href="admin.php">
                                            <div id="build-admin" class="col s1 m2 l1 card-content left">
                                                <i class="material-icons red-text">build</i>
                                            </div>
                                            <div id="text-build" class="col s4 m5 l5 card-content" >
                                                <p>Panel admin</p>
                                            </div>
                                          </a>
                                        </div>
                                        <?php
                                      }

                                   ?>
                            </div>
                            <?php
                                  }
                              }
                          }
                           ?>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <?php
                                 if (isset($_SESSION['username'])) {
                                     $user = $_SESSION['username'];
                                     $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                                     if (mysqli_num_rows($query) > 0) {
                                         while ($row = mysqli_fetch_assoc($query)) {
                                             ?>
                                            <span class="card-title"><img src="https://img.icons8.com/material/24/000000/user.png" style="position: absolute; margin-top: 3px;"><span style="margin-left: 4%;">: <?php echo $row['nombre']?></span></span>
<br>
                                            <p><img src="https://img.icons8.com/material/24/000000/birthday.png" style="position: absolute; margin-top: -5px;"><span style="margin-left: 4%;">: <?php echo $row['fecha_cumpleanos']?></span></p>
                                            <?php
                                         }
                                     }
                                 }
                                    ?>

                                    </div>
                                </div>
                    </div>
                </div>

                <div id="listas" class="col s12 m12 l8 offset-l2">
                  <div class="row">
                      <button id="btn-modal-add-list" data-target="modal1" class="btn red modal-trigger">Crear lista</button>
                  </div>
                  <?php
                  if (isset($_SESSION['username'])) {
                    $user = $_SESSION['username'];
                    $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                    if (mysqli_num_rows($query) > 0) {
                      while ($row = mysqli_fetch_assoc($query)) {
                        $id_user = $row['id_user'];
                        $query2 = mysqli_query($conn, "SELECT nombre_lista, id_book FROM List_books WHERE id_user = '$id_user' GROUP BY nombre_lista");
                        if (mysqli_num_rows($query2) > 0) {
                          while ($row2 = mysqli_fetch_assoc($query2)) {

                  ?>

                  <div id="<?php echo $row2['nombre_lista'] ?>" class="row">
                    <div class="card horizontal">
                    <div class="card-stacked">
                      <div class="card-content">
                        <span><b><?php echo $row2['nombre_lista']?></b></span>

                      </div>
                    </div>
                    </div>
                    <!-- <ul class="cards-container"> -->
                    <div id="<?php echo $row2['nombre_lista'] ?>"class="col s12 m12 l12 colgallery card" style="" data-flickity='{ "freeScroll": true, "groupCells": true }'>
                    <?php
                    $nombre_lista = $row2['nombre_lista'];
                    $query3 = mysqli_query($conn, "SELECT nombre_lista, id_book FROM List_books WHERE id_user = '$id_user' AND nombre_lista = '$nombre_lista'");
                    if (mysqli_num_rows($query3) > 0) {
                      while ($row3 = mysqli_fetch_assoc($query3)) {
                        $id_book = $row3['id_book'];
                        ?>
                        <!-- <p style="color: white;"><?php echo $row3['id_book'] ?></p> -->
                        <?php
                        $query4 = mysqli_query($conn, "SELECT imagen, id_book, titulo FROM books WHERE id_book = '$id_book'");
                        if (mysqli_num_rows($query4) > 0) {
                          // while ($row4 = mysqli_fetch_assoc($query4)) {

                          $row4 = mysqli_fetch_assoc($query4);
                     ?>

                      <div class="gallery-cell">
                        <div class="card sticky-action" style="margin-top: 10px; margin-bottom: 10px;">
                          <div class="header red" style="height: 42px;">&nbsp
                            <span class="card-title right">
                              <span class="white-text left" style="margin-top: 10px; font-size: 15px;"><?php echo $row4['titulo']; ?></span><a href="perfil.php?id_book=<?php echo $row4['id_book']; ?>" id="i_delete_item_list<?php echo $id_book ?>" class="material-icons" name="" style="margin-top: 7px; margin-left: 10px; margin-right: 5px; color:white; cursor:pointer; background-color: Transparent; background-repeat:no-repeat; border: none; z-index: 3; position: relative;">cancel</a>
                            </span>
                          </div>

                          <div class="card-image">
                            <a href="contenido.php?id_book=<?php echo $row4['id_book']; ?>"><img class="center" src="<?php echo $row4['imagen']; ?>" height="150px"></img>

                            </a>
                          </div>
                        </div>
                      </div>

                     <?php
                        // }
                      }
                    }
                      ?>
                    </div>
                    <div class="row">
                        <form class="" action="" method="post">
                          <a href="perfil.php?nombre_lista=<?php echo $nombre_lista ?>" name="a-delete-list-profile" class="btn red right" style="margin-right: 10px; color:white; cursor:pointer; background-color: Transparent; background-repeat:no-repeat; border: none; z-index: 3; position: relative;">DELETE</a>

                          <!-- <button class="btn-flat modal-trigger red white-text right" data-target="modal2">EDITAR</button> -->

                        </form>

                    </div>

                  </div>
                <?php
                            }
                          }
                        }
                      }
                    }
                  }
               ?>

                </div>
                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <h4>Editar lista</h4>
                            <div id="form-div-input-form" class="row">
                                <div class="input-field col s12">
                                    <input id="nombre_lista_update" name="nombre_lista_update" type="text" class="validate">
                                    <label for="nombre_lista_update">Nuevo nombre</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="form-div-input-form" class="row">
                                <div class="input-field col s12">
                                    <button id="btn-nueva-lista-update" type="submit" name="btn-nueva-lista-update" class="btn red modal-close  waves-effect waves-red">CAMBIAR</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div id="modal1" class="modal">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <h4>Añadir nueva lista</h4>
                            <div id="form-div-input-form" class="row">
                                <div class="input-field col s12">
                                    <input id="nombre_lista" name="nombre_lista" type="text" class="validate">
                                    <label for="nombre_lista">Nombre de la lista</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div id="form-div-input-form" class="row">
                                <div class="input-field col s12">
                                    <button id="btn-nueva-lista" type="submit" name="btn-nueva-lista" class="btn red modal-close  waves-effect waves-red">Añadir</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Back to top -->
            <div class="fixed-action-btn">
                <a id="back-to-top" class="btn-floating btn-large red scale-transition">
                    <i class="large material-icons">keyboard_arrow_up</i>
                </a>
            </div>
        </main>
        <!--################################-->
        <!--################ FOOTER ################-->
        <?php include 'footer.php'; ?>
            <!--################################-->

            <!--Import jQuery before materialize.js -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <!--Import jQuery before webuiPopover.js -->
            <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
            <!-- Import flickty -->
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            <script type="text/javascript" src="scripts/comun.js"></script>
            <script type="text/javascript" src="scripts/perfil.js"></script>
            <script type="text/javascript">
            $('#i_delete_item_list<?php echo $id_book ?>').click(function(){
              <?php
               $id_book = $_REQUEST['id_book'];
               $query5 = mysqli_query($conn, "SELECT * FROM list_books WHERE id_book = '$id_book' AND id_user = '$id_user' AND nombre_lista = '$nombre_lista'");
               if (mysqli_num_rows($query5) > 0) {
                 while ($row5 = mysqli_fetch_assoc($query5)) {
                   $id_user_list = $row5['id_user'];
                   $id_book_list = $row5['id_book'];
                   $query6 = mysqli_query($conn, "DELETE FROM list_books WHERE id_book = '$id_book' AND id_user = '$id_user' AND nombre_lista = '$nombre_lista'");
                   mysqli_query($conn, $query6);
                 }
               }
                ?>


               alert('¡Libro eliminado!');

               });
            </script>

            <!-- <script type="text/javascript">
              $('#i_delete_list_perfil').click(function(){
                <?php
                // $nombre_lista = $_REQUEST['nombre_lista'];
                // $query6 = mysqli_query($conn, "SELECT * FROM list_books WHERE id_user = '$id_user' AND nombre_lista = '$nombre_lista'");
                // if (mysqli_num_rows($query6) > 0) {
                //   $row6 = mysqli_fetch_assoc($query6);
                //     $id_user_list = $row6['id_user'];
                //     $id_book_list = $row6['id_book'];
                //     $query7 = mysqli_query($conn, "DELETE FROM list_books WHERE id_user = '$id_user_list' AND nombre_lista = '$nombre_lista'");
                //     mysqli_query($conn, $query7);
                // }
                 ?>
                 alert('¡Lista eliminada!')
              });
            </script> -->

</body>

</html>
