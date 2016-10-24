<?php

	function create_member_m($email, $username, $password, $fname, $lname, $birthdate) {
		mysql_query("INSERT INTO ria_members (email, username, password, fname, lname, birthdate) VALUES ('$email', '$username', '$password', '$fname', '$lname', '$birthdate')") OR die("ERROR CONNECTING TO DATABASE!");
	}
?>