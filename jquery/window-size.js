$(document).ready(function(){
	// include jQuery
	// https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js
	var ww = $(window).width();
	var wh = $(window).height();

	$('body').append('<div id="dim" style="position: fixed; bottom: 5px; left: 5px; background: rgba(0,0,0,.15); padding: 4px; font-family: sans-serif; font-size: 12px;">' + ww + ' x ' + wh + 'px</div>');

	$(window).resize(function() {
		var newWidth = $(window).width();
		var newHeight = $(window).height();
		$("#dim").html(newWidth + ' x ' + newHeight + 'px');
	});
});