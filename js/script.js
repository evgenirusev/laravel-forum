var url = window.location.href; 
$( "#btn" ).on( "click", function() {
	if ( $('#responsive-menu').css('display') == 'none' ){
    	$('#responsive-menu').slideDown();
        switch(url) {
            case "http://intersolutions.ml/":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '70px');
                break;
            case "http://intersolutions.ml/content/about.php":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '20px');
                break;
            case "http://intersolutions.ml/content/contact.php/":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '20px');
                break;
        }
    } else {
     	$('#responsive-menu ul li:last-child').css('margin-bottom', '0px')
    	$('#responsive-menu').slideUp();
    }
});
