<?php echo $headers; ?>
<?php echo $slider; ?>
<script type="text/javascript">
	$(function(){
	
	    var panelWidth = 648;
	    var panelHeight = 792;
	    filmstripPosition = "right";

	    if (window.matchMedia('(max-device-width: 767px)').matches) {
	    	panelWidth = $(window).width()-50;
	    	panelHeight = panelWidth*1.22;
	    	filmstripPosition = "bottom";
	    }

		$('.slideshow_galleria').galleryView({
			filmstrip_style: 'showall',
			filmstrip_position: filmstripPosition,
			frame_height: 32,
			frame_width: 50,
			panel_width: panelWidth,
			panel_height: panelHeight,
			autoplay: true
		});
	});
</script>
	
<div class="content_box">
    <div id="burst">
        <ul class="slideshow_galleria">
            <?php
                for($i=1; $i<28; $i++) {
                ?>
                    <li><img src="<?php echo $this->config->item('static_url').'images/web/praise_burst/'.$i.'.jpg'; ?>" /> 
                <?php
                }
            ?>
        </ul>
    </div>
    <?php echo $fb_like; ?> 
</div>

<?php echo $footer; ?>
</div>

</body>