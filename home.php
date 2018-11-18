<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>ReadZone</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- My css -->
      <link rel="stylesheet" href="css/home.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
      <!--################ BAR NAV ################-->
      <!-- Bar nav desktop -->
      <div class="navbar-fix">
         <nav>
            <div class="nav-wrapper">
               <div class="row">
                  <div class="col s12 m3 l2 center">
                     <a href="#" class="brand-logo white-text">Logo</a>
                     <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                     <i class="material-icons white-text">menu</i>
                     </a>
                  </div>
                  <div class="col s12 m3 l4">
                     <ul id="ul-nav-home" class="hide-on-med-and-down right">
                        <li><a href="#" class="white-text">Biblioteca</a></li>
                        <li><a href="#" class="white-text">Wiki</a></li>
                        <li><a href="#" class="white-text">Noticias</a></li>
                     </ul>
                  </div>
                  <div class="col s12 m3 l4">
                     <ul id="ul-nav-home" class="hide-on-med-and-down right">
                        <li>
                           <form class="hide-on-med-and-down right">
                              <div class="input-field">
                                 <input id="input-search-nav-home" placeholder="Search..." class="white" type="search" required>
                                 <label class="label-icon" for="search"><i class="material-icons black-text" style="margin-top: -7px;">search</i></label>
                              </div>
                              </label>
                           </form>
                        </li>
                     </ul>
                  </div>
                  <div class="col s12 m3 l2 center hide-on-med-and-down right">
                     <img id="image-profile-nav" src="https://vignette.wikia.nocookie.net/mahouka-koukou-no-rettousei/images/0/0c/Shiba_Tatsuya_Light_nOvel.png/revision/latest?cb=20160101144521" style="">
                  </div>
               </div>
            </div>
         </nav>
      </div>
      <!-- Bar nav mobile -->
      <ul class="sidenav" id="mobile-nav">
         <li><a href="#">Biblioteca</a></li>
         <li><a href="#">Wiki</a></li>
         <li><a href="#">Noticas</a></li>
         <li><a href="#">Perfil</a></li>
      </ul>
      <!--################################-->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/home.js"></script>
   </body>
</html>
