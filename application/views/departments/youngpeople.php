<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/>	
		<h2 class="text-left left-30p">Young People Department</h2>
		<!--<h1 class="text-left left-30p">Young People Department</h1>-->
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-50 left-40p text-left">
			<h3>Mission</h3><br/>
			<p class="bottom-30">The JSOS Youth Ministry is driven by the heart and movement that support the C8 Campaign of the JSOS Church by reaching out to its youths, empowering them for their holistic Christian growth and secular well-roundedness.</p>

			<h3>Vision</h3><br/>
			<p class="bottom-30">The JSOS Youth Ministry has a mature and solid organization with an established culture of worship, intercession, camaraderie, evangelism and discipleship, and leadership and servanthood. It is active in preparing youths for the Second Coming of Jesus Christ.</p>
            
            <h3>Strategies</h3><br/>
			
            <p class="bottom-10">The JSOS YUP! Movement ("yes" to Youth Level-UP) aims to upgrade the following aspects of the Ministry:</p>
            <p class="bottom-10">    1.	Organization </p>
            <p class="bottom-10">    2.	Intercession & Fasting </p>
            <p class="bottom-10">    3.	Discipleship </p>
            <p class="bottom-10">    4.	Evangelism </p>
            <p class="bottom-10">    5.	Camaraderie </p>
            <p class="bottom-10">    6.	Fundraising, Networking & Financial Management </p>
            <p class="bottom-10">    7.	Skill/Talent/Gift-Enhancement </p>
            <p class="bottom-10">    8.	Social Awareness & Community Outreach </p>

        </div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<28; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/yp/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
            <h3>Facebook</h3>
            <div class="stretch_contain">
            	<div class="fb-like-box bottom-30" style="float:left;" data-href="https://www.facebook.com/jsosyup" data-width="450" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
           	</div>
		</div>
	</div>
	
<?php echo $footer; ?>