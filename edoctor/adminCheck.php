<?php require('connect.php');?>
<?php
	$Username = $_POST["User"];
	$Password = $_POST["Pass"];


if($Username&&$Password)
{
	$q = "SELECT * from Admin";
	$result = $conn->query($q);

	if ($result->num_rows > 0) 
	{
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			
			if($Username==$dbusername&&$Password==$dbpassword)
			{
				$_SESSION['admin_id']=$row['id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['userid'] = 1;
				$_SESSION['password']=$row['password'];
				

				echo "You are Logged on!";

				echo $_SESSION['admin_id'];
				echo $_SESSION['username'];
				echo $_SESSION['password'];

				header("Location: admin.php");

			}
	    }
	}
	
    echo "No records found";
	goto notFound;

}

else
{
	echo 'Invalid username or password!';
}
 ?>
<?php notFound: ?>
<br><br>

<a href="adminlogin.php">Click here to Try Again!</a>


 