<?php
	session_start();
	if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
		header('location:login1.php');
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Main User Page</title>
</head>
<body>
	<p>this main application</p>
	<p>&nbsp;</p>
	<p><a href="logout1.php">Logout</a></p>
</body>
</html>