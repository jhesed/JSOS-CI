<?php echo $headers; ?>

<?php echo $slider; ?>
<script type="text/javascript">
	$(function(){
		var panelWidth = 500;
  		var panelHeight = 375;

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
    <div class="columns left about_size">
		<br/>
		<br/>
		<br/>

        <ul class="slideshow_galleria">
            <?php
                for($i=1; $i<25; $i++) {
                ?>
                    <li><img src="<?php echo $this->config->item('static_url').'images/web/about_us/'.$i.'.jpg'; ?>" /> 
                <?php
                }
            ?>
        </ul>
		</br>
    </div>
	
	<div class="columns right about_size"> 	
		<div id="about_us">
			<ol> 
				<li><h2> History </h2></li>
				<ul>
					<li> First called as Music Ministry and first led by Bro. Rey Bonza. </li>
					<li> Its name was changed to Praise Ministry through Bro. Christian Tacadena the director that time. </li>
					<li> Now, JSOS Worship Ministry is the official name of the department. </li>
				</ul>
				
				<li><h2> Name </h2></li>
				<ul>
					<li>MUSIC</li>
						<ol>
							<li>Music is just one of the many medium to worship God.</li>
							<li>There are three kinds of music - Christian music, secular music and worldly music.</li>
						</ol>
					<li>PRAISE</li>
						<ol>
							<li>Praise is just one of the various forms of worshipping God.</li>
							<li>We can praise God through music or testifying God's goodness.</li>
						</ol>
					<li>WORSHIP</li>
						<ol>
							<li>Worship is so much broader - it's not limited in music, praising and dancing.</li>
							<li>Worship is life - a Christian's lifestyle.</li>
						</ol>
				</ul>
				
				<li><h2>Purpose Statement: </h2></li>
				<ul>
					<li> To lead the JSOS Church in corporate praise and worship of God: to inspire the congregation, through the Holy Spirit, to worship the Lord Jesus with all our heart, with all our soul, with all our mind and with all our strength </li>
				</ul>
				
				<li><h2>Vision</h2></li>
				<ul>
					<li>The JSOS Church will become a God-worshipping and praising church - corporately and individually.</li>
					<li>The JSOS Worship Ministry members will manifest the anointing as worship leaders, that through our ministry:</li>
						<ol>
							<li>People will be convicted by the Holy Spirit to come to Christ and make Him as their Lord and Savior;</li>
							<li>Sicknesses and diseases will be healed by God because of the overwhelming presence and power of the Holy Spirit;</li>
							<li>Spiritually weak and backsliding Christians will be revived and restored.</li>
						</ol>
					<li>The JSOS Worship Team will be actively involved in supporting inter-church activities, such as concert, music fest, etc.,  that is glorifying to the name of our Lord Jesus Christ.</li>
				</ul>
				
				<li><h2>Mission:</h2></li>
				<ul>
					<li>Spiritual revival in JSOS in worshipping the Lord Jesus Christ - congregationally and individually.</li>
					<li>Every Worship Ministry member must manifest a worship life that is a level higher than those who are not.</li>
				</ul>
			</ol>
		</div>
	</div>
</div>
<?php echo $footer; ?>
</div>

</body>