

  $(document).ready(function(){

	// hide .navbar first
	$(".nav-appear").hide();

	// fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 170) {
				$('.nav-appear').fadeIn(150);
			} else {
				$('.nav-appear').fadeOut(150);
			}
		});


	});

});



$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready



  $( ".card" ).hover(
  function() {
    $(this).addClass('shadow-lg').css('cursor', 'pointer');
  }, function() {
    $(this).removeClass('shadow-lg');
  }
);



// $('.dropdown').on('show.bs.dropdown', function() {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
//   });
//
//   // Add slideUp animation to Bootstrap dropdown when collapsing.
//   $('.dropdown').on('hide.bs.dropdown', function() {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
//   });


// document ready
});
