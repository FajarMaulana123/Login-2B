<?php
	session_start();
	if (isset($_SESSION['basic_is_logged_in'])) {
		unset($_SESSION['basic_is_logged_in']);
	}

	header('location:login1.php');

?>