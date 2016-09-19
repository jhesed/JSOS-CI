<?php echo $header; ?>
<script src="<?php echo $this->config->item('static_url')."js/give.js"?>"></script>

	<div class="content_box center"><br/><br/>
		<div class="float-left w-15">
			<h1 class="left-30p">Give</h1>
		</div>
		<div class="float-left w-75 top-20">
			<div class="line_brown w-100 bottom-20"></div>	
		</div>
		
		<div class="clear"></div>
		<div class="float-left w-40 left-40p">
			<p class="verse"><i>"Bring the whole tithe into the storehouse, that there may be food
			in the house. Test me in this", says the Lord Almighty, "and see if I will not throw
			open the floodgates of heaven and pour out so much blessing that you will not have
			room enough for it."</i></p>
			<h3>Malachi 3:10</h3>

			<p>Please give us your information details, so we can give you the
			instructions on how to give for our ministry.  We thank you for your
			support! God bless you!</p>
		</div>
		
		<div class="float-left w-40 text-left left-30p">
		
			
			<!-- DIRECT EMAIL -->
			
			<form method="post" id="give-form" class="transparent_bg bottom-20 text-center">

				<input type="text" size=55 id="name" placeholder="Last name, First name, Middle name" class="bottom-10"/>
				<div class="error" id="error-name">Your name is required.</div>

				<input type="text" size=55 id="email" placeholder="*Your email address" class="top-10 bottom-10"/>
				<div class="error" id="error-email">Email is required.</div>

				<input type="text" size=55 id="contact_number" placeholder="Contact Number" class="top-10 bottom-10"/>

				<input type="text" size=55 id="church" placeholder="Church" class="top-10 bottom-10"/>
				
				<input type="text" size=55 id="amount" placeholder="Amount (not required)" class="top-10 bottom-10"/>

				Ministry to support:<select>
					<option name="ministry_to_support" value="pmm">Praise and Music (Musical and Recording Equipment)</option>
					<option name="ministry_to_support" value="lol">Lots of Love Campaign (New Church Building)</option>					
					<option name="ministry_to_support" value="others">Others</option>
				</select>
				
				<textarea rows=10 id="message" placeholder="*Your Message" style="margin-top:10px;"></textarea>
				
				<div class="success" id="success-message">Your email was successfully sent! We'll try to get in touch with you ASAP.</div>
					
				<input class="btn top-10 float-right" id="direct-mail" type="submit" value="Submit"/>
			</form>

		</div>
		<br/>
	</div>
	
<?php echo $footer; ?>