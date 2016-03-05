// Prevent right clicking
// jQuery Trickshots - 100 Advanced Techniques (2015 Edition)

$(function(){
	$(document).on("contextmenu",function(e){
		e.preventDefault();
	});
});