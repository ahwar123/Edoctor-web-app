<?php require('connect.php');?>

<?php
$id=$_POST['rid'];
$name=$_POST['name'];
$age=$_POST['age'];
$comment=$_POST['comment'];


$q="insert into review (ur_name,ur_age,ur_comment)values('$name','$age','$comment');";

if($conn->query($q)===true){
	
	$res=$conn->query($q);

	$q="select max(rv_id) as rv_id from review;";

	$res1=$conn->query($q);

	while ($row = $res1->fetch_assoc()) {

			$rv=$row['rv_id'];
		}

	$q="insert into med_review (m_id,rv_id)values('$id','$rv');";

	$result=$conn->query($q);
	echo "review added in junction table";
}


header("location:review.php");

?>