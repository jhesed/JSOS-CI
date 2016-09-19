
var c8Controller = function() {
	
	
	this.onclick = function () {
		$("#c1").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c1_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c2").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c2_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c3").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c3_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c4").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c4_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});		
		$("#c5").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c5_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c6").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c6_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c7").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c7_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});		
		$("#c8").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c8_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
		$("#c9").click(function(e){
			e.preventDefault();
			$(".table_of_content").css({"text-decoration": "none"});
			$(this).css({"text-decoration": "underline"});
			$(".c_desc").hide();
			$("#c9_desc").fadeIn();
			$(".content_box").css("height", "100%");
		});
	}
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() {
    new c8Controller();
});