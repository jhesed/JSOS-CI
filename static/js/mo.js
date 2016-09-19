var MoController = function() {
    
    this.onClick = function() {     
			$(".aup_1").click(function(e){
			e.preventDefault();
    		if($(".aut_1").hasClass("opened")){
                $(".aut_1").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_1").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_2").click(function(e){
			e.preventDefault();
    		if($(".aut_2").hasClass("opened")){
                $(".aut_2").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_2").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_3").click(function(e){
			e.preventDefault();
    		if($(".aut_3").hasClass("opened")){
                $(".aut_3").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_3").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_4").click(function(e){
			e.preventDefault();
    		if($(".aut_4").hasClass("opened")){
                $(".aut_4").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_4").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_5").click(function(e){
			e.preventDefault();
    		if($(".aut_5").hasClass("opened")){
                $(".aut_5").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_5").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_6").click(function(e){
			e.preventDefault();
    		if($(".aut_6").hasClass("opened")){
                $(".aut_6").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_6").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_7").click(function(e){
			e.preventDefault();
    		if($(".aut_7").hasClass("opened")){
                $(".aut_7").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_7").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_8").click(function(e){
			e.preventDefault();
    		if($(".aut_8").hasClass("opened")){
                $(".aut_8").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_8").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_9").click(function(e){
			e.preventDefault();
    		if($(".aut_9").hasClass("opened")){
                $(".aut_9").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_9").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_10").click(function(e){
			e.preventDefault();
    		if($(".aut_10").hasClass("opened")){
                $(".aut_10").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_10").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_11").click(function(e){
			e.preventDefault();
    		if($(".aut_11").hasClass("opened")){
                $(".aut_11").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_11").slideUp('slow').toggleClass('closed opened');
			}
		});	
		$(".aup_12").click(function(e){
			e.preventDefault();
    		if($(".aut_12").hasClass("opened")){
                $(".aut_12").slideDown('slow').toggleClass('closed opened');
			}
			else{
				$(".aut_12").slideUp('slow').toggleClass('closed opened');
			}
		});
    };
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() {
    new MoController();
});