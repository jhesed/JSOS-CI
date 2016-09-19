<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/home.js'; ?>"></script>
<div class="content_box">
	<div class="float-left left w-40 bold">
		 The JESUS: Sovereign Overcoming Shepherd
        Christian Church is a community of Christians, 
        beginning from the Philippines, who strives to follow, 
        serve and proclaim the Lord Jesus in their daily lives.<br/><br/>

        Though still imperfect, JSOS is composed of 
        individuals who've personally recognized the lordship
        of Jesus in their hearts and lives, and are collectively
        striving to follow the great Lord and Savior in 
        bringing about His kingdom and honor wherever 
        He is leading them.
		
		<ul id="icon_sprite_bar">
			<a href="<?php echo $this->config->item('base_url').'home/praisewall'; ?>"><li class="icon_sprite ic_ps"></li></a>
			<a href="<?php echo $this->config->item('base_url').'home/weeklybulletin'; ?>"><li class="icon_sprite ic_wb"></li></a>
			<a href="<?php echo $this->config->item('base_url').'home/prayerwall'; ?>"><li class="icon_sprite ic_pr"></li></a>
		</ul>
      
	</div>
	<div class="float-left right w-35" style="margin:20px 0 20px 0;">
        <div class="fb-share-button bottom-20" data-href="<?php echo $this->config->item('base_url'); ?>" data-type="button_count"></div>
        <?php echo $slider; ?>
		       <ul class="slideshow_galleria">
            <?php
                for($i=1; $i<4; $i++) {
                ?>
                    <li><img src="<?php echo $this->config->item('static_url').'img/home/slider/'.$i.'.jpg'; ?>" /> 
                <?php
                }
            ?>
        </ul>               
	</div>

    <div class="preload-icons-home"></div>

</div>
<?php echo $footer; ?>