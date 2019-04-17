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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--################ NAV ################-->
    <?php include 'nav.php';?>
        <!--################################-->

        <main>
            <!--################ POPULAR AND RANKING ################-->
            <div id="div-content">
                <div class="row">
                    <!--################ POPULAR ################-->

                    <div id="div-content-carousel-popular" class="carousel carousel-slider center col s12 m12 l8 offset-l2">
                        <!--<div class="carousel-fixed-item center middle-indicator">
                        <div class="left">
                            <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
                        </div>

                        <div class="right">
                            <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
                        </div>
                    </div>
                    -->
                        <div class="carousel-fixed-item center">
                            <!-- Timer "progress bar"-->
                            <hr class="carousel-progress-bar-timer animate" />
                        </div>
                        <?php
                        $query = mysqli_query($conn, "SELECT MAX(total_likes) AS total_likes, tipo FROM Books  WHERE tipo = 'Novela'");
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)){
                            $total_likes_book = $row['total_likes'];

                            $query2 = mysqli_query($conn, "SELECT titulo, imagen, tipo FROM Books  WHERE total_likes = $total_likes_book AND tipo = 'Novela'");
                            if (mysqli_num_rows($query2) > 0) {
                              while ($row2 = mysqli_fetch_assoc($query2)){
                                echo $row2['titulo'];
                         ?>
                        <a href="contenido.php">
                            <div class="carousel-item orange white-text" href="#four!">
                                <h2>Primer Novela</h2>
                                <img src="<?php echo $row2['imagen'] ?>" alt="" height="100%">
                            </div>
                        </a>
                        <?php
                          }
                        }
                      }
                    }
                         ?>
                         <?php
                         $query = mysqli_query($conn, "SELECT MAX(total_likes) AS total_likes, tipo FROM Books  WHERE tipo = 'Manga'");
                         if (mysqli_num_rows($query) > 0) {
                           while ($row = mysqli_fetch_assoc($query)){
                             $total_likes_book = $row['total_likes'];

                             $query2 = mysqli_query($conn, "SELECT titulo, imagen, tipo FROM Books  WHERE total_likes = $total_likes_book AND tipo = 'Manga'");
                             if (mysqli_num_rows($query2) > 0) {
                               while ($row2 = mysqli_fetch_assoc($query2)){
                                 echo $row2['titulo'];
                          ?>
                          <a href="contenido.php">
                              <div class="carousel-item green white-text" href="#four!">
                                  <h2>Primer Manga</h2>
                                  <img src="<?php echo$row2['imagen'] ?>" alt="" height="100%">
                              </div>
                          </a>
                         <?php
                           }
                         }
                       }
                     }
                          ?>
                          <?php
                          $query = mysqli_query($conn, "SELECT MAX(total_likes) AS total_likes, tipo FROM Books  WHERE tipo = 'Comic'");
                          if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)){
                              $total_likes_book = $row['total_likes'];

                              $query2 = mysqli_query($conn, "SELECT titulo, imagen, tipo FROM Books  WHERE total_likes = $total_likes_book AND tipo = 'Comic'");
                              if (mysqli_num_rows($query2) > 0) {
                                while ($row2 = mysqli_fetch_assoc($query2)){
                                  echo $row2['titulo'];
                           ?>
                           <a href="contenido.php">
                               <div class="carousel-item grey white-text" href="#four!">
                                   <h2>Primer comic</h2>
                                   <img src="<?php echo $row2['imagen'] ?>" alt="" height="100%">
                               </div>
                           </a>
                          <?php
                            }
                          }
                        }
                      }
                           ?>



                    </div>
                </div>
                <!--################ RECOMENDATIONS NOVELAS ################-->
                <div id="div-content-recomendations" class="row">
                  <div id="div-content-recomendations-title" class="col s12 m12 l8 offset-l2">
                      <h5>Recomendaciones novelas</h5>
                  </div>

                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity white" data-flickity-options='{ "wrapAround": true }'>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo = 'Novela'");
                      if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                              ?>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                    </a>
                                </div>
                                <div class="card-content center">
                                    <p id="div-content-recomendations-gallery-title-book"><?php echo $row['titulo']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                      }
                      ?>
                    </div>
                    <!--################ RECOMENDATIONS MANGAS ################-->
                    <div id="div-content-recomendations-title" class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones mangas</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity white" data-flickity-options='{ "wrapAround": true }'>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo = 'Manga'");
                      if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                              ?>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                  <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                    </a>
                                </div>
                                <div class="card-content center">
                                    <p id="div-content-recomendations-gallery-title-book"><?php echo $row['titulo']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                      }
                      ?>
                    </div>
                    <!--################ RECOMENDATIONS COMICS ################-->
                    <div id="div-content-recomendations-title" class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones comics</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity white" data-flickity-options='{ "wrapAround": true }'>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo = 'Comic'");
                      if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                              ?>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                  <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                    </a>
                                </div>
                                <div class="card-content center">
                                    <p id="div-content-recomendations-gallery-title-book"><?php echo $row['titulo']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                      }
                      $conn->close();
                      ?>
                    </div>
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
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <!--Import jQuery before webuiPopover.js -->
            <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
            <!-- Import flickty -->
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

            <script type="text/javascript" src="scripts/comun.js"></script>
            <script type="text/javascript" src="scripts/index.js"></script>
</body>

</html>
