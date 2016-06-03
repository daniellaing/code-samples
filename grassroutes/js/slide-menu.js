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