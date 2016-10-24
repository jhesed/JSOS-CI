<?php

	function show_login_view() {
		?>
			<form action="add_buddy.php" method='post' id='sign_up_form'>
				<h2>Login</h2>
				
				<table>
					<tr>
						<td><label>Username:</label></td>
						<td><input type='text' name="username" id='username' size=23 /> </td>
					</tr>
					<tr>
						<td><label>Password:</label> </td>
						<td><input type='text' name="password" id='password' size=23 /> </td>
					</tr>
					
					<tr>
						<td><input type='submit' id='LOG_IN' name="LOGIN_IN" value='Login' class='login_button' /> </td>
					</tr>
				</table>
			</form>
<?php
	}
?>