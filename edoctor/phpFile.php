<?php
require_once('connect.php');
?>
<?php

$sql="select username from admin;"; 
$res= $conn->query($sql);

while($row=$res->fetch_assoc()){
        $a[]=$row['username'];
}

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);

    

    foreach( $a as $name) {
        if (stristr($name,$q,true)) {
            if ($hint === "") {
               echo $hint = "<option value='".$name."'>";
            } 

            else
            {

                echo $hint .= "<option value='".$name."'>";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>
