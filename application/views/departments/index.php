<?php echo $header; ?>
	<div class="content_box center">
		<br/>
		<div class="group center left">
			<div class="float-left w-25 top-70 bottom-20">
				<h1>Departments</h1>
			</div>
			<div class="float-left w-70 text-justify">
				<h2 class="text-left">Departments</h2>
				<div class="line_brown w-95 bottom-20"></div>
				<p>	dept test desc dept test desc dept test desc dept test desc dept test desc dept te</p> 
				<p>	dept test desc dept test desc dept test desc dept test desc dept test desc dept te</p> 
				<p>	dept test desc dept test desc dept test desc dept test desc dept test desc dept te</p> 
				<p>	dept test desc dept test desc dept test desc dept test desc dept test desc dept te</p>
			</div>
		</div>
		<div class="clear"><br/>
			
			<h3 class="title_highlight bottom-20">Age Level:</h3>
			<ul class='auh_bar w-70 center'>
				<table>
					<tr>
						<td><a href="<?php echo $this->config->item('base_url').'departments/children';?>"><li class="dept dept-icon-children"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/youngpeople';?>"><li class="dept dept-icon-yp"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/youngadult';?>"><li class="dept dept-icon-ya"></li></a></td>
					</tr>
					<tr>						
						<td><p class="label">CHILDREN</p></td>
						<td><p class="label">YOUNG PEOPLE</p></td>
						<td><p class="label">YOUNG ADULT</p></td>
					</tr>
				</table>
			</ul>
			<table class='auh_label left-30p'>
				<tr>
				</tr>
			</table><br/>
			
			<ul class='auh_bar w-50 center'>
				<table>
					<tr>
						<td><a class="img_shadow" href="<?php echo $this->config->item('base_url').'departments/wam';?>"><li class="dept dept-icon-wam"></li></a></td>
						<td><a class="img_shadow" href="<?php echo $this->config->item('base_url').'departments/dad';?>"><li class="dept dept-icon-dad"></li></a></td>
					</tr>
					<tr>
						<td><p class="label">WAM</p></td>
						<td><p class="label">DAD</p></td>
					</tr>
				</table>
			</ul>
			<br/><br/>
			<h3 class="title_highlight bottom-20">Non-Age Level:</h3>
			<ul class='auh_bar w-70 center'>
				<table>
					<tr>
						<td><a href="<?php echo $this->config->item('www_worship'); ?>" target="blank_"><li class="dept dept-icon-worship"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/prayer';?>"><li class="dept dept-icon-prayer"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/ushering';?>"><li class="dept dept-icon-ushering"></li></a></td>
					</tr>
					<tr>
						<td><p class="label">WORSHIP</p></td>
						<td><p class="label">INTERCESSION</p></td>
						<td><p class="label">USHERING</p></td>
					</tr>
				</table><br/>
			</ul>
			
			<ul class='auh_bar w-70 center'>
				<table>
					<tr>
						<!--<a href="<?php echo $this->config->item('base_url').'departments/boe';?>"><li class="dept dept-icon-"></li></a>-->
						<td><a href="<?php echo $this->config->item('base_url').'departments/bod';?>"><li class="dept dept-icon-bod"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/office';?>"><li class="dept dept-icon-office"></li></a></td>
						<td><a href="<?php echo $this->config->item('base_url').'departments/media';?>"><li class="dept dept-icon-media"></li></a></td>
					</tr>
					<tr>
						<td><p class="label">BOD</p></td>
						<td><p class="label">OFFICE</p></td>
						<td><p class="label">MEDIA ARTS</p></td>
					</tr>
				</table>
			</ul>
		</div>
		<br/>
	</div>
	<div class="preload_dept_image"> </div>
<?php echo $footer; ?>