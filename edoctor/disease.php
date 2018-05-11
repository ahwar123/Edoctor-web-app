<?php require('connect.php'); ?>

<?php 

$name=$_POST['d_name'];
$symptom=$_POST['symptoms'];

$q="insert into disease (d_name,d_symptoms) values ('$name','$symptom');";

if($conn->query($q)===true)
{
	//echo "insertion done !!";
	header("Location: admin.php");		
}


 ?>
