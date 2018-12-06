$(document).ready(function() {

    /*################ HAMBURGER ################*/
    $(".sidenav").sidenav();
    /*################ DROPDOWN DIV DEL LOGIN ################*/
    $('#a-div-login').webuiPopover({
        html: true,
        url: '#div-nav-login-form',
        animation: 'fade',
        placement: 'bottom-left'
    });

    /*################ BOTÓN PARA REGRESAR A LA PARTE SUPERIOR DE LA PÁGINA ################*/
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').removeClass('scale-out');
                } else {
                    $('#back-to-top').addClass('scale-out');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });

        $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
});
