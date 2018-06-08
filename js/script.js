$(function() {
    var url = window.location.href;

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    $(".email input").on('blur', function() {
        var string = $(".email input").val();
        if(!validateEmail(string)) {
            $('#validate-email').css('display','unset');
            let error = true;
        } else {
            $('#validate-email').css('display','none');
            let error = false;
        }
    });

    $(".subject input").on('blur', function() {
        var string = $(".subject input").val();
        if(string.length<4) {
            $('#validate-subject').css('display','unset');
            let error = true;
        } else {
            $('#validate-subject').css('display','none');
            let error = false;
        }
    });

    $(".msg textarea").on('blur', function() {
        var string = $(".msg textarea").val();
        if(string.length<8) {
            $('#validate-msg').css('display','unset');
            let error = true;
        } else {
            $('#validate-msg').css('display','none');
            let error = false;
        }
    });


    $( "form" ).submit(function( event ) {
        if(1) {
            console.log(error);
            event.preventDefault();
        }
        
    });

});