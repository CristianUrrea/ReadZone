<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ReadZone</title>
    <!-- Import flickty -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <!-- <link rel="stylesheet" href="css/wiki.css"> -->
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style media="screen">
    #image-div-content-type-book {
      height: 200px;
      width: 300px;
    }
    </style>
</head>

<body>
    <!--################ NAV ################-->
    <?php include 'nav.php'; ?>
        <!--################################-->

        <main>
          <div style="height: 100px; margin-top: 20px;"class="row">
            <div class="col s12 m12 l8 offset-l2">
              <ul class="tabs">
                <li class="tab col s4 m4 l4"><a class="red-text" href="#general">General</a></li>
                <li class="tab col s4 m4 l4"><a class="red-text" href="#novela">Novelas</a></li>
                <li class="tab col s4 m4 l4"><a class="red-text" href="#manga">Mangas</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <!--################ GENEROS GENERALES ################-->

            <div id="general" class="col s12 m12 l8 offset-l2">
                <div id="div-row-contenido-info" class="row">
                    <div class="col s12 m12 l12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img id="image-div-content-type-book" src="imagenes/wiki/fantasia.png" class="fadeIn">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">Fantasía</span>
                                    <p>El genero fantasía gira a entorno a representar mentalmente sucesos, historias o imágenes de cosas que no existen en la realidad o que son o fueron reales pero no están presentes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div-row-contenido-info" class="row">
                    <div class="col s12 m12 l12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img id="image-div-content-type-book" src="imagenes/wiki/historico.png" class="fadeIn">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">Histórico</span>
                                    <p>El genero histórico gira entorno a acontecimientos reales del pasado.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div-row-contenido-info" class="row">
                    <div class="col s12 m12 l12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img id="image-div-content-type-book" src="imagenes/wiki/cienciaficcion.png" class="fadeIn">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">Ciencia Ficción</span>
                                    <p>El genero de ciencia ficción gira entorno a hipotético logros científicos y técnicos que podrían sucederse en el futuro próximo, en los cuales resultan ser el fruto de la imaginación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div-row-contenido-info" class="row">
                    <div class="col s12 m12 l12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img id="image-div-content-type-book" src="imagenes/wiki/cyberpunk.png" class="fadeIn">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">Cyberpunk</span>
                                    <p>Cyberpunk es un subgenero de la cienca ficción que gira entorno a la alta tecnología y de la redes informáticas en una sociedad que se viene abajo y profiere gritos de rebeldía.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div-row-contenido-info" class="row">
                    <div class="col s12 m12 l12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img id="image-div-content-type-book" src="imagenes/wiki/terror.png" class="fadeIn">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">Terror</span>
                                    <p>El genero de terror gira entorno a acontecimientos que produsan una sensación de miedo o angustia en su escala máxima.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--################################-->
            <!--################ GENEROS DE NOVELAS ################-->
            <div id="novela" class="col s12 m12 l8 offset-l2">
              <div id="div-row-contenido-info" class="row">
                  <div class="col s12 m12 l12">
                      <div class="card horizontal">
                          <div class="card-image">
                              <img id="image-div-content-type-book" src="imagenes/wiki/wuxia.png" class="fadeIn">
                          </div>
                          <div class="card-stacked">
                              <div class="card-content">
                                  <span class="card-title">Wuxia</span>
                                  <p>El genero wuxia significa literalmente "Héroes marciales". Historias ficticias sobre humanos normales que pueden lograr habilidades de lucha sobrenaturales a través del entrenamiento de artes marciales chinas y el cultivo de energía interna. Los temas de caballería, tragedia, venganza y romance son comunes.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="div-row-contenido-info" class="row">
                  <div class="col s12 m12 l12">
                      <div class="card horizontal">
                          <div class="card-image">
                              <img id="image-div-content-type-book" src="imagenes/wiki/xianxia.png" class="fadeIn">
                          </div>
                          <div class="card-stacked">
                              <div class="card-content">
                                  <span class="card-title">Xianxia</span>
                                  <p>El genero xianxia significa literalmente "Héroes inmortales". Historias de ficción con magia, demonios, fantasmas, inmortales y una gran cantidad de folklore / mitología china. Los protagonistas (por lo general) intentan cultivarse a la inmortalidad, buscando la vida eterna y el pináculo de la fuerza. Muy inspirado en el taoísmo.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="div-row-contenido-info" class="row">
                  <div class="col s12 m12 l12">
                      <div class="card horizontal">
                          <div class="card-image">
                              <img id="image-div-content-type-book" src="imagenes/wiki/xuanhuan.png" class="fadeIn">
                          </div>
                          <div class="card-stacked">
                              <div class="card-content">
                                  <span class="card-title">Xuanhuan</span>
                                  <p>El genero Xuanhuan significa literalmente "Fantasía Misteriosa". Un amplio género de historias de ficción que mezcla el folclore / mitología china con elementos y escenarios extranjeros.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--################################-->
            <!--################ GENEROS DE MANGAS ################-->
            <div id="manga" class="col s12 m12 l8 offset-l2">
              <div id="div-row-contenido-info" class="row">
                  <div class="col s12 m12 l12">
                      <div class="card horizontal">
                          <div class="card-image">
                              <img id="image-div-content-type-book" src="imagenes/wiki/Shonen.png" class="fadeIn">
                          </div>
                          <div class="card-stacked">
                              <div class="card-content">
                                  <span class="card-title">Shonen</span>
                                  <p>Es una categoría del manga y anime dirigido básicamente a un público adolescente masculino.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="div-row-contenido-info" class="row">
                  <div class="col s12 m12 l12">
                      <div class="card horizontal">
                          <div class="card-image">
                              <img id="image-div-content-type-book" src="imagenes/wiki/Seinen.png" class="fadeIn">
                          </div>
                          <div class="card-stacked">
                              <div class="card-content">
                                  <span class="card-title">Seinen</span>
                                  <p>Es una categoría o genero de manga enfocada en la audiencia mayor de 18 años.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </main>
        <!--################################-->
        <!--################ FOOTER ################-->
        <?php include 'footer.php'; ?>
            <!--################################-->

            <!--Import jQuery before materialize.js -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <!--Import jQuery before webuiPopover.js -->
            <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
            <!-- Import flickty -->
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

            <script type="text/javascript" src="scripts/comun.js"></script>
            <script type="text/javascript" src="scripts/wiki.js"></script>
</body>

</html>
