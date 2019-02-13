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

<body>
  <!--################ NAV ################-->
  <?php
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
                    <div class="card-image" style="width: 200px;">

                        <img id="image-div-content-type-book" src="<?php echo $row['imagen']; ?>" class="center" height="200px">
                        <div class="card-content center">
                            <p><?php echo $row['titulo']; ?></p>
                        </div>

                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><?php  echo $row['titulo'];?></span>
                            <p><?php echo $row['descripcion']; ?></p>
                        </div>
                        <div class="card-action">
                            <p>Generos</p>
                            <p>Autor</p>
                        </div>
                    </div>
                    <?php
                      }
                  }
                  ?>
                </div>
                <div id="div-card-horizontal" class="card horizontal red">
                    <div class="card-stacked center">
                        <ul id="div-ul-like-favorite-add-list">
                            <li><button type="submit" class="btn-flat"><i class="material-icons white-text">thumb_up</i></button></li>
                            <li><button type="submit" class="btn-flat"><i class="material-icons white-text">thumb_down</i></button></li>
                            <li><button type="submit" class="btn-flat"><i class="material-icons white-text">favorite</i></button></li>
                            <li><button class="btn-flat modal-trigger" data-target="modal1"><i class="material-icons white-text">library_add</i></button></li>
                        </ul>
                    </div>
                </div>
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
                    <button id="btn-añadir-a-lista" type="submit"  name="btn-añadir-a-lista" class="btn red modal-close  waves-effect waves-red">Añadir a lista</button>
                </div>
            </div>
          </div>
        </form>
        </div>
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
              <table cellpadding="1" cellspacing="1" class="table white table-hover" id="myTable">
          <tbody>
            <tr>
            	<td>Capitulo1</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo2</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo3</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo4</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo5</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo6</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo7</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo8</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo9</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo10</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo11</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo12</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo13</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo14</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo15</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo16</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
              <td>Capitulo17</td>
              <td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo18</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo19</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo20</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
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
