<?php echo $header; ?>
	
	<script src="<?php echo $this->config->item('static_url').'js/lib/pdfobject.js' ;?>"></script>
	<!-- <script src="<?php echo $this->config->item('static_url').'js/common.js'; ?>"></script> -->

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Weekly Bulletin</h2>
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
							echo "<a href='".$this->config->item('base_url')."home/weeklybulletin/".$blogs[$i]['id']."'>".$blogs[$i]['day_in_int'].': '.$blogs[$i]['series_title'].'</a><br/>';	
							$tmp = $blogs[$i]['header_title'];
						}
						else if($tmp == $blogs[$i]['header_title']){					
							echo "<a href='".$this->config->item('base_url')."home/weeklybulletin/".$blogs[$i]['id']."'>".$blogs[$i]['day_in_int'].': '.$blogs[$i]['series_title'].'</a><br/>';
						}
					}
				?>
			</div>
		</div>
	</div>	
	
    <div class="float-left w-60 left-50p">
        	
		<div class="fb-share-button" style="margin-left: 240px;" data-href="<?php echo $this->config->item('base_url').'home/weeklybulletin/'.$blog_featured[0]['id']; ?>" data-type="button_count"></div>

		<div id="pdf-doc"></div><br/>
	</div>
	
<!-- 	<object class="pdf-downloadable" data="<?php echo $this->config->item('static_url').'pdf/weekly_bulletin/'.$blog_featured[0]['filename'] ?>" type="application/pdf" width="80%" height="100%">
	</object>
 -->
	<script>
	
		$(document).ready(function(){
			currentPdf = createPdf("<?php echo $this->config->item('static_url').'pdf/weekly_bulletin/'.$blog_featured[0]['filename'] ?>", "pdf-doc", getContentBoxHeight()-10);

			if(!currentPdf) {
				$(document.body).append("<p>You need to install Adobe Reader to be able to view the file.  You can download it <a href='https://get.adobe.com/reader/'>here </a></p>");
			}

			$("#pdf-doc").click(function(e){
				e.preventDefault();
			});	
		});
	
	</script>

<?php echo $footer; ?>