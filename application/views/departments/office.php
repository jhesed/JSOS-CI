<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Office Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>Goals</h3><br/>
			<p class="bottom-10">1. &nbsp;&nbsp;&nbsp;&nbsp; To help in the comprehensive growth of the JSOS Kapamuso by providing for the needed secretarial and office management of the church </p>
			<p class="bottom-10">2.	&nbsp;&nbsp;&nbsp;&nbsp; To recruit, train and supervise all the department secretaries of the JSOS Christian church </p>
			<p class="bottom-10">3.&nbsp;&nbsp;&nbsp;&nbsp;	To assist the department heads in maintaining a thorough departmental record system </p>
			<p class="bottom-10">4.	&nbsp;&nbsp;&nbsp;&nbsp;To actively support the JSOS C8 Campaign by maintaining an effective record system relative to its thrusts and a comprehensive C8 Curriculum library </p>
			<p class="bottom-30">5.&nbsp;&nbsp;&nbsp;&nbsp;	To render an effective office accommodation to church guests and visitors </p>
		</div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<4; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/office/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
		
		
		<div class="clear"></div>

		<!-- Left Bottom Overflow -->		

		<div class="float-left left-40p text-left w-50">	
			<h3>Activities</h3><br/>	
			<p class="bottom-10">- &nbsp;&nbsp;&nbsp;&nbsp; Hold seminar/training for secretaries, existing </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Hold seminar/workshop for secretaries, aspirant </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Basic and advance clerical job clinic </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; News article and feature writing Workshop </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Blog writing and SNS promotions upload course </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Basic photography, basic and advance MS tools course </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Basic corel  and photoshop layout and workshop </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Officework for C8 curriculum and data encoding </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Start a virtual library access and presentations assistant</p>
		
		</div>
		<div class="float-left left-40p text-left w-30">	
			<h3>Needs</h3><br/>	
			<p class="bottom-10">- &nbsp;&nbsp;&nbsp;&nbsp;	C.O.T. Writer/Updater</p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; JSOSCC FB Publisher/Updater </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Publications Layout/Assistant </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Regular encoder/filer  </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Part time encoder </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Part time office assistant </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Library assistant </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Officework for C8 curriculum and data encoding </p>
			<p class="bottom-10">-	&nbsp;&nbsp;&nbsp;&nbsp; Virtual library assistant</p>
		
		</div>
		</div>
	</div>
	
<?php echo $footer; ?>