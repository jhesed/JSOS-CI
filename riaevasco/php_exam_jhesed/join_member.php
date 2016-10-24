<?php
	require_once("db_config.php");
	include_once("models/Member.php");
	include_once("clean_function.php");

	$email = clean_f($_POST['email']);
	$username = clean_f($_POST['username']);
	$password = clean_f($_POST['password_signup']);
	$verify_password = clean_f($_POST['verify_password']);
	$fname = clean_f($_POST['fname']);
	$lname = clean_f($_POST['lname']);
	$birthdate = clean_f($_POST['birthdate']);
	create_member_m($email, $username, $password, $fname, $lname, $birthdate);
	
	?>					
							
	<script type>
		var name="<?php echo $fname; ?>";
		alert("Thank you for joining " + name + ".");
		window.location = "buddy_service.php";
	</script>