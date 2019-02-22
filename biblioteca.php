
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
    <link rel="stylesheet" href="css/biblioteca.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      include_once('db/conexiondb.php');
     ?>
     <style media="screen">
       #div-content-search-advanced {
         display: none;
       }

     </style>
</head>

<body>
  <!--################ NAV ################-->
  <?php include 'nav.php'; ?>
      <!--################################-->

    <main>
        <div id="div-search-type">
            <div id="div-row-search-input" class="row" style="">
                <div class="col s12 m12 l8 offset-l2 white">
                    <div class="col s3 m3 l3">
                        <button id="btn-search-advanced" class="btn red white-text" type="button" name="button">
                          <span class="button-text"></span>
                        </button>
                    </div>
                    <div class="search-wrapper">
                        <div id="div-type-search-one" class="input-field col s9 m9 l9">
                            <input id="input-div-search" type="search" placeholder="Buscar..." class="right searchbarfix white">
                            <i id="i-div-search-two" class="material-icons grey-text">search</i>
                        </div>
                    </div>
                </div>
                <div id="div-content-search-advanced" class="row" style="margin-bottom: -40px;">
                  <div class="row">
                    <form class="" method="post">
                      <div class="col s12 m12 l8 offset-l2 white">
                        <div class="input-field col l3" style="margin-top: 0px; margin-bottom: 0px; padding: 0;">
                          <select name="tipo-libro">
                            <option value="" disabled selected>Tipo</option>
                            <option value="Novela">Novela</option>
                            <option value="Manga">Manga</option>
                            <option value="Comic">Comic</option>
                          </select>
                        </div>
                      </div>
                      <div class="col s3 m3 l2 offset-l2 white">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 0, 4");
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <p>
                          <label>
                            <input type="checkbox" class="filled-in" />
                            <span> <?php echo $row['nombre']; ?></span>
                          </label>
                        </p>
                        <?php
                            }
                          }
                        ?>
                      </div>
                      <div class="col s3 m3 l2 white">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 4, 4");
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <p>
                          <label>
                            <input type="checkbox" class="filled-in" />
                            <span> <?php echo $row['nombre']; ?></span>
                          </label>
                        </p>
                        <?php
                            }
                          }
                        ?>
                      </div>
                      <div class="col s3 m3 l2 white">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 8, 4");
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <p>
                          <label>
                            <input type="checkbox" class="filled-in" />
                            <span> <?php echo $row['nombre']; ?></span>
                          </label>
                        </p>
                        <?php
                            }
                          }
                        ?>
                      </div>
                      <div class="col s3 m3 l2 white">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 12, 4");
                        if (mysqli_num_rows($query) > 0) {
                          while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <p>
                          <label>
                            <input type="checkbox" class="filled-in" />
                            <span> <?php echo $row['nombre']; ?></span>
                          </label>
                        </p>
                        <?php
                            }
                          }
                        ?>
                      </div>
                      <div id="div-row-aplicar" class="row">
                        <div class="col s12 m12 l8 offset-l2 white" >
                          <div class="col s4 m4 l4 offset-s4 offset-m4 offset-l4" style="margin-bottom: 15px;">
                              <button class="btn red white-text" type="submit" name="btn-aplicar-cambios">Aplicar</button>
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
            </div>
          </div>
            <div class="row">
                <div id="div-biblioteca" class="col s12 m12 l8 offset-l2 white">
                  <ul id="example2" class="cards-container">
                  <?php
                    if (isset($_POST['btn-aplicar-cambios'])) {

                      if(empty($_POST['tipo-libro'])){

                        $query = mysqli_query($conn, "SELECT * FROM Books");
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                              ?>
                              <li>
                              <div class="card sticky-action">
                                    <div class="card-image center">
                                      <form method="post">
                                        <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                        </a>
                                      </form>
                                    </div>
                                    <div class="card-content">
                                        <p id="p-div-title-book"><?php echo $row['titulo']; ?></p>
                                    </div>
                                </div>
                              </li>
                              <?php
                            }
                          }
                      } else if(!empty($_POST['tipo-libro'])) {

                        $tipo_libro = strip_tags($_POST["tipo-libro"]);
                        // $cookie_name = "tipo_libro";
                        // $cookie_value = $tipo_libro;
                        // setcookie($cookie_name, $cookie_value); // 86400 = 1 day

                        if($tipo_libro == 'Novela'){
                          
                          $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo='Novela'");
                          if (mysqli_num_rows($query) > 0) {
                              while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <li>
                                <div class="card sticky-action">
                                      <div class="card-image center">
                                        <form method="post">
                                          <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                          </a>
                                        </form>
                                      </div>
                                      <div class="card-content">
                                          <p id="p-div-title-book"><?php echo $row['titulo']; ?></p>
                                      </div>
                                  </div>
                                </li>
                                <?php
                              }
                            }
                        } else if($tipo_libro == 'Manga'){

                          $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo='Manga'");
                          if (mysqli_num_rows($query) > 0) {
                              while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <li>
                                <div class="card sticky-action">
                                      <div class="card-image center">
                                        <form method="post">
                                          <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                          </a>
                                        </form>
                                      </div>
                                      <div class="card-content">
                                          <p id="p-div-title-book"><?php echo $row['titulo']; ?></p>
                                      </div>
                                  </div>
                                </li>
                                <?php
                              }
                            }
                        } elseif($tipo_libro == 'Comic'){
                          $query = mysqli_query($conn, "SELECT * FROM Books WHERE tipo='Comic'");
                          if (mysqli_num_rows($query) > 0) {
                              while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <li>
                                <div class="card sticky-action">
                                      <div class="card-image center">
                                        <form method="post">
                                          <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                                          </a>
                                        </form>
                                      </div>
                                      <div class="card-content">
                                          <p id="p-div-title-book"><?php echo $row['titulo']; ?></p>
                                      </div>
                                  </div>
                                </li>
                                <?php
                              }
                            }
                        }
                      }
                    } else {
                    $query = mysqli_query($conn, "SELECT * FROM Books");
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                  ?>
                  <div class="ocultar">
                    <li class="li-gallery-display">
                    <div class="card sticky-action">
                          <div class="card-image center">
                            <form method="post">
                              <a href="contenido.php?id_book=<?php echo $row['id_book']; ?>"><img class="center" src="<?php echo $row['imagen']; ?>" height="250px"></img>
                              </a>
                            </form>
                          </div>
                          <div class="card-content">
                              <p id="p-div-title-book"><?php echo $row['titulo']; ?></p>
                          </div>
                      </div>
                    </li>
                  </div>
                    <?php
                        }
                    }
                  }
                  ?>
                </ul>
              </div>
            </div>
        </div>
          <div id="example2-pagination" style="" class="col s12 m12 l6 offset-l4 center">
            <a id="example2-previous" href="#" class="btn red white-text">&laquo; Previous</a>
            <a id="example2-next" href="#" class="btn red white-text">Next &raquo;</a>
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

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/pinzon1992/materialize_table_pagination/f9a8478f/js/pagination.js"></script>
    <script type="text/javascript" src="scripts/biblioteca.js"></script>
    <script type="text/javascript" src="scripts/comun.js"></script>
    <script type="text/javascript" src="scripts/jquery.paginate.js"></script>
</body>

</html>
