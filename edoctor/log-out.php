<html>
<head><title>Logout User </title></head>
<body>
<?php require('connect.php') ?>
<?php  
	if(!isset($_SESSION['username']))
	{
		echo "not set";
		header("Location: home.php");		
	}
	
?>
<?php
//If the user is logged, we log him out
if(isset($_SESSION['admin_id']))
{

	unset($_SESSION['username'],$_SESSION['a'],$_SESSION['userid'],$_SESSION['admin_id'],$_SESSION['password']);
	//We log him out by deleting the username and userid sessions

	header("Location: home.php");
}

if(isset($_SESSION['user_id']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'],$_SESSION['userid'],$_SESSION['a'],$_SESSION['user_id'],$_SESSION['password']);
	header("Location: home.php");
}

?>
</body>
</html>