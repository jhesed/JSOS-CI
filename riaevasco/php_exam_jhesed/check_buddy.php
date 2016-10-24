<?php
	require_once("db_config.php");
	include_once("models/Buddy.php");
	include_once("clean_function.php");

	$fname = clean_f($_POST['fname']);
	$lname = clean_f($_POST['lname']);
	
	if(isBuddy($fname, $lname)){
		?>
			<script>
				var name="<?php echo $fname; ?>";
				alert("Yes. " + name + " is your buddy");
			</script>
		<?php
	}
	
	else{
		?>
			<script>
				var name="<?php echo $fname; ?>";
				alert("No. " + name + " is NOT your buddy");
			</script>
		<?php
	}
	
	?>					
							
	<script>
		
		window.location = "buddy_service.php";
	</script>