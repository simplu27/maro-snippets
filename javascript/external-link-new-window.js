
$('a').each(function() {
	var a = new RegExp('/' + [removed].host + '/');
	if(!a.test(this.href)) {
		$(this).click(function(event) {
			event.preventDefault();
			event.stopPropagation();
			window.open(this.href, '_blank');
		});
	}
});

//	Now every a href in your page will open in a new window
//	if it doesnt go somewhere in your own website!