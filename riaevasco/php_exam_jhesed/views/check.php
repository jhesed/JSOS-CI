<?php

	function checkIfBuddy() {
		?>
			<form action="check_buddy.php" method='post' id='buddy_form'>
				<h2>Check Buddy</h2>
				
				<table>
					<tr>
						<td><label>First name:</label></td>
						<td><input type='text' name="fname" id='fname' size=23 /> </td>
					</tr>
					<tr>
						<td><label>Last name:</label></td>
						<td><input type='text' name="lname" id='lname' size=23 /> </td>
					</tr>
					<tr>
						<td><input type='submit' id='check' name="check" value='Check' class='button' /> </td>
					</tr>
				</table>
				<p><i>*note: case sensitive</i></p>
			
			</form>
<?php
	}
?>