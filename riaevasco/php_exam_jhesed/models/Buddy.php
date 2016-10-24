<?php

	function create_buddy_m($fname, $lname) {
		mysql_query("INSERT INTO ria_buddies(fname, lname) VALUES ('$fname', '$lname')") OR die("ERROR CONNECTING TO DATABASE!");
	}
	
	function listBuddies(){
		return (mysql_query("SELECT * FROM ria_buddies"));
	}
	
	function isBuddy($fname, $lname) {
		$query = mysql_query("SELECT COUNT(b_id) FROM ria_buddies WHERE (fname='$fname' AND lname = '$lname')");
		$is_member = mysql_result($query, 0);
		
		if(1 == $is_member)
			return true;
		else
			return false;
	}
?>