$("#header .btn-burg").on('click', function(e){

	e.preventDefault();
	$('#header').addClass('mobile-menu--active');
	$('#header-mobile').addClass('mobile-menu--active');

});

$("#header-mobile .btn-close").on('click', function(e){

	e.preventDefault();
	$('#header').removeClass('mobile-menu--active');
	$('#header-mobile').removeClass('mobile-menu--active');

});