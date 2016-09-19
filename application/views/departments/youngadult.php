<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Young Adult Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>Goals</h3>
			<p>- As a department of the church, YA must vigorously support every program of the C8 Campaign.</p>
			<p>- As individual, each must respond personally to the C8 Campaign</p>
			<ul class="left-40p">
				<li>Be mature as he/she can</li>
				<li>Be an active material supporter of the church</li>
				<li>Be an active worker of the church</li>
				<li>Be a diligent employee</li>
				<li>Be an enterprising entrepreneur</li>
			</ul>
			.
			<h3>Activities</h3>
			<p>- Careflock after morning worship Meeting </p> 
			<p>- Prayer and fasting every 3rd Sunday of the month </p>
			<br/><br/>
		</div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<11; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/ya/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
	</div>
	
<?php echo $footer; ?>
