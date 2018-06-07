console.log("hello");
$( "#btn" ).on( "click", function() {
	if ( $('#responsive-menu').css('display') == 'none' ){
    	$('#responsive-menu').slideDown();
    	$('#responsive-menu ul li:last-child').css('margin-bottom', '70px')
    } else {
    	$('#responsive-menu ul li:last-child').css('margin-bottom', '0px')
    	$('#responsive-menu').slideUp();
    }
});