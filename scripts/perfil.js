$(document).ready(function() {
  $(".tabs").tabs();
  $('.modal').modal();

  var $tabs = $('.tabs').tabs({
    onShow: function( tab ) {
      var $carousel = $( tab ).find('.colgallery')
      $carousel.flickity('resize');
    },
  });

});
