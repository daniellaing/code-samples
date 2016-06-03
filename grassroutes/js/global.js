// Slide Menu

jQuery(document).ready(function(){
jQuery(".menu > ul > li").hover(
function(){
jQuery(this).find("ul").slideDown(400);
},
function(){
jQuery(this).find("ul").slideUp(400);
});
});

// Book Rotator

function swapbanner(){
    var jQueryactive = jQuery('ul.books_rotate li.active');
    var jQuerynext = (jQuery('ul.books_rotate li.active').next().length > 0) ? jQuery('ul.books_rotate li.active').next() : jQuery('ul.books_rotate li:first-child');
    jQueryactive.fadeOut(600).removeClass('active');
    jQuerynext.fadeIn(600).addClass('active');  
}
jQuery(document).ready(
function(){
	// Run swapbanner() function every 6secs
	 var jQuerybannercount = jQuery('ul.books_rotate li').length;
	timer = window.setInterval('swapbanner()', 6000);
});