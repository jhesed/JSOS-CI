<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url')."js/contact_us.js"?>"></script>

	<div class="content_box center"><br/><br/>
		<div class="float-left w-25">
			<h1 class="left-30p">Contact Us</h1>
		</div>
		<div class="float-left w-75 top-20">
			<div class="line_brown w-90 bottom-20"></div>	
		</div>
		
		<div class="clear"></div>
		<div class="mobile-stretch">
			<div class="float-left w-60" id='contactus_img'></div>
		</div>
		
		<div class="float-left w-40 text-left left-30p">
			<h3>EMAIL ADDRESS</h3>
			<table width="350">
				<tr>
					<td><p class="bottom-20">jsosc8@yahoo.com</p> </td>
					<td><input class="btn float-right" id="send-directly" type="button" value="Send us an email"/></td>
				</tr>
			</table>			
			
			<!-- DIRECT EMAIL -->
			
			<form method="post" id="email-contact-us" class="transparent_bg bottom-20 text-center">
				
				<input type="text" size=55 id="email" placeholder="*Your email address" class="top-10 bottom-10"/>
				<div class="error" id="error-email">Email is required.</div>
				
				<input type="text" size=55 id="name" placeholder="Last name, First name, Middle name" class="bottom-10"/>
				
				<input type="text" size=55 id="address" placeholder="Street, City/Province, Country" class="bottom-10"/>
				
				<input type="text" size=55 id="subject" placeholder="*Subject" class="top-10"/>				
				<div class="error" id="error-subject">Subject is required.</div>
				
				<textarea rows=10 id="message" placeholder="*Your Message" style="margin-top:10px;"></textarea>
				<div class="error" id="error-message">Your message is required.</div>
				
				<div class="error" id="error-response">There is an error while sending your message.  Please try again later, or contact us directly at the email above. Thanks</div>
				<div class="success" id="success-response">Your email was sent! We'll try to get in touch with you ASAP.</div>
					
				<input class="btn top-10 float-right" id="direct-mail" type="submit" value="Send"/>
			</form>
			
			<h3>WEBSITES</h3>
			<p class="bottom-20">
				<a href="<?php echo $this->config->item('www_worship'); ?>" target="blank_">Music Ministry</a> <br/>
			</p>
			<h3>FACEBOOK ACCOUNTS</h3>
			<p class="bottom-20">
				<a href="<?php echo $this->config->item('fb_jsos'); ?>" target="blank_">JSOS Main</a> <br/>
				<a href="<?php echo $this->config->item('fb_kkattha'); ?>" target="blank_">KKATTHA (Aliance of Christian Artists)</a><br/>
				<a href="<?php echo $this->config->item('fb_worship'); ?>" target="blank_">Music Ministry</a><br/>
				<a href="<?php echo $this->config->item('fb_youth'); ?>" target="blank_">Youth Ministry </a><br/>	
				<a href="<?php echo $this->config->item('fb_ya'); ?>" target="blank_">Young Adult Ministry </a><br/>
			</p>
			<h3>YOUTUBE ACCOUNT</h3>
			<p class="bottom-20">
				<a href="<?php echo $this->config->item('yt_worship'); ?>" target="blank_">Music Ministry </a><br/>
			</p>
			<h3>CONTACT NUMBER</h3>
			<p class="bottom-20">
				Ptr. Joe Tacadena (Senior Pastor) :  +639178369005
			</p>
	
			<p class="bottom-20" style="font-size:10px;">
				<i>For websites like this, you can email jhesed.tacadena@gmail.com</i>
			</p>
			</div>
		<br/>
	</div>
	
<?php echo $footer; ?>