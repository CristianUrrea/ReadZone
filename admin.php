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
    <link rel="stylesheet" href="css/registro.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include_once('acciones/libros.php') ?>
</head>

<body>
    <main>
        <div style="margin-top: 20px;"class="row">
            <form id="form-div-registro" class="col s12 m8 l4 offset-l4 offset-m2"  action="" method="post" enctype="multipart/form-data">
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
                        <input id="descripcion" name="descripcion" type="text" class="validate">
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
    </main>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/admin.js"></script>
</body>

</html>
