$(document).ready(function(){
  // $(window).scroll(function(){
  // var y = $(this).scrollTop();
  // console.log(y);
  // });
  // var scroll;
  $(window).scroll(function() {
    scroll = $(window).scrollTop();

    if (scroll > 200) {
      $(".text").addClass('animated fadeInLeftBig').css({"opacity":"1"});
      $(".item-list").addClass('animated fadeIn').css({"opacity":"1"});
      $("#img-ach").addClass('animated hinge bounceInRight').css({"opacity":"1"});
      $("#img-man").addClass('animated hinge slideInUp').css({"opacity":"1"});
      $("#img-web").addClass('animated hinge slideInUp').css({"opacity":"1"});
      $("#img-house").addClass('animated hinge slideInUp').css({"opacity":"1"});
      $("#cotizar").addClass('animated hinge fadeIn').css({"opacity":"1"});
    };
    if (scroll > 650) {
      $(".text-2").addClass('animated fadeInRightBig').css({"opacity":"1"});
      $(".item-list-2").addClass('animated fadeIn').css({"opacity":"1"});
      $(".item-list-4").addClass('animated fadeIn').css({"opacity":"1"});
      $("#img-interactive").addClass('animated hinge bounceInLeft').css({"opacity":"1"});
      $("#img-producto").addClass('animated hinge bounceInLeft').css({"opacity":"1"});
      $("#cotizar-2").addClass('animated hinge fadeIn').css({"opacity":"1"});
    };
    if (scroll > 900) {
      $(".text-3").addClass('animated fadeInLeftBig').css({"opacity":"1"});
      $(".item-list-3").addClass('animated hinge fadeIn').css({"opacity":"1"});
      $("#cotizar-3").addClass('animated hinge fadeIn').css({"opacity":"1"});
      $("#img-app").addClass('animated hinge fadeInRightBig').css({"opacity":"1"});
    }

  });
})
