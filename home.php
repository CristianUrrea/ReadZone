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
      <header>
        <nav>
           <div class="nav-wrapper">
              <div class="row">
                 <div class="col s12 m2 l2 center">
                    <a href="#" class="brand-logo white-text">Logo</a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons white-text">menu</i>
                    </a>
                 </div>
                 <div class="col s12 m4 l4">
                    <ul id="ul-nav-home" class="hide-on-med-and-down right">
                       <li><a href="#" class="white-text">Biblioteca</a></li>
                       <li><a href="#" class="white-text">Wiki</a></li>
                       <li><a href="#" class="white-text">Noticias</a></li>
                    </ul>
                 </div>
                 <div class="col s12 m4 l4">
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
                 <!--
                 <div class="col s12 m3 l2 center hide-on-med-and-down right">
                    <img id="image-profile-nav" src="https://vignette.wikia.nocookie.net/mahouka-koukou-no-rettousei/images/0/0c/Shiba_Tatsuya_Light_nOvel.png/revision/latest?cb=20160101144521" style="">
                 </div>
                 -->
                 <div class="col s12 m2 l2 center hide-on-med-and-down right">
                   <ul class="right hide-on-med-and-down">
                    <li><a id="btn-sign-up" class="waves-effect waves-light btn">Sign Up</a></li>
                  </ul>
                 </div>
              </div>
           </div>
        </nav>
        <!-- Bar nav mobile -->
        <ul class="sidenav" id="mobile-nav">
           <li><a href="#">Biblioteca</a></li>
           <li><a href="#">Wiki</a></li>
           <li><a href="#">Noticas</a></li>
           <li><a href="#">Perfil</a></li>
        </ul>
      </header>
      <!--################################-->
      <main>
        <div id="content-home"class="row">
          <!--################ POPULAR AND RANKING ################-->
          <div id="divFather">
            <div class="col s12 m1 l1">
            </div>
            <!--################ POPULAR ################-->
            <div id="div1" class="col s12 m7 l7">
              <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="https://via.placeholder.com/150"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://via.placeholder.com/155"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://via.placeholder.com/160"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Right Aligned Caption</h3>
                      <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://via.placeholder.com/165"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!--################ RANKING ################-->
            <div id="div2" class="col s12 m3 l3">
            </div>
            <div class="col s12 m1 l1">
            </div>
          </div>
          <!--################ RECOMENDATIONS ################-->
          <div id="divFather2">
            <div class="col s12 m1 l1">
            </div>
            <div id="div1" class="col s12 m10 l10">
            </div>
            <div class="col s12 m1 l1">
            </div>
          </div>
        </div>
      </main>
      <!--################################-->
      <!--################ FOOTER ################-->
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      <!--################################-->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/home.js"></script>
   </body>
</html>
