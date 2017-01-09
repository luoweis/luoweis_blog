
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("/auth/img/backgrounds/1.jpg");
    
    /*
        Form validation
    */
    $('.login-form input[type="email"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="email"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });

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
