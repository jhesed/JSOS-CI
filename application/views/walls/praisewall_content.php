
<div class="float-left w-60 left-30p top-30 transparent_bg">
	<?php 
		if (!$praise_wall) {
			echo "<p><i>No post yet.  Be the first one! </i></p>";
		}
		else {
			echo "<ol class='feed'>";
					
			for ($i=0; $i<count($praise_wall); $i++) {
				$date_posted = xTimeAgo($praise_wall[$i]['date_created'], date("Y-m-d H:i:s"));
				echo "
					<li class='clear'>
						<br/>
						<div class='w-90 center top-10 bottom-10'>
							<div class='float-left w-10'>
								<img src='{$praise_wall[$i]['picture']}' width=90 height=90 class='img_shadow smaller_border_round'></img>
							</div>
							<div class='wall_block float-left w-60 text-left left-60p'>
								<div class='wall_title'>{$praise_wall[$i]['wall_title']}</div>
								<div class='wall_author'>{$praise_wall[$i]['author']}</div>
								<span class='wall_date_posted'>{$date_posted}</span>
								<div class='wall_content'>{$praise_wall[$i]['message']}</div>													
							</div>
							<div class='amen-portion float-left w-10 left-40p'>
					";
						if ($this->input->cookie('sns_id', TRUE) ? true: false) {
							if(!$praise_wall[$i]['is_amened']) {
								?>									
									<a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$praise_wall[$i]['id']?>"><button class='amen'>Amen</button></a>
								<?php
							}
							else {
								?>
									<a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$praise_wall[$i]['id']?>"><button class='amen' disabled>Amened</button></a>
								<?php
							}
						}
						else {
							?>									
								<button class='tooltip amen' title="Sign in to Amen a post"><a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$praise_wall[$i]['id']?>">Amen</a></button>
							
							<?php
						}
						if (intval($praise_wall[$i]['amen_count'] > 1)) {
							$suffix = " amens";
						}
						else {
							$suffix = " amen";
						}
						
						echo "<div class='wall_amen_count amen-tooltip'>	
						{$praise_wall[$i]['amen_count']} {$suffix} </div>";
					echo "
						</div>
					</li>
				";
			}
			echo "</ol></div>";
		}
	?>