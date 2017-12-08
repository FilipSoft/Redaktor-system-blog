$(function() {

    var form = $('#contact-form');

    // Get the messages div.
    var formMessages = $('#form-messages');

    $(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    var formData = $(form).serialize();

    console.log(formData);
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
		}).done(function(response) {
    		// Make sure that the formMessages div has the 'success' class.
    		$(formMessages).html("<div class=\"alert alert-success\" role=\"alert\">Váš email byl úspěšně odeslán!</div>");

    		// Set the message text.
    		$(formMessages).text(response);

    		// Clear the form.
    		$('#emailinput').val('');
    		$('#nameinput').val('');
    		$('#messageinput').val('');
    		$('#bodyinput').val('');
		}).fail(function(data) {
    		// Set the message text.
        		
        		if (data.responseText !== null && data.responseText !== "MailNoService") {
        			$(formMessages).html("<div class=\"alert alert-danger\" role=\"alert\">" + data.responseText + "</div>");
        		} else if (data.responseText === "MailNoService") {
        			$(formMessages).html("<div class=\"alert alert-info\" role=\"alert\">Your mail would have been sent, if there was a mail service</div>");
        		} else {
        			$(formMessages).html("<div class=\"alert alert-danger\" role=\"alert\">Nepodařilo se odeslat váš email!</div>");
        		}
	});
});
});