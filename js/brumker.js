$( document ).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      // edge: 'right', // Choose the horizontal origin
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  //texto area de contacto
  $('#textarea1').trigger('autoresize');
  //scroll de flecha en index
  $('a[href^="#nosotros"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 700, 'swing', function () {
			window.location.hash = target;
		});
	});
  //filter portafolio
  // $('.proyectos-selectores').click(function(){
  //   var proyectos = $(this).attr('id');
  //
  //   if (proyectos == 'all'){
  //     $('.proyectos-items').addClass('hide')
  //     setTimeout(function(){
  //       $('.proyectos-items').removeClass('hide');
  //     }, 1000);
  //   }else {
  //     $('.proyectos-items').addClass('hide');
  //     setTimeout(function(){
  //       $('.' + proyectos).removeClass('hide');
  //     }, 300);
  //   }
  // });
  $(function() {
  var selectedClass = "";
  $(".fil-cat").click(function(){
  selectedClass = $(this).attr("data-rel");
   $("#portfolio").fadeTo(100, 0.1);
  $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
  setTimeout(function() {
    $("."+selectedClass).fadeIn().addClass('scale-anm');
    $("#portfolio").fadeTo(300, 1);
  }, 300);

    });
  });
})
