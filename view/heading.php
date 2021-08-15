<?php
	if(!isset($_SESSION['userName'])){
		session_start();
	}

$fname = $lname = "";
if(isset($_SESSION['fname'])){
	$fname = $_SESSION['fname'];
}
if(isset($_SESSION['lname'])){
	$lname = $_SESSION['lname'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Heading</title>
</head>
<body>

		
		<table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#f1b3d4" height = "50" width="100%">
		<tr bgcolor="#f1b3d4" height = "50" width="100%">
			<td  height = "50" width="20%"><a href="#">< height="100" width="100%"></a></td>
			<td  height = "50" width="60%" align="center" ><b style="font-size: 50px;"><?php echo "Welcome" . " " .$fname . " " .$lname; ?></b></td>
			<td class="home"   height = "50" width="5%" align="center"><a class="hometext" href="../View/dashbord.php" style="color: black;  ;"><br><b >Home Page</b> </a></td>
			<td class="cpass"  height = "50" width="5%"><a class="cpassText" href="../Controller/passwordChange.php" style="color: black;  ;"> <br><b>Change Password</b></a></td>
			<td class="update"  height = "50" width="5%"><a class="updateText" href="../Controller/updateProfile.php" style="color: black;  ;"><br><b>View Profile</b> </a></td>
			<td class="logout"  height = "50" width="5%">
				<a class="logoutText" href="../Controller/logout.php" style="color: black;  ;"><br><b>Logout</b> </a>
	
			</td>
		</tr>
	</table>
	
	


</body>
</html>