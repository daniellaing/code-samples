/* Peek Button */
function(idPrefix) {
	id = idPrefix+'-js'; if (document.getElementById(id)) return;
	var head = document.getElementsByTagName('head')[0];
	el = document.createElement('script'); window.peekButton='Book Now'; el.id = id
	var date = new Date; var stamp = date.getMonth()+"-"+date.getDate()
	el.src = "https://pirassets.s3.amazonaws.com/assets/widget_button.js?id=512d6cac8446200002000002&ts="+stamp;
	head.appendChild(el); id = idPrefix+'-css'; el = document.createElement('link'); el.id = id
	el.href = "https://pirassets.s3.amazonaws.com/assets/widget_button.css?id=512d6cac8446200002000002&ts="+stamp;
	el.rel="stylesheet"; el.type="text/css"; head.appendChild(el);
	 }('peek-booking-button');

/* Facebook */
function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk');

/* Google Analytics */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-37233078-1']);
_gaq.push(['_trackPageview']);

function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  };