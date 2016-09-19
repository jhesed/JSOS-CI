<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Media Arts Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>Goals</h3><br/>
				
			<p class="bottom-10"> 1.) To use all available forms of media in honoring  God, evangelizing people,  edifying Christians and expanding  the Lord’s kingdom </p>
					<p class="left-50p">- Journalism and Literature</p>
					<p class="left-50p">- Theatrical arts</p>
					<p class="left-50p">- Music</p>
					<p class="left-50p">- Visual arts</p>
					<p class="left-50p">- Social media</p>
					<p class="left-50p">- discover, enhance and use all media-related talents among the JSOS Kapamuso</p>
					<p class="left-50p bottom-20">- To form and maintain an alliance and a movement among Christian artists through the KKATTHA ( Katipunan ng mga Kristyanong Alagad ng Titik, Teatro, Himig at Art</p>
						
		</div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<23; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/media/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>		
		
		<div class="clear"></div>

		<!-- Left Bottom Overflow -->		

		<div class="top-10 left-40p text-left w-90">		
		<p class="bottom-20">2.) To discover, enhance and use all media-related talents among the JSOS Kapamuso</p>
			<p class="bottom-20">3.	To form and maintain an alliance and a movement among Christian artists through the KKATTHA ( Katipunan ng mga Kristyanong Alagad ng Titik, Teatro, Himig at Art</p>
			
			<h3>Major Projects</h3><br/>
			
			<p class="bottom-10"> 1.) Rizal Bible Arts Festival ( RIBAF )</p>
			<p class="bottom-10"> 2.) Jesus Art Festivals ( JAF )</p>
					<p class="left-50p">- Christmas JAF ( Jesus Art Festival )</p>
					<p class="left-50p bottom-10">- Lenten JAF  ( Jesus Art Festival ) </p>
			<p class="bottom-20"> 3.) Bible Art Exhibit Outreach in schools and communities</p>
			<p class="bottom-20"> 4.) Modern Handwritten Bible Campaign</p>
			<p class="bottom-20"> 5.) Bible Jam </p>
			<p class="bottom-20"> 7.) Facebook Ministry</p>
					<p class="left-50p">- Wow Series</p>
					<p class="left-50p">- JSOS Burst of Praise ( Kapamuso Personal Thanksgiving ) </p>
					<p class="left-50p">- JSOS Praise Burst ( Kapamuso original songs ) </p>
						<p class="left-80p">(a)	Words on Wisdom</p>
						<p class="left-80p">(a)	Words on Worship</p>
						<p class="left-80p">(a)	Words on Work</p>
						<p class="left-80p">(a)	Words on Witnessing</p>
						<p class="left-80p">(a)	Words on Winning</p>
					<p class="left-50p">- KKATTHA Tula </p>
					<p class="left-50p">- KKATTHA  Larawan </p>
			<p class="top-10 bottom-20"> 8.) JSOS Mini-Christian Gallery</p>
			
		</div>	
	</div>
	
<?php echo $footer; ?>