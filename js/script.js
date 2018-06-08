var url = window.location.href; 
$( "#btn" ).on( "click", function() {
	if ( $('#responsive-menu').css('display') == 'none' ){
    	$('#responsive-menu').slideDown();
        switch(url) {
            case "http://localhost/rusevProjects/rusev.net/":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '70px');
                break;
            case "http://localhost/rusevProjects/rusev.net/content/about.php":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '20px');
                break;
            case "http://localhost/rusevProjects/rusev.net/content/contact.php":
                $('#responsive-menu ul li:last-child').css('margin-bottom', '20px');
                break;
        }
    } else {
     	$('#responsive-menu ul li:last-child').css('margin-bottom', '0px')
    	$('#responsive-menu').slideUp();
    }
});