var PREVIOUS_MAIL = "";

var contactusModel = function() {
	this.submitMail = function (dataString) {
		$.ajax({
			type: "POST",
			url: "contactus/mail",
			data: dataString,
			cache: false,
			success: function(status){
                console.log(status)
                if (status == 200) {
                	$("#success-message").fadeIn();
                }
                else {
                	$("#error-message").fadeIn();
                }

			}
		});

	}
}

var contactusController = function() {
	
	var m = new contactusModel();
	
	this.onclick = function () {
		$("#send-directly").click(function(e){
			e.preventDefault();
			$(this).hide();
			$("#email-contact-us").fadeIn("slow");
			$(".content_box").css("height", $(".content_box").height() + $("#email-contact-us").height()+20);
		});
	
	
		$("#direct-mail").click(function(e){
			e.preventDefault();

			var email = $("#email").val();
			var name = $("#name").val();
			var address = $("#address").val();
			var subject = $("#subject").val();
			var message = $("#message").val();
		
			if (!email || !subject || !message) {
				if(!email) {
					$("#error-email").fadeIn();
				}
				else {
					$("#error-email").fadeOut();
				}
				
				if(!subject) {
					$("#error-subject").fadeIn();
				}	
				else {
					$("#error-subject").fadeOut();
				}
				
				if(!message) {
					$("#error-message").fadeIn();
				}	
				else{
					$("#error-message").fadeOut();
				}
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
    new contactusController();
});