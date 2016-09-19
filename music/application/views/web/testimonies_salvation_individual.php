<?php echo $headers; ?>

<div class="background_box">
    <div id="testimony">
        <img height=100 width=100 src="<?php echo $this->config->item('static_url').'images/web/salvation/dp/'.$testimonies[0]['dp'];?>">        
     
        <h1><?php echo $testimonies[0]['title']; ?></h1>
            <h2>By: <?php echo $testimonies[0]['author'];?></h2>
            <?php 
                if($testimonies[0]['year_born_again'] != 0) {
                ?>
                    <h2>Year Born Again: <?php echo $testimonies[0]['year_born_again'];?></h2>
                <?php
                }
            ?>
           
        <?php echo $fb_like; ?>
        
        <br/>
        <?php echo $testimonies[0]['content'] ?>
		
		<div style="float:right;clear:both">
			<?php $tmp = (($testimonies[0]['id'] - 1) == 0 ? -1 : ($testimonies[0]['id'] - 1));  ?>
			<a href="<?php echo $this->config->item('base_url').'testimonies/salvation/'.$tmp?>"><div class="highlight">Previous</div></a>
			<a href="<?php echo $this->config->item('base_url').'testimonies/salvation/'.($testimonies[0]['id'] + 1)?>"><div class="highlight">Next</div></a>
		</div>
	</div>
</div>


<?php echo $footer; ?>
</div>
</body>