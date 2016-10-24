<?php

	function show_signup_view() {
		?>
			<form action="join_member.php" method='post' id='sign_up_form'>
				<h2>Join:</h2>
				
				<table>
					<tr>
						<td><label>Email:</label></td>
						<td><input type='text' name="email" id='email' size=23 /> </td>
					</tr>
					<tr>
						<td><label>*Username </label></td>
						<td><input type='text' name="username" id='username' size=23 /> </td>
					</tr>
					<tr>
						<td><label>*Password:</label></td>
						<td><input type='password' name="password_signup" id='password_signup' size=23 /> </td>
					</tr>
					<tr>
						<td><label>*Verify Password:</label></td>
						<td><input type='password' name="verify_password" id='verify_password' size=23 /> </td>
					</tr>
					<tr>
						<td><label>First Name:</label></td>
						<td><input type='text' name="fname" id='fname' size=23 /> </td>
					</tr>
					<tr>
						<td><label>Last Name:</label> </td>
						<td><input type='text' name="lname" id='lname' size=23 /> </td>
					</tr>
					<tr>
						<td><label>Birthdate:</label></td>			
						<td>
							<input type="text" name="bdate" id="bdate"/></div>
							<script type="text/javascript">  
							   $(document).ready(function()
							   {
									$('#bdate').dateDropDowns({dateFormat:'dd-mm-yy'});  
							   });  
							 </script> 	
						</td>
					</tr>	
					<tr>
						<td><input type='submit' id='SIGN_UP' name="SIGN_UP" value='Register' class='register_button' /> </td>
					</tr>
				</form>
			</table>
<?php
	}
?>