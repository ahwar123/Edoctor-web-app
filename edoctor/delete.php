<?php require('connect.php');
?>
<?php
$id=$_POST['idds'];

$q="delete from disease where d_id='$id'";

if($conn->query($q)===true)
{
	$res=$conn->query($q);
	echo "Row deleted !!";
	header("Location: admin.php");		
}

?>