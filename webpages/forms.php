<!--
	COSC 213 Final Project
	Taylor Morrow - 300189378
	Mike Dupree - 300182241
-->

<?php 
	if (filter_input (INPUT_COOKIE, 'auth') == "1") {
		echo "<h1>Sorry! This webpage is currently being developed :(</h1>";
	} else {
		header("Location: ../login.html");
		exit;
	}
?>