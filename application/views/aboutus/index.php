<?php echo $header; ?>
	<div class="content_box center">
		<br/>
		<div class="group center left">
			<div class="float-left w-25 top-70 bottom-20">
				<h1>About Us</h1>
			</div>
			<div class="float-left w-70 text-justify">
				<h2 class="text-left">Purpose Statement</h2>
				<div class="line_brown w-95 bottom-20"></div>
				<p>	The JSOS Christian Church is committed to bring people to the LORD JESUS CHRIST; </p> 
				<p>	to lead them to worship and praise GOD in ways that pleases HIM; </p>
				<p> to encourage them to be committed members of GOD'S family; </p>
				<p> to develop them to CHRIST-like maturity and to equip them; </p>
				<p>	to serve GOD and share HIS love to others in the best that they can. </p>
			</div>
		</div>
		<table></table>
		<div class="clear"><br/>
			<ul class='auh_bar w-70 center'>

				<a href="<?php echo $this->config->item('base_url').'aboutus/location';?>"><li class="auh auh_location"><span class="mobile_label">Location</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/history';?>"><li class="auh auh_history"><span class="mobile_label">History</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/truth';?>"><li class="auh auh_truthbehindname"><span class="mobile_label">Truth Behind Name</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/mission';?>"><li class="auh auh_mission"><span class="mobile_label">Mission</span></li></a>
			</ul>
			<table class='auh_label left-150p'>
				<tr>
					<td>&nbsp;LOCATION</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HISTORY</td>
					<td>&nbsp;TRUTH BEHIND <br/> ITS NAME</td>
					<td>MISSION <br/> STATEMENT</td>
				</tr>
			</table>   
			<ul class='auh_bar w-70 center'>
				<a href="<?php echo $this->config->item('base_url').'aboutus/mo';?>"><li class="auh auh_mo"><span class="mobile_label">Ministerial Objectives</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/doctrinal';?>"><li class="auh auh_doctrinal"><span class="mobile_label">Doctrinal Statement</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/themesong';?>"><li class="auh auh_themesong"><span class="mobile_label">Theme Song</span></li></a>
				<a href="<?php echo $this->config->item('base_url').'aboutus/standards';?>"><li class="auh auh_standardforleaders"><span class="mobile_label">Standard for Leaders</span></li></a>
			</ul>
			<table class='auh_label left-150p'>
				<tr>
					<td>MINISTERIAL <br/> OBJECTIVES</td>
					<td>&nbsp;DOCTRINAL <br/> STATEMENT</td>
					<td>THEME SONG</td>
					<td>STANDARDS <br/> FOR LEADERS</td>
				</tr>
			</table>   
		</div>
		<br/>
	</div>
	<div class="preload_aboutus_img"></div>
<?php echo $footer; ?>