<?php echo $headers; ?>
<?php echo $slider; ?>
<script type="text/javascript">
	$(function(){
		var panelWidth = 460;
	    var panelHeight = 340;

	    if (window.matchMedia('(max-device-width: 767px)').matches) {
	    	 panelWidth = $(window).width()-10;
	    	 panelHeight = panelWidth/1.35;
	    }

		$('.slideshow_galleria').galleryView({
			filmstrip_style: 'showall',
			filmstrip_position: 'bottom',
			frame_height: 32,
			frame_width: 50,
			panel_width: panelWidth,
			panel_height: panelHeight,
			autoplay: true
		});
	});
</script>

<div class="content_box">
    <div class="columns left">
		<br/>
        <ul class="slideshow_galleria">
            <?php
                for($i=1; $i<25; $i++) {
                ?>
                    <li><img src="<?php echo $this->config->item('static_url').'images/web/praise_chest/'.$i.'.jpg'; ?>" /> 
                <?php
                }
            ?>
        </ul>
		</br>
    </div>
	<div class="columns right">
		<br/><br/>
		<h2>Praise Chest</h2>
		<p>
			In the Old Testament, 
			Israelites never forget to create Praise Memento
			for the victories that God had given them.
		</p>
		<p>
			These Mementos remind them and
			their children the greatness of God in 
			the hardships they faced in the past.
		</p>
		<p>
			<span class="highlight">JSOS Praise Chest</span> contains the members' memento
			on how Jesus Christ saved them during their
			times of trouble -- How Jesus became their hope
			in their helpless situations.
		</p>
		<p>
			The Praise Chest was submerged to the flood
			during the Typhoon Ondoy.  We were not able
			to conduct our morning worship in our own Church
			during those times.
		</p>
		<p>
			<a href="<?php echo $this->config->item('base_url').'songs/original/4'; ?>" class="highlight" target="blank_">
			Storms will Cease</a> is a video documentation of the said typhoon.
		</p>
	    <?php echo $fb_like; ?> 
	</div>
</div>

<?php echo $footer; ?>
</div>

</body>