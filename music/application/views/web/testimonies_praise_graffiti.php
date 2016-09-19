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
                for($i=1; $i<22; $i++) {
                ?>
                    <li><img src="<?php echo $this->config->item('static_url').'images/web/praise_graffiti/'.$i.'.jpg'; ?>" /> 
                <?php
                }
            ?>
        </ul>
		</br>
    </div>
	<div class="columns right">
		<br/><br/>
		<h2>Praise Graffiti</h2>
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
			<span class="highlight">JSOS Praise Graffiti</span> is one
			of these JSOS mementos.	It contains the thanksgiving of the members on
			God's greatness during the past years.
		</p>
		<p>
			It was created during the fourth
			anniversary of the JSOS Praise Festival,
			in Bilibiran Outreach Center.  We were not
			in our Church during that time because 
			our Church was submerged by the flood
			caused by Typhoon Ondoy.
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