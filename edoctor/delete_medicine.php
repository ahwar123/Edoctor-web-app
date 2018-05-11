<?php require('connect.php');
?>
<?php
$id=$_POST['mid'];

$q="delete from medicine where m_id='$id'";

if ($conn->query($q)){
    // delete the parent row
$res=$conn->query($q);
echo "Row deleted !!";
	header("Location: admin.php");
}
?>