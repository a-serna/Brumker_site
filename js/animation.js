$(document).ready(function(){
  // $(window).scroll(function(){
  // var y = $(this).scrollTop();
  // console.log(y);
  // });
  var scroll;
  $(window).scroll(function() {
    scroll = $(window).scrollTop();

    if (scroll > 200) {
      $(".text").addClass('animated fadeInLeftBig').css({"opacity":"1"});
      $(".item-list").addClass('animated fadeIn').css({"opacity":"1"});
      $("#img-ach").addClass('animated hinge bounceInRight').css({"opacity":"1",});
      $("#img-man").addClass('animated hinge slideInUp').css({"opacity":"1",});
      $("#img-web").addClass('animated hinge slideInUp').css({"opacity":"1",});
    }

  });
})
