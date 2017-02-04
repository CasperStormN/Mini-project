jQuery( document ).ready(function() {
    console.log( "ready!" );
});

jQuery('.navbar-toggle').click(function() {
	jQuery('#main-nav nav').toggleClass('mobile-menu');
});