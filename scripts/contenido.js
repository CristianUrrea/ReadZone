$(document).ready(function() {
  $("#myTable").pageMe({
    pagerSelector: "#myPager",
    activeColor: "red",
    prevText: "Anterior",
    nextText: "Siguiente",
    showPrevNext: true,
    hidePageNumbers: false,
    perPage: 10
  });
});
