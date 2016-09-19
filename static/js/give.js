var PREVIOUS_MAIL = "";

var giveModel = function() {
	this.submitMail = function (dataString) {
		$.ajax({
			type: "POST",
			url: "give/mail",
			data: dataString,
			cache: false,
			success: function(response){
                console.log(response)
			}
		});

	}
}

var giveController = function() {
	
	var m = new giveModel();
	
	this.onclick = function () {
		$("#send-directly").click(function(e){
			e.preventDefault();
			$(this).hide();
			$("#email-contact-us").fadeIn("slow");
		});
	
	
		$("#direct-mail").click(function(e){
			e.preventDefault();

			var email = $("#email").val();
			var name = $("#name").val();
			var address = $("#address").val();
			var subject = $("#subject").val();
			var message = $("#message").val();
		
			if (!name || !email) {
				if(!email) {
					$("#error-email").fadeIn();
				}
				else {
					$("#error-email").fadeOut();
				}
				
				if(!email) {
					$("#error-email").fadeIn();
				}	
				else {
					$("#error-email").fadeOut();
				}
				
			else {
				if(PREVIOUS_MAIL != email) {
					PREVIOUS_MAIL = email;
					var dataString = "email=" + email + "&name=" + name + "&address=" + address + "&subject=" + subject + "&message=" + message;
					
					$("#success-msg").fadeIn();
					m.submitMail(dataString);
				}
				
			}
		});
	}
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() {
    new giveController();
});