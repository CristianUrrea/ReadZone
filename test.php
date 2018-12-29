<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ReadZone</title>
    <!-- other head stuff... -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style media="screen">
    /* external css: flickity.css */

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 100%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  counter-increment: gallery-cell;
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}





/* position dots in gallery */
.flickity-page-dots {
  bottom: 0px;
  display: none;
}

    </style>
</head>

<body>

  <!-- Flickity HTML init -->
  <div class="gallery js-flickity">
    <div class="gallery-cell"></div>
    <div class="gallery-cell"></div>
    <div class="gallery-cell"></div>
    <div class="gallery-cell"></div>
    <div class="gallery-cell"></div>
  </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>

    </script>
</body>

</html>
