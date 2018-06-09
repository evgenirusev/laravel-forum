$(function() {
    var url = window.location.href;
    let emailError = true;
    let subjectError = true;
    let msgError = true;
    let email;
    let subject;
    let msg;
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    $(".email input").on('blur', function() {
        email = $(".email input").val();
        if(!validateEmail(email)) {
            $('#validate-email').css('display','unset');
            emailError = true;
        } else {
            $('#validate-email').css('display','none');
            emailError = false;
        }
    });

    $(".subject input").on('blur', function() {
        subject = $(".subject input").val();
        if(subject.length<4) {
            $('#validate-subject').css('display','unset');
            subjectError = true;
        } else {
            $('#validate-subject').css('display','none');
            subjectError = false;
        }
    });

    $(".msg textarea").on('blur', function() {
        msg = $(".msg textarea").val();
        if(msg.length<8) {
            $('#validate-msg').css('display','unset');
            msgError = true;
        } else {
            $('#validate-msg').css('display','none');
            msgError = false;
        }
    });

    $( "form" ).submit(function( event ) {
        if(emailError || msgError || subjectError) {
            if(emailError) {
                alert("Invalid Email Adress");
            } else if (msgError){
                alert("Message too short");
            } else if (subjectError){
                alert("Subject too Short");
            }
            event.preventDefault();
        } else {
            event.preventDefault();

            var params = "email="+email+"&subject="+subject+"&msg="+msg;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'processor/ajax-processor.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                console.log(this.responseText);
            }

            xhr.send(params);

            //$("#validate-sent").css("display","unset");
        }
        
    });

});