<?php require('connect.php'); ?>

<?php 

$name=$_POST['name'];
$weight=$_POST['weight'];
$formula=$_POST['formula'];
$des=$_POST['description'];

$q="insert into medicine (m_name,m_formula,m_weight,m_description) values ('$name','$formula','$weight','$des');";

if($conn->query($q)===true)
{
	//echo "insertion done !!";
	header("Location: admin.php");		
}


 ?>
