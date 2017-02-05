$(document).ready(function(){
  // $(window).scroll(function(){
  // var y = $(this).scrollTop();
  // console.log(y);
  // });
  var scroll;
  $(window).scroll(function() {
    scroll = $(window).scrollTop();

    if (scroll > 200) {
      $(".text").addClass('animated fadeInLeftBig');
    }

  });
})
