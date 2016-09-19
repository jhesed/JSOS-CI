var GalleryController = function() {
    
    var panelWidth = 900;
    var panelHeight = 600;

    if (window.matchMedia('(max-device-width: 480px)').matches) {
    	 panelWidth = $(window).width()-10;
    	 panelHeight = panelWidth/1.35;
    }

    this.onReady = function() {     
		$('.slideshow_galleria').galleryView({
			// filmstrip_style: 'showall',
			filmstrip_position: 'right',
			frame_height: 32,
			frame_width: 50,
			panel_width: panelWidth,
			panel_height: panelHeight,
			autoplay: true
		});
    };
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() {
    new GalleryController();
});