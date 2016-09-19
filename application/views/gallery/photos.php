<?php echo $header; ?>
	<div class="content_box center">
		<div class="center left group">
			<div class="float-left w-25 top-70 bottom-20">
				<h1><?php echo $photos[0]['album_title'] ;?></h1>
			</div>
			<div class="float-left w-70 text-justify">
				<h2 class="text-left">Description</h2>
				<div class="line_brown w-95 bottom-20"></div>
				<p class="bottom-20">	
					<?php echo $album_desc[0]['description'] ?> 
				</p>
			</div>
		</div>
		
		<div class="clear"></div>
		
        <ul style="margin: 20px 60px 0 60px;" class="magnific-gallery">
            <?php
                for ($i=0; $i<count($photos); $i++) {
                    echo "
                        <li style='float:left; padding:10px; width:160px; cursor:pointer;'>
                            <a href='".$this->config->item('static_url').'img/gallery/photos/'.$photos[$i]['album_folder'].'/'.$photos[$i]['photo']."'>
                                <img class='img_shadow' src='".$this->config->item('static_url').'img/gallery/photos/'.$photos[$i]['album_folder'].'/thumbnail/'.$photos[$i]['photo']."'/></li>
                            </a>
                        </li>";
                }            
            ?>
        </ul>
    </div>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('static_url').'css/lib/magnific.css'; ?>"/>
    
    <script src="<?php echo $this->config->item('static_url'); ?>js/lib/magnific.js"></script>
    <script>
        $('.magnific-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    </script>

<?php echo $footer; ?>