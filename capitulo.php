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

</head>
<style media="screen">
  #div_cascada {
    display: none;
  }
  .div_buttons_mode i {
    cursor: pointer;
  }
  #ul_li_icons li {
    display: inline;
    float: none;
    margin: 20px;
  }
</style>
<body>
  <!--################ NAV ################-->
  <?php
    // require_once("db/conexiondb.php");
    $id_cap_libro=$_REQUEST['id_cap_libro'];
    include 'nav.php';
  ?>
      <!--################################-->

    <main>
      <div class="row">
        <div class="col s12 red center">
          <div class="div_buttons_mode" style="margin-top: 5px;">
            <ul id="ul_li_icons">
              <li>            <i id="return"><img class="white circle" src="https://img.icons8.com/material/30/000000/home-page.png"><i>
</li>
              <li>            <i id="mode_cascada" class="small material-icons white circle">pages</i>
</li>
              <li>            <i id="mode_pagination"><img class="white circle" src="https://img.icons8.com/material/30/000000/file.png"></i>
</li>
            </ul>
          </div>

        </div>
      </div>
      <div id="div_pagination" class="row">
        <div class="col s12 l8 m12 offset-l2">
          <table class="striped" id="myTable">
            <tbody>
              <?php
              $query = mysqli_query($conn, "SELECT * FROM Books_chapter WHERE id_cap_libro = '$id_cap_libro'");
              if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                  $dirname = $row['capitulo'];
                  $images = glob( $dirname."*.jpg" );
                  foreach($images as $image) {
                    ?>
                    <tr>
                      <td>
                        <div class="card">
                          <div class="card-image">

                          <?php
                          echo '<img src="'.$image.'" ></><br>';
                           ?>
                         </div>
                        </div>

                      </td>
                    </tr>
                    <?php
                  }
                }
              }
                ?>
            </tbody>
            </table>
        </div>
      </div>
      <div id="div_pagination_nums" class="row center red">
        <ul class="pagination pager" id="myPager" style="margin: 0; padding: 10px;"></ul>

      </div>
      <div id="div_cascada" class="center row">
        <div class="col s12 l8 m12 offset-l2">
          <table class="striped">
            <tbody>
              <tr>
                <td>
                  <div class="card">
                    <div class="card-image">
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM Books_chapter WHERE id_cap_libro = '$id_cap_libro'");
                      if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                       ?>
                       <?php
                       $dirname = $row['capitulo'];
                       $images = glob( $dirname."*.jpg" );
                       foreach($images as $image) {
                         echo '<img src="'.$image.'" ></><br>';
                       }
                      }
                      }
                                      ?>
                    </div>
                  </div>
                </td>
              </tr>

            </tbody>

          </table>
          </div>
        </div>

      </div>
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
    <!-- <script type="text/javascript" src="scripts/contenido.js"></script> -->
    <script type="text/javascript">
    $("#myTable").pageMe({
      pagerSelector: "#myPager",
      activeColor: "red",
      prevText: "Anterior",
      nextText: "Siguiente",
      showPrevNext: true,
      hidePageNumbers: true,
      perPage: 1
    });

    $('#mode_cascada').click(function(){
      $('#div_pagination').css({'display':'none'});
      $('#div_pagination_nums').css({'display':'none'});
      $('#div_cascada').css({'display':'block'});
    });
    $('#mode_pagination').click(function(){
      $('#div_pagination').css({'display':'block'});
      $('#div_pagination_nums').css({'display':'block'});
      $('#div_cascada').css({'display':'none'});
    });
    $('#return').click(function(){

      window.history.back();
    });
    </script>
</body>

</html>
