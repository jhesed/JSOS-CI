
/*
    GLOBAL VARIABLES
*/

var PRAISEWALL_LASTUPDATED = "";
var BUSY = false;
var PAGE_OFFSET = 300;
    
var FeedsView = {
	renderFeedAjax: function(author, message, profilePic, feedId, baseUrl) {
		html = "<li>"
			+ "<div class='w-80 center top-10 bottom-10'>"
			+	"<div class='float-left w-10'>"
			+		"<img src='"+ profilePic +"' width=50 height=50 class='img_shadow'></img>"
			+		author
			+	"</div>"
			+	"<div class='float-left w-40 text-left left-20p'>"
			+		message
			+	"<div>"
            +   "<a class='amen' href='"+baseUrl+"feeds/amen?id="+feedId+"'>Amen 0</a>"	
			+ "</div></div>"
            +	"<div class='clear'></div>"
			+ "</div>"
			+ "</li>";
			
		return html;
	}
}

var FeedsModel = function() {
	
    /**
		submits a praise/prayer item
	*/
	this.submitFeed = function (dataString, callback, author, message, profilePic) {
		$.ajax({
			type: "POST",
			url: "../feeds/post",
			data: dataString,
			cache: false,
			success: function(response){
		
                response = JSON.parse(response);
                feedId = response['feedId'];
                baseUrl = response['baseUrl'];
                
                html = callback(author, message, profilePic, feedId, baseUrl);
                $("#loading").hide();	
                $(html).prependTo("ol.feed").slideDown("slow");
		
			}
		});
	}
	
	/**
		amens a post
	*/
	this.amen = function (dataString, html) {
		$.ajax({
			type: "POST",
			url: "../feeds/amen",
			data: dataString,
			cache: false,
			success: function(response){
				var prevAmenCount = parseInt(html.text.split(' ')[1]);
				html.text = "Amened " + (prevAmenCount+1);
			}
		});
	}
    
    /**
        retrieves other feeds on scroll down
    */
    this.reapNextFeeds = function (callback, dataString, baseUrl) {            
        PRAISEWALL_LASTUPDATED = $("#praisewall-last-updated").val();
        
        $.ajax({
            type: "POST",
            url: "../feeds/get_feeds_ajax",
            data: dataString,
            cache: false,
            success: function(response) {
				/*
                response = JSON.parse(response);
                
                baseUrl = response[response.length-1]['baseUrl'];
                for (var i=0; i<response.length; i++) {
                    html = callback(response[i]['author'],
                        response[i]['message'], response[i]['picture'], 
                        response[i]['id'], baseUrl);
                        
                    // $("ol.feed").append(html);
                    $(html).appendTo("ol.feed").slideDown("slow");
                }
                
                $("#praisewall-last-updated").val(response[response.length-1]['last_updated']);
				*/
            }
        });
    }
}

var FeedsHelper = function(){
	this.generateSnsProfilePicLink = function(username) {
		return "http://graph.facebook.com/" + username + "/picture";
	}
}

var FeedsController = function() {
    
	var v = FeedsView,
		m = new FeedsModel(),
		h = new FeedsHelper();
	
	self.prevPraisePost = "";
	self.prevPraiseAmened = -1;
    
    this.onClick = function() {     
		  
		/** 
			submits a praise item 
		*/
		$('.form_feed').click(function(e) {
			e.preventDefault();
			var message = $('#message').val();
			
			if (self.prevPraisePost != message) {
				var author_id = $('#sns_id').val();
				var author = $('#display_name').val();
				var profile_pic = h.generateSnsProfilePicLink($('#sns_username').val());
                var post_with_fb = "yes";
                if ($(".fb-checkbox").hasClass("fb-unchecked")) {
                    post_with_fb = "no";
                }
				
                var tmp = "<img id='loading' src='" + CONF_BASE_URL + "img-loader.gif'/>";
                $(tmp).prependTo("ol.feed").slideDown("slow");
                
                var dataString = "author=" + author + "&message=" + message + "&author_id=" + author_id + "&profile_pic=" + profile_pic + "&post_with_fb=" + post_with_fb;
                self.prevPraisePost = message;

                m.submitFeed(dataString, v.renderFeedAjax, author, message, profile_pic);
				
			}
		});
		
		/**
			amen a post
		*/
		$('a.amen').click(function(e) {
			e.preventDefault();
			
			var post_id = $(this).attr("href").match(/id=([0-9]+)/)[1];
		
			if (self.prevPraiseAmened != post_id) {
				var author_id = $('#sns_id').val();
				var author = $('#display_name').val();
				var dataString = "author=" + author + "&post_id=" + post_id + "&author_id=" + author_id;
				
				m.amen(dataString, this);
				self.prevPraiseAmened = post_id;
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
		requests for more feeds
	*/
	this.onScroll = function() {
		$(window).scroll(function() {
			if ($(this).scrollTop() + $(this).height() > $(this).height() && !BUSY) {
                // if ($("#praisewall-last-updated").val() != PRAISEWALL_LASTUPDATED) {
                    
                    BUSY = true;
                    PAGE_OFFSET += 100;
                    PRAISEWALL_LASTUPDATED = $("#praisewall-last-updated").val();
                    dataString = 'praisewall_last_updated=' + PRAISEWALL_LASTUPDATED;
                    BUSY = false;
                    m.reapNextFeeds(callback=v.renderFeedAjax, dataString=dataString);
                    
                // }
            }             
		});
	}
 
    /* triggers all events */
    for(ev in this)
        this[ev]();
};



$(document).ready(function() {
    new FeedsController();
});