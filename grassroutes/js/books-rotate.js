// Book Rotator

function swapbanner(){
    var jQueryactive = jQuery('ul.books_rotate li.active');
    var jQuerynext = (jQuery('ul.books_rotate li.active').next().length > 0) ? jQuery('ul.books_rotate li.active').next() : jQuery('ul.books_rotate li:first-child');
    jQueryactive.animate({opacity : "hide"}, "slow").removeClass('active');
    jQuerynext.animate({opacity : "show"}, "slow").addClass('active');  
}
jQuery(document).ready(
function(){
	// Run swapbanner() function every 6secs
	var jQuerybannercount = jQuery('ul.books_rotate li').length;
	timer = window.setInterval('swapbanner()', 6000);
});