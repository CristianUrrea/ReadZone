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
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/registro.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include_once('acciones/libros.php') ?>
</head>

<body>
    <main>
      <div style="margin-top: 20px;" class="row">
          <div class="col s12 m12 l8 offset-l2">
              <ul class="tabs">
                  <li class="tab col s3 m3 l3"><a class="red-text" href="#insertar_admin">Insertar</a></li>
                  <li class="tab col s3 m3 l3"><a class="red-text" href="#update_admin">Actualizar</a></li>
                  <li class="tab col s3 m3 l3"><a class="red-text" href="#provicional_admin">Provicional</a></li>
                  <li class="tab col s3 m3 l3"><a class="red-text" href="#capitulos_admin">Capitulos</a></li>
              </ul>
          </div>
      </div>
      <div id="insertar_admin">
        <div id="div-row-admin-panel"  class="row">
            <form id="form-div-admin" class="col s12 m8 l4 offset-l4 offset-m2"  action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <h5>Administrador</h5>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                  <div class="input-field col s12">
                    <select name="tipo-libro">
                      <option value="" disabled selected>Tipo de libro</option>
                      <option value="Novela">Novela</option>
                      <option value="Manga">Manga</option>
                      <option value="Comic">Comic</option>
                    </select>
                  </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="titulo_libro" type="text" name="titulo_libro" class="validate">
                        <label for="titulo_libro">Titulo del libro</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="name" rows="8" cols="80"></textarea>
                        <label for="descripcion">Descripción</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="autor" name="autor" type="text" class="validate">
                        <label for="autor">Autor</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="artista"  name="artista" type="text" class="validate">
                        <label for="artista">Artista</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagen</span>
                            <input id="imagen-book" type="file" name="fileimgbook">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s4 m4 l4 offset-l4 offset-s4 offset-m4">
                        <button type="submit" name="btn-insertar-libro" class="btn red">Insertar</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
      <div id="update_admin">
        <div id="div-row-admin-panel"  class="row">
          <form id="form-div-admin" class="col s12 m8 l6 offset-l3 offset-m2"  action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col s12 m12 l12 center">
                    <h5>Administrador</h5>
                </div>
            </div>
            <div id="form-div-input-form" class="row">
              <div class="input-field col s12">
                <select id="titulo_libro2" name="titulo-libro" >
                  <option value="" disabled selected>Seleccionar libro</option>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM Books");
                  if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?php echo $row['titulo'];?>"><?php echo $row['titulo']; ?></option>
                   <?php

                  }
                 }
                    ?>
                </select>
              </div>
            </div>

            <div id="form-div-input-form" class="row">
              <div class="col s3 m3 l6">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 0, 8");
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <p>
                  <label>
                    <input type="checkbox" name="checked_id[]" class="filled-in" value="<?php echo $row['id_genero'] ?>" />
                    <span> <?php echo $row['nombre']; ?></span>
                  </label>
                </p>
                <?php
                    }
                  }
                ?>
              </div>
              <div class="col s3 m3 l6">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM Genders LIMIT 8, 16");
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <p>
                  <label>
                    <input type="checkbox" name="checked_id[]" class="filled-in" value="<?php echo $row['id_genero'] ?>" />
                    <span> <?php echo $row['nombre']; ?></span>
                  </label>
                </p>
                <?php
                    }
                  }
                ?>
              </div>
            </div>
            <div id="form-div-input-form" class="row">
                <div class="input-field col s4 m4 l3 offset-l5 offset-s4 offset-m4">
                    <button type="submit" name="btn-update-libro" class="btn red">Update</button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <div id="provicional_admin">
        <div id="div-row-admin-panel"  class="row">
          <form id="form-div-admin" class="col s12 m8 l4 offset-l4 offset-m2"  action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col s12 m12 l12 center">
                    <h5>Administrador</h5>
                </div>
            </div>
            <div id="form-div-input-form" class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" name="genero" rows="8" cols="80"></textarea>
                    <label for="descripcion">Género</label>
                </div>
            </div>
            <div id="form-div-input-form" class="row">
                <div class="input-field col s4 m4 l4 offset-l4 offset-s4 offset-m4">
                    <button type="submit" name="btn-insertar-genero" class="btn red">Insertar genero</button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <div id="capitulos_admin">
        <div id="div-row-admin-panel"  class="row">
          <form id="form-div-admin" class="col s12 m8 l6 offset-l3 offset-m2"  action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col s12 m12 l12 center">
                    <h5>Administrador</h5>
                </div>
            </div>
            <div id="form-div-input-form" class="row">
              <div class="input-field col s12">
                <select id="titulo_libro2" name="titulo-libro" >
                  <option value="" disabled selected>Seleccionar libro</option>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM Books");
                  if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?php echo $row['titulo'];?>"><?php echo $row['titulo']; ?></option>
                   <?php

                  }
                 }
                    ?>
                </select>
              </div>
            </div>

            <div id="form-div-input-form" class="row">

              <div class="col s12 m12 l12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Caperta capitulos</span>
                        <input id="chapter-book" type="file" name="chaptersbook[]" webkitdirectory directory multiple mozdirectory>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM Books_chapter");
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                 ?>
                 <?php
                 $dirname = $row['capitulo'];
                 $images = glob( $dirname."*.jpg" );
                 foreach($images as $image) {
                   echo '<img src="'.$image.'" height="50" width="50"></><br>';
                 }
                }
               }
                                ?>
              </div>

            </div>
            <div id="form-div-input-form" class="row">
                <div class="input-field col s4 m4 l3 offset-l5 offset-s4 offset-m4">
                    <button type="submit" name="btn-insert-chapter-libro" class="btn red">Insertar</button>
                </div>
            </div>
          </form>
        </div>
      </div>

    </main>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/admin.js"></script>

</body>

</html>
