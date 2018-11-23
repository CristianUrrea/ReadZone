$(document).ready(function() {
    $(".sidenav").sidenav();
    $(".carousel.carousel-slider").carousel({
        dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        duration: 300
    });

    /*################## INPUT SEARCH ##################*/
    window.onload = function() {
        $(document).ready(function() {
            var trig = 1;
            //fix for chrome
            $("#search").addClass('searchbarfix');

            //animate searchbar width increase to  +150%
            $('#search').click(function(e) {
                //handle other nav elements visibility here to avoid push down
                //$('.search-hide').addClass('hide');
                if (trig == 1) {
                    $('#navfix2').animate({
                        width: '+=100',
                        marginRight: 0
                    }, 400);
                    trig++;
                }
            });
            // if user leaves the form the width will go back to original state
            $("#search").focusout(function() {
                $('#navfix2').animate({
                    width: '-=100'
                }, 400);
                trig = trig - 1;
                //handle other nav elements visibility first to avoid push down
                //$('.search-hide').removeClass('hide');
            });
        });
    }

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
