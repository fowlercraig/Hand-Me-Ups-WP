// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"

$(document).ready(function(){

	$(".wallpaper").background();
	$(".carousel").carousel();
	$(".equal").equalize();
	$(".cart-item").equalize({
		target: ".cart-item-cell"
	});
	$(".swap").swap();

});