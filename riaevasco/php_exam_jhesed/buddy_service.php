<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<script src="jquery_lib/jquery1.8.2.js"></script>
		<script src="jquery_lib/jquery.ui.js"></script>
		<script src="jquery_lib/jquery_validate.js"></script>
		<script src="script.js"></script>
	</head>
	
	<body>	

		<?php
			require_once("db_config.php");
			include_once("views/login.php");
			include_once("views/sign_up.php");
			include_once("views/add.php");
			include_once("views/list.php");
			include_once("views/check.php");
			include_once("clean_function.php");
		?>	
			<table>
				<tr>
					<td><input type="button" value="JOIN" class="button" id="join_button"/></td>
					<td><input type="button" value="ADD" class="button" id="add_button"/></td>
					<td><input type="button" value="LIST" class="button" id="list_button"/></td>
					<td><input type="button" value="CHECK" class="button" id="check_button"/></td>
					<td><input type="button" value="LOGIN" class="button" id="login_button"/></td>
				</tr>
			</table>
			
		<div id="join_process">
			<?php show_signup_view(); ?>
		</div>
		<div id="add_process">
			<?php show_add_buddy_view(); ?>
			<p><i>ok po ito. kaso di ko na po nagawang AJAX yung pagsubmit ng form</i></p>				
		</div>
		<div id="list_process">
			<?php showList(); ?>
		</div>
		<div id="check_process">
			<?php checkIfBuddy(); ?>
			<p><i>ok po ito. kaso di ko na po nagawang AJAX yung pagsubmit ng form</i></p>				
		</div>
		<div id="login_process">
			<?php show_login_view(); ?>	
			<p><i>di ko na po napagana yung login. </i></p>
			<p><i>(hindi po nakasulat sa specs yung login. pero as programmer dapat po common sense na gawan ko. pero kinapos po sa time)</i></p>
		</div>	
	</body>
	
	<script>
	$(document).ready(function(){
		$("#login_button").click(function(){
			$("#login_process").fadeIn('slow', function() {});;
			$("#join_process").fadeOut('fast', function() {});;
			$("#add_process").fadeOut('fast', function() {});;
			$("#list_process").fadeOut('fast', function() {});;
			$("#check_process").fadeOut('fast', function() {});;
		});
		$("#join_button").click(function(){
			$("#login_process").fadeOut('fast', function() {});;
			$("#join_process").fadeIn('slow', function() {});;
			$("#add_process").fadeOut('fast', function() {});;
			$("#list_process").fadeOut('fast', function() {});;
			$("#check_process").fadeOut('fast', function() {});;
		});
		$("#add_button").click(function(){
			$("#login_process").fadeOut('fast', function() {});;
			$("#join_process").fadeOut('fast', function() {});;
			$("#add_process").fadeIn('slow', function() {});;
			$("#list_process").fadeOut('fast', function() {});;
			$("#check_process").fadeOut('fast', function() {});;
		});
		$("#list_button").click(function(){
			$("#login_process").fadeOut('fast', function() {});;
			$("#join_process").fadeOut('fast', function() {});;
			$("#add_process").fadeOut('fast', function() {});;
			$("#list_process").fadeIn('slow', function() {});;
			$("#check_process").fadeOut('fast', function() {});;
		});	
		$("#check_button").click(function(){
			$("#login_process").fadeOut('fast', function() {});;
			$("#join_process").fadeOut('fast', function() {});;
			$("#add_process").fadeOut('fast', function() {});;
			$("#list_process").fadeOut('fast', function() {});;
			$("#check_process").fadeIn('slow', function() {});;
		});
	});
		
	</script>
</html>
