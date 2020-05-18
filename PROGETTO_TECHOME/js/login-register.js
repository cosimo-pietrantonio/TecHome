/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){

    var email=$("#email").val();
    var pass=$("#password").val();
    var checkRadio;
    if (document.getElementById('buttoncliente').checked) {
        checkRadio = document.getElementById('buttoncliente').value;
    } else {
        checkRadio = document.getElementById('buttonsocio').value;
    }

    if (email=="") {
        shakeModal("Inserire l'email");
    }
    else if (! validateEmail(email)) {
        shakeModal("Formato email errato! (xyz@abc.com) ");
    }
    else if (pass=="") {
        shakeModal("Inserire la password");
    }

    else
    {
        //$("#loading_spinner").css({"display":"block"});
        $.ajax
        ({
            type:'post',
            url:'loginDB.php',
            data:{
                email:email,
                password:pass,
                tipo: checkRadio
            },
            success:function(response) {

                if(response.trim() === "success")
                {
                    window.location.href="index.php";
                }
                else
                {
                    $("#loading_spinner").css({"display":"none"});
                    shakeModal(response);
                }
            }
        });
    }
/*
    $.post( "/login", function( data ) {
        window.location.replace("/index.php");
            if(data == 1){
                window.location.replace("/home");
            } else {
                 shakeModal(); 
            }
        });
*/

/*   Simulate error message from the server   */
     //shakeModal();
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function shakeModal(error){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html(error);
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 700 );
}

   