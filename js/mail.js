$(document).ready(function(){

	//Register Form
	$(document).on("submit","#contact_us",function(e){
    	$.ajax({
        	   type: "POST",
        	   url: "parts/mail-send.php",
        	   data: $("#contact_us").serialize(), // serializes the form's elements.
        	   success: function(data)
        	   {
        	   		$('#dialog').dialogBox({
                    hasClose: true,
                    effect: 'fade',
                    hasBtn: false,
                    title: 'Dialog',
                    content: 'Mail Sent Sucessfully',
                    autoSize: true,
                    width: 500,
                    height: 200,
                    zIndex: 99999,
                    hasMask: true
                })
        	   }	
        	 });

	   	e.preventDefault(); // avoid to execute the actual submit of the form.
	});

});




