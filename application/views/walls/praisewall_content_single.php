	<?php 	
		$date_posted = xTimeAgo($date_created, date("Y-m-d H:i:s"));
			
		echo "
			<li class='clear'>
				<br/>
				<div class='w-90 center top-10 bottom-10'>
					<div class='float-left w-10'>
						<img src='{$picture}' width=90 height=90 class='img_shadow smaller_border_round'></img>
					</div>
					<div class='wall_block float-left w-60 text-left left-60p'>
						<div class='wall_title'>
						{$wall_title}</div>
						<div class='wall_author'>{$author}</div>
						<span class='wall_date_posted'>{$date_posted}</span>
						<div class='wall_content'>{$message}</div>													
					</div>
					<div class='amen-portion float-left w-10 left-40p'>
			";
					if ($this->input->cookie('sns_id', TRUE) ? true: false) {
						if(!$is_amened) {
							?>									
								<a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$id?>"><button class='amen'>Amen</button></a>
							<?php
						}
						else {
							?>
								<a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$id?>"><button class='amen' disabled>Amened</button></a>
							<?php
						}
					}
					else {
						?>									
							<button class='tooltip amen' title="Sign in to Amen a post"><a class="amen_link" href="<?php echo $this->config->item('base_url')."praise_wall/amen?id=".$id?>">Amen</a></button>
						
						<?php
					}
			
					if (intval($amen_count > 1)) {
						$suffix = " amens";
					}
					else {
						$suffix = " amen";
					}
					
					echo "<div class='wall_amen_count amen-tooltip'>	
					{$amen_count} {$suffix} </div>";
					echo "
						</div>
			</li>
		";
	?>