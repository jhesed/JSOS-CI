
/*
    GLOBAL VARIABLES
*/

var BUSY = false;
var TOOLTIPBUSY = false;

var PrayerwallView = {
	
}

var PrayerwallModel = function() {
	
    /**
		submits a prayer/prayer item
	*/
	this.submitFeed = function (dataString, callback, author, message, profilePic) {
		$.ajax({
			type: "POST",
			url: "../prayer_wall/post",
			data: dataString,
			cache: false,
			success: function(response){
                $(".loading").hide();	
                // $(response).prependTo("ol.feed").slideDown("slow");
				// $(response).hide().appendTo("ol.feed").delay(100).fadeIn(1000);
				$(response).prependTo("ol.feed");
			}
		});
	}
	
	/**
		amens a post
	*/
	this.amen = function (dataString) {
		$.ajax({
			type: "POST",
			url: "../prayer_wall/amen",
			data: dataString,
			cache: false,
			success: function(response){	
                console.log(response)
            }
            
		});
	}
    
    /**
        retrieves other prayer_wall on scroll down
    */
    this.reapNextFeeds = function (dataString) { 
		$.ajax({
            type: "GET",
            url: "../prayer_wall/get_prayer_wall_ajax",
            data: dataString,
            cache: false,
            success: function(response) {
				$(".loading").hide();	
                response = JSON.parse(response);
                $("#prayerwall-last-updated").val(response['prayerwall_last_updated']);
                
    			$(".content_box").css("height", "100%");
                $(response['content']).appendTo("ol.feed");
				BUSY = false;
            }
        });
    }
}

var PrayerwallHelper = function(){
	this.generateSnsProfilePicLink = function(username) {
		return "http://graph.facebook.com/" + username + "/picture?";
	}
}

var PrayerwallController = function() {
    
	var m = new PrayerwallModel(),
		h = new PrayerwallHelper();
	
	self.prevPrayerPost = "";
	self.prevPrayerAmened = -1;
    
    this.onClick = function() {     
		  
		/** 
			submits a prayer item 
		*/
		$('.form_feed').click(function(e) {
			e.preventDefault();
			var message = $('#message').val();
			var title = $("#wall_title").val();
			
			if (!title || !message) {
				if (!title) {
					$("#error_title").fadeIn(500,function(){});
				}
				if (!message) {
					$("#error_content").fadeIn(500,function(){});
				}
			}
			else if (self.prevPrayerPost != message) {
				
				$("#error_title").fadeOut(500,function(){});
				$("#error_content").fadeOut(500,function(){});
				
				var author_id = $('#sns_id').val();
				var author = $('#display_name').val();
				var profile_pic = h.generateSnsProfilePicLink($('#sns_username').val()) + "width=90&height=90";
				
                var post_with_fb = "yes";
                if ($(".fb-checkbox").hasClass("fb-unchecked")) {
                    post_with_fb = "no";
                }
				
                var tmp = "<img class='loading' src='" + CONF_BASE_URL + "img-loader.gif'/>";
                // $(tmp).prependTo("ol.feed").slideDown("slow");
				// $(tmp).hide().appendTo("ol.feed").delay(100).fadeIn(1000);
				$(tmp).appendTo("ol.feed");
                
                var dataString = "wall_title=" + title + "&author=" + author + "&message=" + message + "&author_id=" + author_id + "&profile_pic=" + profile_pic + "&post_with_fb=" + post_with_fb;
                self.prevPrayerPost = message;

				m.submitFeed(dataString, author, message, profile_pic);
				
			}
		});
		
		/**
			amen a post
		*/
		// $('a.amen_link').click(function(e) {
		$('ol.feed').on("click", "a.amen_link", function(e) {
			/* event delegation */
			e.preventDefault();
			var post_id = $(this).attr("href").match(/id=([0-9]+)/)[1];
		
			if (self.prevPrayerAmened != post_id) {
				var author_id = $('#sns_id').val();
				var author = $('#display_name').val();
				var picture = h.generateSnsProfilePicLink($('#sns_username').val()) + "width=30&height=30";
				var dataString = "author=" + author + "&post_id=" + post_id + "&author_id=" + author_id + "&picture=" + picture;
				
				var html = $(this).parent().children(".wall_amen_count");
				/* change label immediately */
				var nextAmenCount = parseInt($(html).text().split(' ')[0]) + 1;
				
				if (nextAmenCount == 1) {
					suffix = " amen";
				}
				else {
					suffix = " amens";
				}
							
				$($(this).parent().children("a.amen_link").children("button")).text("Amened");
				$(html).text((nextAmenCount) + suffix);
				self.prevPrayerAmened = post_id;
				
				m.amen(dataString);
			
			}	
		});
        
        
        /**
            activates/deactivates post with fb
        */
        $(".fb-checkbox").click(function(e){
            e.preventDefault();
            $(this).toggleClass("fb-unchecked");            
        });
        
	};
		
	/**
		requests for more prayer_wall
	*/
	this.onScroll = function() {
		$(window).scroll(function() {
			if($(window).scrollTop() == $(document).height() - $(window).height() && !BUSY) {
				BUSY = true;
                var lastUpdated = $("#prayerwall-last-updated").val();
                
                if(lastUpdated != "REAPED_LAST") {
                    dataString = 'prayerwall_last_updated=' + lastUpdated;
                   
                    var tmp = "<li class='clear'><img class='loading' src='" + CONF_BASE_URL + "img-loader.gif'/></li>";
                    // $(tmp).appendTo("ol.feed").slideDown("slow");
                    // $(tmp).hide().appendTo("ol.feed").delay(100).fadeIn(1000);
                    $(tmp).appendTo("ol.feed");
                    
                    m.reapNextFeeds(dataString=dataString)
                }
            }             
		});
	}
 
	this.onHover = function(){
		
		/* Dynamic Amens  */
		
		if(".amen-tooltip") {
			$("ol.feed").on("hover", ".amen-tooltip", function(e) {
				if (!TOOLTIPBUSY) {
					e.preventDefault();
					TOOLTIPBUSY = true;
					dataString = 'pw_id=' + $(this).parent().children("a.amen_link").attr("href").match(/id=([0-9]+)/)[1];
						
					$('.amen-tooltip').tooltipster({
						contentAsHTML: true,
						interactive: true,
						content: 'Loading...',
						functionBefore: function(origin, continueTooltip) {
							continueTooltip();
							if (origin.data('ajax') !== 'cached') {
								$.ajax({
									type: 'GET',
									url: '../prayer_wall/get_ameners',
									data: dataString,
									success: function(data) {
                                        console.log(data)
										TOOLTIPBUSY = false;
										origin.tooltipster('content', data).data('ajax', 'cached');
									}
								});
							}
						}
					});
				}
			});
		}
	};
	
    /* triggers all events */
    for(ev in this)
        this[ev]();
};



$(document).ready(function() {
    new PrayerwallController();
});