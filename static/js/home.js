var homeController = function() {
    
    var panelWidth = 540;
    var panelHeight = 400;

    if (window.matchMedia('(max-device-width: 480px)').matches) {
    	 panelWidth = $(window).width()-10;
    	 panelHeight = panelWidth/1.35;
    }

    this.onReady = function() {     
		$('.slideshow_galleria').galleryView({
			// filmstrip_style: 'showall',
			filmstrip_position: 'bottom',
			// frame_height: 32,
			// frame_width: 50,
			panel_width: panelWidth,
			panel_height: panelHeight,
			autoplay: true,
            show_filmstrip: false,
            panel_animation: "crossfade",
            transition_interval: 10000
		});
    };
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() {
    new homeController();
});