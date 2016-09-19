<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url').'js/departments.js'; ?>"></script>

	<div class="content_box center"><br/><br/>	
		<h2 class="text-left left-30p">Intercession Department</h2>
		<div class="line_brown w-90 bottom-20 left-30p"></div>
				
		<div class="float-left w-40 top-20 left-40p text-left">
			<h3>Purpose Statement</h3>
			<p class="top-10 bottom-30">
				To support the purposes of JSOS Church, its C8 Intercession Ministry will continuously conduct prayer meetings and other activities that will provide intercession for Church leadership, various ministries, its activities and other needs.
			</p>

			<h3>Vision</h3>
			<p class="top-10 bottom-10">
				1.	&nbsp;&nbsp;&nbsp;&nbsp; JSOS CC --- A Model Praying Church
			</p>
			<p class="bottom-10">
				2.	&nbsp;&nbsp;&nbsp;&nbsp; Every Kapamuso has consistent personal devotion to the Lord and has quality prayer life
			</p>
			
		</div>
		<div class="float-left w-50" style="float:right;">
			<?php echo $slider; ?>
				   <ul class="slideshow_galleria">
				<?php
					for($i=1; $i<21; $i++) {
					?>
						<li><img src="<?php echo $this->config->item('static_url').'img/departments/prayer/'.$i.'.jpg'; ?>" /> 
					<?php
					}
				?>
			</ul>
		</div>
		
		<div class="clear"></div>

		<!-- Left Bottom Overflow -->		

		<div class="top-20 left-40p text-left w-90">			
			<table class="dept_table w-100 bottom-30">
				<tr>
					<th>Strategy:</th>
					<td>
						To usher the congregation into the awesome presence of God through Prayer and Intercession
					</td>
				</tr>
				<tr>
					<th rowspan=3>Goals for 2014:</th>
					<td>
						1.	Each Kapamuso is an Intercessor 
					</td>
				</tr>
				<tr>
					<td>
						2.	To attain at least 80% attendance of every intercession activity 
					</td>
				</tr>
				<tr>
					<td>
						3.	Each Kapamuso practices James 5:16 consistently within the church
					</td>
				</tr>
				
				<tr>
					<th>Monitoring and Control:</th>
					<td>
						Intercessor’s performance will be checked (attendance, punctuality, cooperation and participation)
					</td>
				</tr>
				<tr>
					<th>Reward and Appreciation:</th>
					<td>
						God is glorified, intercessors are encouraged, JSOS CC is strengthened and faithful members are appreciated
					</td>
				</tr>
				<tr>
					<th>Intercession Program:</th>
					<td>
						Opening song, Opening prayer, Testimonies, Intercession 1, Devotion, Intercession 2, Announcement and reminder, Personal request/prayer, Closing song/prayer
					</td>
				</tr>
			</table>
		</div>
		
	</div>
	
<?php echo $footer; ?>