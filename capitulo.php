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
      <div class="center">
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
    <script type="text/javascript" src="scripts/contenido.js"></script>

</body>

</html>
