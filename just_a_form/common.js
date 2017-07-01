$(function() {


	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
    			var message = $('<span style="font-size:20px;">Thank you for your application, which we have accepted!</span>');
    			$('.text-center').append(message);
    			$('#button').remove();
		  });
	}); 
	return false;            
});
