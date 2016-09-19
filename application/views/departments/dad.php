<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Dadding Aktibo sa Diyos Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>Mission</h3>
			<p class="bottom-30">YA YA YA YAYA YA YA YA YA YA YA YA YA YA YA YA
			Mission Mission MissionMission MissionMissionMissionMiss ionMission
			Miss ionMissio nMissionMi ssionMissionM issionMis sionMissionM ission</p>

			<h3>Vision</h3>
			<p class="bottom-30">Vision VisionV i s ionVisionVision VisionVision
			VisionVisionV isionVi sionVis ionVisionVisionVisi onVisionVi sionVision
			VisionVis ionVisionVi sionVisionVi sionVisionVi sionVisionVis ionVision
			VisionVisionVisi onVisionVis ionVisionVis ionVisionVision VisionVision</p>
		</div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<6; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/dad/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
	</div>
	
<?php echo $footer; ?>