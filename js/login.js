$(document).ready(function(){

	//initial
	$('#login-page').load('parts/login-parts/login-content.php');

	//Clicks
	$(document).on('click', '#reg-click', function() {
      $('#login-page').load('parts/login-parts/register-content.php');
      return false;
    });

    $(document).on('click', '#login-click', function() {
      $('#login-page').load('parts/login-parts/login-content.php');
      return false;
    });

    $(document).on('click', '#forgot-click', function() {
      $('#login-page').load('parts/login-parts/forgot-password.php');
      return false;
    });

    //Username Check For Login And Forgot Password
    var x_timer;    
    $(document).on('change','#username',function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 500);
    }); 

	function check_username_ajax(username){
    	$("#user-result").html('<img src="img/login-icons/ajax-loader.gif" width="25" height="25" />');
    		$.post('parts/login-parts/username-check.php', {'uname':username}, function(data) {
    			if(data=='wrong'){
    				var code='<img src="img/login-icons/not-available.png" width="25" height="25"/><label>Account is not Registered.</label>';
    				$("#user-result").html(code);
    				$('#loginbtn').attr('disabled', 'disabled');
    			}
    			else{
    				var code='<img src="img/login-icons/available.png" width="25" height="25" /><label>Account is Registered.</label>';
    				$("#user-result").html(code);
    				$('#loginbtn').removeAttr('disabled');
    			}

      			
    	});
	}

	//Login Handle
	$(document).on("submit","#loginForm",function(e){
		$("#dimScreen").show();
    	$.ajax({
        	   type: "POST",
        	   url: "parts/login-parts/login-forms.php",
        	   data: $("#loginForm").serialize(), // serializes the form's elements.
        	   success: function(data)
        	   {
        	   		$("#dimScreen").hide();
        	       if(data=='verify'){
        	       		$('#login-page').load('parts/login-parts/'+ data +'.php');
        	   		}
        	   		else if(data=='user'){
        	   			window.open('index.php','_self');
        	   		}
        	   		else{
        	   			var error='<label>Wrong Password.</label>';
        	   			$("#error-msg").html(error);
        	   		}

        	   	}	
        	 });

	   	e.preventDefault(); // avoid to execute the actual submit of the form.
	});

	//OTP Handle
	$(document).on("submit","#otp-form",function(e){
		$("#dimScreen").show();
    	$.ajax({
        	   type: "POST",
        	   url: "parts/login-parts/verify-otp.php",
        	   data: $("#otp-form").serialize(), // serializes the form's elements.
        	   success: function(data)
        	   {
        	   	   $("#dimScreen").hide();
        	       if(data=='verified'){
        	       		window.open('parts/admin-panel/index.php','_self');
        	   		}
        	   		else{
        	   			$('#login-page').load('parts/login-parts/login-content.php');
        	   		}

        	   	}	
        	 });

	   	e.preventDefault(); // avoid to execute the actual submit of the form.
	});

	//Password Field Verify
	$(document).on('keyup','#confirm_password', function () {
    	if ($(this).val() == $('#password').val()) {
    		$('#message').html('');
        	$('#register').removeAttr('disabled');
    	} 
    	else{ 
    		$('#message').html('Password not matching.').css('color', 'red');
    		$('#register').attr('disabled', 'disabled');
		}
	});


	//Register Sign Up Email id Verify
	var x_timer;    
    $(document).on('change','#email-register',function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax_register(user_name);
        }, 500);
    }); 

	function check_username_ajax_register(username){
    	$("#user-result").html('<img src="img/login-icons/ajax-loader.gif" width="25" height="25" />');
    		$.post('parts/login-parts/username-check.php', {'username':username}, function(data) {
    			if(data=='wrong'){
    				var code='<img src="img/login-icons/available.png" width="25" height="25"/><label>Account is available.</label>';
    				$("#user-result").html(code);
    				$('#register').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');
    				
    			}
    			else{
    				var code='<img src="img/login-icons/not-available.png" width="25" height="25" /><label>Account is already Registered.</label>';
    				$("#user-result").html(code);
    				$('#register').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    $('#confirm_password').attr('disabled', 'disabled');
    			}

      			
    	});
	}


	//Mobile Number Sign Up Verify
	var x_timer;    
    $(document).on('change','#mobile-register',function (e){
        clearTimeout(x_timer);
        var mobile = $(this).val();
        x_timer = setTimeout(function(){
            check_mobile_ajax_register(mobile);
        }, 500);
    }); 

	function check_mobile_ajax_register(mobile){
    	$("#mobile-result").html('<img src="img/login-icons/ajax-loader.gif" width="25" height="25" />');
    		$.post('parts/login-parts/username-check.php', {'mobile':mobile}, function(data) {
    			if(data=='wrong'){
    				var code='<img src="img/login-icons/available.png" width="25" height="25"/><label>Mobile no. is not registered.</label>';
    				$("#mobile-result").html(code);
    				$('#register').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');
                    $('#email-register').removeAttr('disabled');
    				
    				
    			}
    			else{
    				var code='<img src="img/login-icons/not-available.png" width="25" height="25" /><label>Mobile no. is Registered.</label>';
    				$("#mobile-result").html(code);
    				$('#register').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    $('#confirm_password').attr('disabled', 'disabled');
                    $('#email-register').attr('disabled', 'disabled');

    			}

      			
    	});
	}


	//Register Form
	$(document).on("submit","#register-form",function(e){
		$("#dimScreen").show();
    	$.ajax({
        	   type: "POST",
        	   url: "parts/login-parts/email-register.php",
        	   data: $("#register-form").serialize(), // serializes the form's elements.
        	   success: function(data)
        	   {
        	   		$("#dimScreen").hide();
        	       if(data=='valid'){
        	       		$('#login-page').load('parts/login-parts/registered.php');
        	   		}
        	   		else if(data=='error'){
        	       		var code='<img src="img/login-icons/not-available.png" width="25" height="25" /><label>Something Wrong.</label>';
    					$("#user-result").html(code);
        	   		}
        	   		else{
        	   			var code='<img src="img/login-icons/not-available.png" width="25" height="25" /><label>Fake Email Id.</label>';
    					$("#user-result").html(code);
        	   		}

        	   	}	
        	 });

	   	e.preventDefault(); // avoid to execute the actual submit of the form.
	});





});




