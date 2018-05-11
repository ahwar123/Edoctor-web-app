<?php require('connect.php');
?>

<?php

$id=$_POST['idss'];
$name=$_POST['name'];
$weight=$_POST['weight'];
$formula=$_POST['formula'];
$description=$_POST['description'];


$q="update medicine set m_name='$name',m_weight='$weight',m_formula='$formula',m_description='$description' where m_id='$id'";
if($result = $conn->query($q)===true){
$result = $conn->query($q);

header("Location: admin.php");
}


?>