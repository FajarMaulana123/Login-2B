<?php
session_start();
$errorMessage = '';
if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
	if ($_POST['txtUserId']==='admin' && $_POST['txtPassword']==='admin') {
		$_SESSION['basic_is_logged_in'] = true;
		header('location:main1.php');
		exit();
	}else{
		$errorMessage = 'Sorry, wrong username / Password';
	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.style5{
			color:#0000FF;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
	if ($errorMessage != '') {
	?>
	<p>
		<div align="center"><span class="style5"><?php echo $errorMessage; ?></span></div>
	</p><?php } ?>
	<form action="" method="post" name="frmLogin" id="frmLogin">
		<table width="400" border="1" align="center">
			<tr>
				<th width="160" scope="col"><div align="left"> User Id</div></th>
				<th width="224" scope="col"><div align="left"><input type="text" name="txtUserId" id="txtUserId"></div></th>
			</tr>
			<tr>
				<td><div align="left">Password</div></td>
				<td><div align="left"><input type="password" name="txtPassword" id="txtPassword"></div></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>