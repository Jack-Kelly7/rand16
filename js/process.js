$(document).ready(function(e) {
	// Checks if document is fully loaded before continuing
	$('#main').on('submit', function(e) {
		// On submit runs functions
		e.preventDefault();
		$.ajax({
			// Runs AJAX to contact.php and post the form data
			url: `objects/process_handler.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function() {
                // Show successMsg for 3000ms
                $("#successMsg").show("fast", function() {});
                setTimeout(function() {
                    $("#successMsg").hide("fast", function() {});
                }, 3000);
			},
			error: function(e) {
                // Show successMsg for 3000ms
                $("#errorMsg").show("fast", function() {});
                $("#errorMsg").append(e);
                setTimeout(function() {
                    $("#errorMsg").hide("fast", function() {});
                }, 3000);
            }
		});
	});
});