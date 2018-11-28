$(document).ready(function() {
    $(".sidenav").sidenav();

    /*################ CAROUSEL DEL COTENIDO POPULAR ################*/
    $(".carousel.carousel-slider").carousel({
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
        $("hr").removeClass("animate").addClass("stopanimation");
        setTimeout(startAnimation, 10);
    }

    function startAnimation() {
        hrWidth = 100;
        $("hr")
            .removeClass("stopanimation")
            .addClass("animate");
        $(".carousel-progress-bar-timer").css("width", 100 + "%");
    }

});
