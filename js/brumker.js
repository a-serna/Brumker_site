$( document ).ready(function(){
  $('.button-collapse').sideNav({
    menuWidth: 300, // Default is 240
    // edge: 'right', // Choose the horizontal origin
    draggable: true // Choose whether you can drag to open on touch screens
  });
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
  $(function() {
    var selectedClass = "";
    $(".proyectos-selectores").click(function(){
      selectedClass = $(this).attr("id");
      $(".block-items").fadeTo(100, 0.1);
      $(".block-items a").not("."+selectedClass).fadeOut().removeClass('scale-anm');
      setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('scale-anm');
        $(".block-items").fadeTo(300, 1);
      }, 300);
    });
  });
})
