$(document).ready(function() {
  /*################ CAROUSEL DEL COTENIDO POPULAR ################*/
  $("#div-content-carousel-popular.carousel-slider").carousel({
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 300
  });

  setTimeout(autoplay, 4000);

  function autoplay() {
    $(".carousel").carousel("next");
    resetAnimation();
    setTimeout(autoplay, 4000);
  }

  /* Kick off the initial slide animation when the document is ready */
  var hrWidth = 100;

  $(".carousel-progress-bar-timer").css("width", hrWidth + "%");

  function resetAnimation() {
    hrWidth = 0;
    $(".carousel-progress-bar-timer").css("width", hrWidth + "%");
    $("hr")
      .removeClass("animate")
      .addClass("stopanimation");
    setTimeout(startAnimation, 10);
  }

  function startAnimation() {
    hrWidth = 100;
    $("hr")
      .removeClass("stopanimation")
      .addClass("animate");
    $(".carousel-progress-bar-timer").css("width", 100 + "%");
  }
  $('.modal').modal();

  /*################ CAROUSEL DEL COTENIDO DE RECOMENDACIONES ################*/
  // $("#div-content-carousel-recomendations.carousel").carousel({
  //   dist: 0,
  //   shift: 0,
  //   padding: 35,
  //   numVisible: 5
  // });
});
