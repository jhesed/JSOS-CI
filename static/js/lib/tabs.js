var tabsController = function() {
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

    /* triggers all events */
    for(ev in this)
        this[ev]();
}
    
    
$(document).ready(function() {
    new tabsController();
});