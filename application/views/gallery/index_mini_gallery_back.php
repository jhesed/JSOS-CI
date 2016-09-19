<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/gallery.js'; ?>"></script>

	<div class="content_box center"><br/><br/>
		<div class="float-left w-30">
			<h1 class="left-30p">Mini Gallery</h1>
		</div>
		<div class="float-left w-70 top-20">
			<div class="line_brown w-90 bottom-20"></div>	
		</div>	
		<br/><br/><br/>
		
		<div class="w-80 left-30p">
			<?php echo $slider; ?>
				<ul class="slideshow_galleria">
					<?php
						for($i=1; $i<34; $i++) {
						?>
							<li><img src="<?php echo $this->config->item('static_url').'img/gallery/mini/'.$i.'.jpg'; ?>" /> 
						<?php
						}
					?>
				</ul>		
		</div>
		<br/><br/>
	</div>
	
<?php echo $footer; ?>