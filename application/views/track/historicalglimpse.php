<?php echo $header; ?>
	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Historical Glimpse</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-20 left-50p text-left archive">
			<h2>Archive:</h2>
            <div class="accordion">
				<?php
					$tmp = $blogs[0]['header_title'];
					for ($i=0; $i<(count($blogs)); $i++) {
						
						if ($tmp != $blogs[$i]['header_title'] || $i == 0) {
							if ($i != 0) {
								echo "</div>";	
							}					
				?> 
							
							<div class="accordion-item">
								<?php echo $blogs[$i]['header_title']; ?>
								<div class="type"></div>
							</div>				
							<div class="data">
							
				<?php
							echo "<a href='".$this->config->item('base_url')."track/historicalglimpse/".$blogs[$i]['id']."'>".$blogs[$i]['day_in_int'].'</a><br/>';	
							$tmp = $blogs[$i]['header_title'];
						}
						else if($tmp == $blogs[$i]['header_title']){					
							echo "<a href='".$this->config->item('base_url')."track/historicalglimpse/".$blogs[$i]['id']."'>".$blogs[$i]['day_in_int'].'</a><br/>';
						}
					}
				?>
			</div>
		</div>
        
	</div>	
	
    <div class="float-left w-60 left-50p">
        	
        <?php
            echo "<table>
                <tr>
                    <td>"; ?>
                        <div class="fb-share-button" style="margin-left: 240px;" data-href="<?php echo $this->config->item('base_url').'track/historicalglimpse/'.$blog_featured[0]['id']; ?>" data-type="button_count"></div>
        
        <?php echo "
                    </td>
                </tr>";
			// echo "<tr>
			// 		<td colspan=2><h1 class='top-30 bottom-20' style='float:left;'>".$blog_featured[0]['header_title']." ".$blog_featured[0]['day_in_int']."</h1>
			// 		</td>
			// 	</tr>";
		
            echo "<tr>
	            	<td>
	            		<div class='mobile-stretch'><img src='".$this->config->item('static_url').'img/track/historical_glimpse/'.$blog_featured[0]['img_content']."'></div> 
					</td>
				</tr>
				</table>";

			echo "<tr>
					<td>
						<div style='float:right; margin: 0 50px 0 30px; '>by: ".$blog_featured[0]['author']."</div>
					</td>
				</tr>";
		?>
	</div>

</div>
	
		
	
<?php echo $footer; ?>