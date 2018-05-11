<?php require('connect.php');
?>
<?php
$id=$_POST['rid'];

$q="delete from review where rv_id='$id'";

if($conn->query($q)===true)
{
	$res=$conn->query($q);
	echo "Row deleted !!";
	header("Location: review.php");		
}

?>