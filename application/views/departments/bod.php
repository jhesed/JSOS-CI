<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Board of Deacons (BOD) Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
		

		<!-- Left column -->
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>General Duties and Responsibilities</h3><br/>
            <p class="bottom-10">1. Meets at least once a month to discuss matters pertaining to their ministry </p>
            <p class="bottom-10">2. Plans ways and means to upgrade the church financial and material status, including the strengthening of members' tithes, offering and other financial commitments. </p>
            <p class="bottom-10">3. Challenges the congregation on 'giving' during worship service and other church-wide gathering. </p>
            <p class="bottom-10">4. Prays intensely for the financial and material upliftment of the church and its members. Holds at least one fasting every quarter for this.</p> 
		</div>	
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<7; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/bod/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
		
		<div class="clear"></div>

		<!-- Left Bottom Overflow -->		

		<div class="top-20 left-40p text-left w-90">	
            <p class="bottom-10">5. Counsels individuals and departments who have been consistently amiss in their giving. </p>
            <p class="bottom-10">6. Provides financial assistance to church members who have been hospitalized, whose loved ones have departed, and who have encountered emergency financial problems brought by calamities. </p>
            <p class="bottom-10">7. Provides financial assistance/ love gift to the owners of the borrowed vehicles/equipment. </p>
            <p class="bottom-10">8. Apportions specific budget for each ministry and department. </p>
            <p class="bottom-10">9. Provides transportation of our workers to and from their outreach destinations. </p>
            <p class="bottom-10">10. Recommends and / or sponsors church workers and leaders to Bible schools and other official trainings and seminars outside the church these are recommended by the Pastor. </p>
            <p class="bottom-10">11. Evaluates and apportions specific budget for each ministry and department. 12. Decides the compensation of fulltime and part-time church workers. </p>
            <p class="bottom-10">13. Challenges the church members to be consistent in supporting Lots of Love Campaign and the construction/ expansion of our buildings. </p>
            <p class="bottom-10">14. Decides and approves year-round / quarterly fund raising campaigns for our Lots of Love Campaign and building, and other church projects.</p> 
            <p class="bottom-10">15. Discusses, reviews, amends and implements BOD policies and procedures. </p>
            <p class="bottom-10">16. Recommends improvements on the ministry to the Pastor </p>
            <p class="bottom-10">17. Provides tokens to concerned parties during special Sundays and national festivities like the Mothers' Day, Grandparents Day , Pastor's appreciation day, Church Anniversary, etc. </p>
            <p class="bottom-30">18. Plans for a yearly Stewardship Month and implements a pastor-approved program for challenging the congregation to be more faithful in giving to God's works.</p>
			
		</div>
	</div>
	
<?php echo $footer; ?>