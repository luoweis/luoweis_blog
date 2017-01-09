
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("/auth/img/backgrounds/register.jpg");
    
    /*
        Form validation
    */
    $('.register-form input[type="email"], .register-form input[type="password"], .register-form textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });

    $('.register-form').on('submit', function(e) {

        $(this).find('input[type="text"],input[type="email"], input[type="password"], textarea').each(function(){
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                $(this).removeClass('input-error');
            }
        });

    });
    
    
});
