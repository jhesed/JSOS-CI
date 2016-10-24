<?php
	require_once("db_config.php");
	include_once("models/Buddy.php");
	include_once("clean_function.php");

	$fname = clean_f($_POST['fname']);
	$lname = clean_f($_POST['lname']);
	create_buddy_m($fname, $lname);
	
	?>					
							
	<script type>
		var name = "<?php echo $fname; ?>";
		alert("You successfully added " + name);
		window.location = "buddy_service.php";
	</script>
	