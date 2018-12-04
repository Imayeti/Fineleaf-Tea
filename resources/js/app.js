
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});





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

});
