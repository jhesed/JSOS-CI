<?php

	function show_add_buddy_view() {
		?>
			<form action="add_buddy.php" method='post' id='sign_up_form'>
				<h2>Add Buddy:</h2>
				
				<table>
					<tr>
						<td><label>First Name:</label></td>
						<td><input type='text' name="fname" id='fname' size=23 /> </td>
					</tr>
					<tr>
						<td><label>Last Name:</label> </td>
						<td><input type='text' name="lname" id='lname' size=23 /> </td>
					</tr>
					<tr>
						<td><input type='submit' id='ADD' name="ADD" value='Add' class='button' /> </td>
					</tr>
				</form>
			</table>
<?php
	}
?>