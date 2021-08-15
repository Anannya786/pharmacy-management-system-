<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashbord</title>

</head>
<body>

	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		
		//header("location: ../Controller/admin_login.php");
	}
	?>

	<!-- 1st layer -->
	<?php
	include '../view/header.html';
	?>
	<!-- 2nd layer-->
<?php
	include '../view/heading.php';
	?>
	<img src="../image/forntPoster.jpg" width="100%" height="400">
	<!--Last Layer -->
	<?php
	include '../View/footer.php';
	?>
	
</body>
</html>