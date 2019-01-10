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
     #example2-pagination {
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
            <div id="div-row-search-input" class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <div class="col s3 m3 l3">
                        <button id="btn-search-advanced" class="btn" type="button" name="button" data-activates="services-dropdown"><span class="button-text"></span><!--<i class="material-icons right">arrow_drop_down</i>--></button>
                    </div>
                    <div class="search-wrapper">
                        <div id="div-type-search-one" class="input-field col s9 m9 l9">
                            <input id="input-div-search" type="search" placeholder="Buscar..." class="right searchbarfix white">
                            <i id="i-div-search-two" class="material-icons grey-text">search</i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider" tabindex="-1"></li>
              <li><a href="#!">three</a></li>
              <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
              <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul>

            <div class="row">
                <div id="div-biblioteca" style="" class="col s12 m12 l8 offset-l2">
                  <ul id="example2" class="cards-container">
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM Books");
                  if (mysqli_num_rows($query) > 0) {
                      while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <li>
                  <div class="card sticky-action">
                        <div class="card-image center">
                          <form method="post">
                            <a href="contenido.php?id_book=<?php echo $row['id_book'] ?>"><img class="center" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" height="250px"></img>
                            </a>
                          </form>

                        </div>
                        <div class="card-content">
                            <p style="font-size: 12px;"><?php echo $row['titulo']; ?></p>
                        </div>
                    </div>
                  </li>
                    <?php
                  }
                  }
                  ?>
                </ul>
                </div>

            </div>
        </div>
          <div id="example2-pagination" style="" class="col s12 m12 l6 offset-l4 center">
            <a id="example2-previous" href="#">&laquo; Previous</a>
            <a id="example2-next" href="#">Next &raquo;</a>
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

    <script type="text/javascript" src="scripts/comun.js"></script>
    <script type="text/javascript" src="scripts/jquery.paginate.js"></script>

    <script type="text/javascript">
    $(document).ready(function()    {
      $('#example2').paginate({itemsPerPage: 12});
      $('.dropdown-trigger').dropdown();

    });
    </script>
</body>

</html>
