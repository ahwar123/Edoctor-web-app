<?php require('connect.php'); ?>

<?php

$id=$_POST['d_ids'];
$med=$_POST['med'];
$name=$_POST['d_name'];
$symptoms=$_POST['symptoms'];


if($med!="")
{
echo "string1";
$q2="select m_id from medicine where m_name='$med';";
$res=$conn->query($q2);
	if($res->num_rows > 0)
	{echo "string2";
			while($row=$res->fetch_assoc())
			{echo "string3";

				$a=$row['m_id'];
				$q3="insert into disease_medicine (m_id,d_id)values('$a','$id');";
				$r=$conn->query($q3);
			}
			
		}
	
}

$q="update disease set d_name='$name',d_symptoms='$symptoms' where d_id='$id'";
if($conn->query($q)===true){
$result = $conn->query($q);

header("Location: admin.php");
}


 ?>
