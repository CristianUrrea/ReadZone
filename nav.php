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
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <link rel="shortcut icon" type="image/png" href="imagenes/IconWeb.png" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<style media="screen">

#input-div-nav-search:hover::placeholder {
  color: red;

}

#input-div-nav-search:hover {
  border: 1px solid #f44336;

}


</style>
<?php
// session_start();

require_once("db/conexiondb.php");
include('acciones/loginRegistro.php');
include('acciones/busqueda.php');

  //
  // if (isset($_SESSION['username'])) {
  //     // $_SESSION['msg'] = "You must log in first";
  //     // header('location: perfil.php');
  //
  //
  //     echo ' <script type="text/javascript">alert("Logeado")</script>';
  // } else {
  //     // echo ' <script type="text/javascript">alert("Logeado")</script>';
  //     // include('acciones/cambiarPass.php');
  //     // include('acciones/perfil.php');
  //     // include('acciones/busqueda.php');
  // }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: index.php");
  }

?>
<body>
    <header>

        <!--################ BAR NAV ################-->
        <nav class="nav-border">
            <div class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <div class="col s12 m12 l6 nav-wrapper">
                        <a id="nav-a-icon-menu-sidenav" href="#" class="right sidenav-trigger" data-target="mobile-nav">
                            <i class="material-icons">menu</i>
                        </a>
                        <!--<a href="#"><i class="material-icons right hide-on-large-only">search</i></a>-->
                        <ul id="ul-div-nav-links" class="left">
                            <li>
                                <a class="search-hide" href="index.php"><img style="position: relative; margin: -10px;" src="imagenes/IconWeb.png" alt="" height="30" width="30"> </a>
                            </li>
                            <li>
                                <a class="search-hide" href="biblioteca.php">Biblioteca</a>
                            </li>
                            <li>
                                <a class="search-hide" href="wiki.php">Wiki</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col s12 m2 l4">
                        <div class="hide-on-med-and-down">
                          <form action="" method="post">
                            <div id="nav-div-search" class="search-wrapper">
                                <div class="input-field">
                                    <input id="input-div-nav-search" type="search" name="input-div-nav-search" placeholder="Buscar..." class="right searchbarfix white">
                                    <i id="i-div-nav-search" class="material-icons grey-text">search</i>

                                </div>
                            </div>
                          </form>

                        </div>
                    </div>
                    <div class="col s12 m2 l2 nav-wrapper">
                        <ul id="ul-div-nav-dropdown" class="hide-on-med-and-down right">
                          <?php  if (isset($_SESSION['username'])) {?>
                            <?php
                            $userSession = $_SESSION['username'];
                            $query = mysqli_query($conn, "SELECT * FROM Users WHERE correo = '$userSession'");
                            if (mysqli_num_rows($query) > 0) {
                              while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                              <li class="" style="margin-left: 10px;"><a href="perfil.php"><img style="position: relative; margin: -7px;" class="circle" style=""src="<?php echo $row['imagen_perfil']; ?>" alt="" height="25" width="25"></a></li>
                            <?php
                              }
                            }
                             ?>
                            <li>
                                <a id="a-div-log-out" name="a-div-log-out" href="index.php?logout">logout</a>
                              <?php } else { ?>
                                <a id="a-div-login" href="#">Login</a>
                              <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Div content login -->
        <div id="div-nav-login-form" class="webui-popover-content">
            <form action="index.php" method="post">
              <span class="red-text"><?php include('acciones/errors.php'); ?></span>
                <div class="input-field">
                    <i class="material-icons iconis prefix">account_box</i>
                    <input id="username-login" type="text" name="username-login" placeholder="email">
                </div>

                <div class="input-field">
                    <i class="material-icons iconis prefix">lock</i>
                    <input id="userpass-login" type="password" name="userpass-login" placeholder="contraseña">
                </div>
                <button id="btn-div-login-form-inicio-sesion" class="btn waves-effect waves-red white-text modal-trigger red" type="submit" name="btn-div-login-form-inicio-sesion" href="#modal1">Inciar sesión</button>
            </form>
            <br>
            <ul>
                <li><a href="registro.php">Registrar</a></li>
                <li>&nbsp</li>
                <li><a href="recuperar.php">¿Olvidates tu contraseña? </a></li>
            </ul>
        </div>
        <!-- Bar nav mobile -->
        <?php  if (isset($_SESSION['username'])) {
          $email_user = $_SESSION['username'];
          $query = mysqli_query($conn, "SELECT * FROM Users WHERE correo = '$email_user'");
          if (mysqli_num_rows($query) == 1) {
            while ($row = mysqli_fetch_assoc($query)){
          ?>
          <ul id="mobile-nav" class="sidenav right">
            <li class="sidenav-header" style="background-image: url(<?php echo $row['imagen_perfil'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
         <div class="row" style="background: rgb(33,150,243, 60%);">
           <div class="col s4" style="margin-top: 20px;">
               <img src="<?php echo $row['imagen_perfil']; ?>" width="100" height="100" alt="" class="circle">
           </div>
           <div class="col s8" style="margin-top: 85px;">
               <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown"><?php echo $row['nombre']; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
           </div>
         </div>
       </li>
       <li>
         <div class="row">
             <form action="" method="post">
               <div id="nav-div-search" class="search-wrapper col s10 offset-s1">
                   <div class="input-field">
                       <input id="input-div-nav-search_mobile" type="search" name="input-div-nav-search" placeholder="Buscar..." class="right searchbarfix white">
                   </div>
               </div>
             </form>
         </div>
       </li>
       <li><a href="perfil.php">Perfil</a></li>
       <li>
         <a id="a-div-log-out" name="a-div-log-out" href="index.php?logout='1'">logout</a>
       </li>

          </ul>

        <?php
          }
        }
      } else {
        ?>

        <ul id="mobile-nav" class="sidenav right">
            <li id="li-nav-login-form">
                <div id="div-nav-login-form" style="">
                    <form action="index.php" method="post">
                      <?php include('acciones/errors.php'); ?>
                        <div class="input-field">
                            <i class="material-icons iconis prefix">account_box</i>
                            <input type="text" name="username-login" placeholder="email">
                        </div>
                        <div class="input-field">
                            <i class="material-icons iconis prefix">lock</i>
                            <input type="password" name="userpass-login" placeholder="contraseña">
                        </div>
                        <button id="btn-div-login-form-inicio-sesion-2" class="btn waves-effect waves-red white-text red" type="submit" name="btn-div-login-form-inicio-sesion">Inciar sesión</button>
                    </form>
                    <ul>
                        <li><a style="font-size: 13px;" href="registro.php">Registrar</a></li>
                        <li><a style="font-size: 13px;" href="recuperar.php">¿Olvidates tu contraseña? </a></li>
                    </ul>
                </div>
            </li>
            <li><a href="biblioteca.php">Biblioteca</a></li>
            <li><a href="wiki.php">Wiki</a></li>

        </ul>
        <?php
      }
         ?>
    </header>
    <!--################################-->

    <!--Import jQuery before materialize.js -->

    <!--Import jQuery before webuiPopover.js -->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/comun.js"></script>

</body>

</html>
