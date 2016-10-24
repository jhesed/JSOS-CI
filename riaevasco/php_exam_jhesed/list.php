<?php
	include_once("models/Buddy.php");
	
	function showList() {
		echo "<b>Buddy List:</b> <br/>";
		$query=listBuddies();
		echo "<table>";
		while($row=mysql_fetch_assoc($query)) {
			echo "
					<tr>
						<td>
							<div class='my_table'>{$row['fname']}</div>
						</td>
						<td>
							<div class='my_table'>{$row['lname']}</div>
						</td>
					</tr>";
		}
		echo "</table>";
	}
?>