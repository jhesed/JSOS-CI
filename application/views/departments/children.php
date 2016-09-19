<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Children Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>

		<!-- Left column -->
		
		<div class="float-left w-40 top-40 left-40p text-left">
			<h3>Goals</h3><br/>
            <p class="bottom-10">1. to introduce the Lord Jesus to every child that the JSOS Christian Church may encounter </p>
            <p class="bottom-10">2. to teach the children the stories and principles in the Bible, especially life and works of the Lord JESUS on earth  </p>
            <p class="bottom-10">3. to encourage each child contacted to follow the teaching and examples of the Lord on a daily basis </p>
			<p class="bottom-10">4. to let the kids feel and experience the love of the Lord JESUS </p>
		
		</div>	

		<!-- Right column -->
		
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<11; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/children/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
	
		<div class="clear"></div>

		<!-- Left Bottom Overflow -->		

		<div class="top-20 left-40p text-left">			
			
			<p class="bottom-10">5. to show the kids the importance and the methods of appreciating and loving God through their offerings, prayers, testimonies, talents and obedience </p>
			<p class="bottom-30">6. To train the kids in evangelizing and discipling their contemporaries</p>

			<h3>Vision</h3><br/>
			<p class="bottom-30">that every child of the JSOS Kapamuso, as well as their contacts is learning to be a good disciple of the Lord JESUS CHRIST, giving their life for God's glory and the expansion of God's kingdom among children.</p>

		</div>
	</div>
	
<?php echo $footer; ?>