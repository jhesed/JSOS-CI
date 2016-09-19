var commonController = function() {
    
    this.onClick = function() {     
        /**
            TABS 
        */
        $(".tabContent").not(":first").hide(); 
        $("ul.tabs li:first").addClass("active").show();  
        $("ul.tabs li").click(function() {
            $("ul.tabs li.active").removeClass("active"); 
            $(this).addClass("active"); 
            $(".tabContent").hide();        
            // $($('a',this).attr("href")).fadeIn('slow'); 
            $($('a',this).attr("href")).show(); 
           return false;
        });
    };
    
    this.onScroll = function () {

        /* BACK TO TOP */
        
        $(window).scroll(function() {
            if ($(this).scrollTop() > 210) {
                $('.back-top-link-cr').fadeIn("slow");
            } else {
            }
        });
        // $('.back-top-link-cr a').addEvent('click', function(event) {
            // new Fx.Scroll(window).start(0, 200);
            // return false;
        // });
    };
    
    this.onLibEvents = function() {
        /**
            Events for table sorting
        */    
        $(".tablesorter").tablesorter( {sortList: [[0,0]]} ); 
    };
    
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

function adjustContentBoxHeight() {
    var windowHeight = $(window).height(); /* offset for inaccurate css height*/
    var bannerHeight = $("#banner").height();
    var footerHeight = $("#footer").height();
    var bodyHeight = $("body").height();

    newContentBoxHeight = $(".background_box").height();
    if (bodyHeight < windowHeight) {
        newContentBoxHeight = windowHeight - (bannerHeight + footerHeight);
    }

    $(".background_box").css("height", newContentBoxHeight);
    $(".center_box").css("height", newContentBoxHeight);
    $(".content_box").css("height", newContentBoxHeight);

    if(windowHeight > bodyHeight){
        $(".bg_image").css("height", windowHeight);
    }
    else{
        $(".bg_image").height(bodyHeight); 
    }
}

function adjustMenu() {
    if (window.matchMedia('(max-device-width: 480px)').matches) {
        $("#mobile_nav").addClass("rmm");   
        $("#nav").attr("id", "");
    }
}

function setHiddenWidthHeight(){
    $("#window_width").val($(window).width());
    $("#window_height").val($(window).width()/1.66);
}

$(document).ready(function() {
    new commonController();
    setHiddenWidthHeight();
    adjustMenu();
    adjustContentBoxHeight();
});