<?php echo $header; ?>
	<div class="content_box center">
		<div class="center left group">
			<div class="float-left w-25 top-70 bottom-20">
				<h1>Albums</h1>
			</div>
			<div class="float-left w-70 text-justify">
				<h2 class="text-left">Description</h2>
				<div class="line_brown w-95 bottom-20"></div>
				<p class="bottom-20">	short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below
					short description about jsos events listed below </p>
				
			</div>
		</div>		
		<div class="clear"></div>

        <ul style="margin: 20px 60px 0 60px;">
            <?php
                for ($i=0; $i<count($albums); $i++) {
                    echo "<a href='".$this->config->item('base_url').'photos/index/'.$albums[$i]['id']."'>";
                    echo "<li style='float:left; padding:10px; width:160px; cursor:pointer;'>";
                    echo 
                        "<ul>
                            <li class='album_title'>".$albums[$i]['title']."</li>
                            <li><img class='img_shadow' src='".$this->config->item('static_url').'img/gallery/photos/'.$albums[$i]['album_folder'].'/thumbnail/'.$albums[$i]['cover']."'/></li>
                            <li class='album_char'>".$albums[$i]['photo_count']." Photos</li>
                        </ul>";
                    echo "</li>";
                }            
            ?>
        </ul>
    </div>
<?php echo $footer; ?>