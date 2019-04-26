$(document).ready(function(){
  $('select').formSelect();
  $('#example2').paginate({itemsPerPage: 12});
  $('#btn-search-advanced').click(function(){
    $('#div-content-search-advanced').toggle();
  });
});
