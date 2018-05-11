<?php require('connect.php');

		if($_SESSION['userid']==1){ header("location:admin.php"); }
		if($_SESSION['userid']==2){ header("location:user.php"); }
?>