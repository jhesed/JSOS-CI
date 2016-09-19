var CONF_BASE_URL = 'http://localhost/jsos.com/static/img/';

var commonController = function() {

    this.onHover = function() {
		/**
			ACCORDION
			http://cssdeck.com/labs/simple-jquery-accordion
		*/

		var allAccordions = $('.accordion div.data');
		var allAccordionItems = $('.accordion .accordion-item');
		$('.accordion > .accordion-item').click(function() {
			if($(this).hasClass('open')) {
				$(this).removeClass('open');
				$(this).next().slideUp("slow");
			}
			else {
				allAccordions.slideUp("slow");
				allAccordionItems.removeClass('open');
				$(this).addClass('open');
				$(this).next().slideDown("slow");
				return false;
			}
		});

		if($(".accordion-item")) {
			$(".accordion-item:last").addClass('open');
			$(".data:last").fadeIn();
		}

        /**
            Tooltipster
        */

        if($('.tooltip')) {
            $('.tooltip').tooltipster({
                contentAsHTML: true,
                interactive: true,
                animation: 'fade',
                maxWidth: 150
            });
        }
	};

    /* triggers all events */
    for(ev in this)
        this[ev]();
};

/* UTILS */

function createPdf(filename, htmlTag, height, width) {
    if (typeof height === 'undefined') { height = '700'; }
    if (typeof width === 'undefined') { width = '600'; }

	return new PDFObject({
		url: filename,
		id: "custom-pdf",
		width: width,
		height: height,
		pdfOpenParams: {
            view: "FitV",
			navpanes: 0,
			statusbar: 0,
            toolbar: 0,
            messages: 0,
			pagemode: "thumbs"
		}
	}).embed(htmlTag);
}

function adjustContentBoxHeight() {
    var windowHeight = $(window).height(); /* offset for inaccurate css height*/
    var bannerHeight = $("#banner_img").height() + $("#nav").height();
    var footerHeight = $("#footer").height();
    var bodyHeight = $("body").height();

    newContentBoxHeight = $(".content_box").height();
    if (bodyHeight < windowHeight) {
        newContentBoxHeight = windowHeight - (bannerHeight + footerHeight);
        $(".content_box").css("height", newContentBoxHeight);
    }


}

function getContentBoxHeight() {
    return $(".content_box").height();
}

function adjustMenu() {
 	if (window.matchMedia('(max-device-width: 480px)').matches) {
    	$("#mobile_nav").addClass("rmm");	
    	$("#nav").attr("id", "");
    }
}

$(document).ready(function() {
    new commonController();
    adjustContentBoxHeight();
    adjustMenu();
});