<?php require('connect.php');

	$checkUsername = $_POST["username"];
	$checkPassword = $_POST["password"];


if($checkUsername&&$checkPassword)
{
	$sql = "SELECT * from admin";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			
			if($checkUsername==$dbusername&&$checkPassword==$dbpassword)
			{
				$_SESSION['username'] = $row['username'];
				$_SESSION['userid'] = 1;
				$_SESSION['admin_id']=$row['id'];
				$_SESSION['password']=$row['password'];
				echo $_SESSION['username'];
				header("Location:welcome.php");
				echo 'You are logged in!';
				
			}
	    }
		//echo 'User does not exist!';
		//goto notFound;
	}
	$sql = "SELECT * from user";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
		{
			$dbusername = $row['user'];
			$dbpassword = $row['pass'];
			
			if($checkUsername==$dbusername&&$checkPassword==$dbpassword)
			{
				$_SESSION['username'] = $row['user'];
				$_SESSION['userid'] = 2;
				$_SESSION['user_id']=$row['id'];
				$_SESSION['password']=$row['pass'];
				echo $_SESSION['username'];
				header("Location: welcome.php");
				echo 'You are logged in!';
			}
	    }

	    $_SESSION['a']=12;
		         $error = "Your Login Name or Password is invalid";
	 		header("Location:login.php");

	 }
	else 
	{$_SESSION['a']=12;
	          $error = "Your Login Name or Password is invalid";
	header("Location:login.php");
	}
}

// else
// {
// 	notFound:
// 	if(!isset($_SESSION['userid']))
// 	{
// 		$_SESSION['x']=1;
// 		header("Location:login.php");
// 	}
// }
?>
 