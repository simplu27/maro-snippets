
// After document is ready
$(document).ready(function(){
	// Action code here
});

$(document).ready(function(){
	
});


// Get the value from an input
// <input type="text" name="checkListItem"/>
var input = $('input[name=checkListItem]').val();


// Events
$(document).ready(function() {
    $('thingToTouch').event(function() {
        $('thingToAffect').effect();
    });
});

// This
$(document).ready(function() {
    $('div').click(function() {
        $(this).fadeOut('slow');
    });
});

// Prevent Default
$( "a" ).click(function( event ) {
	event.preventDefault();
	$( "<div>" )
	.append( "default " + event.type + " prevented" )
	.appendTo( "#log" );
});

// Resize
$( window ).resize(function() {
	$( "body" ).prepend( "<div>" + $( window ).width() + "</div>" );
});

// Hover

$('div').hover(
  function(){
      $(this).addClass('active');
  },
  function(){
      $(this).removeClass('active');
  }
);


// Keydown

$(document).ready(function(){
	$(document).keydown(function(){
	    $('div').animate({left: '+=10px'}, 500);
	});
});

$(document).ready(function() {
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
				$('img').animate({left: "-=10px"}, 'fast');
				break;
			// Up Arrow Pressed
			case 38:
				$('img').animate({top: "-=10px"}, 'fast');
				break;
			// Right Arrow Pressed
			case 39:
				$('img').animate({left: "+=10px"}, 'fast');
				break;
			// Down Arrow Pressed
			case 40:
				$('img').animate({top: "+=10px"}, 'fast');
				break;
		}
	});
});