<?php require('connect.php'); ?>

<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['uname'];
$phonenumber=$_POST['phone'];
$email=$_POST['email'];
$country=$_POST['prov'];
// $city=$_POST['fname'];
$password=$_POST['passs'];


$q="insert into user (user,pass,fname,lname,phone,email,country) values ('$username','$password','$fname','$lname','$phonenumber','$email','$country');";

if($conn->query($q)===true)
{
	$res=$conn->query($q);

	//echo "insertion done !!";
	//header("Location: user.php");		

$sql = "SELECT * from user";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
		{
			$dbusername = $row['user'];
			$dbpassword = $row['pass'];
			
			if($username==$dbusername&&$password==$dbpassword)
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

	    $_SESSION['a']=1;
		         $error = "Your Login Name or Password is invalid";
	 		header("Location:login.php");

	 }
	else 
	{
		$_SESSION['a']=1;
	          $error = "Your Login Name or Password is invalid";
	header("Location:login.php");
	}
}

 ?>
