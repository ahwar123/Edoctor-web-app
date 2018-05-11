<?php
// Array with names
$a[] = "Amna";
$a[] = "Aiman";
$a[] = "Aamir";
$a[] = "Aadil";
$a[] = "Adil";
$a[] = "Amir";
$a[] = "Anjum";
$a[] = "Abeer";
$a[] = "Adam";
$a[] = "Ameer";
$a[] = "Azmat";
$a[] = "Ateeb";
$a[] = "Ateem";
$a[] = "Atif";
$a[] = "Akmal";
$a[] = "Altaf";
$a[] = "Ajwa";
$a[] = "Areeba";
$a[] = "Aleem";
$a[] = "Benish";
$a[] = "Barira";
$a[] = "Basit";
$a[] = "Benjo";
$a[] = "Cat";
$a[] = "Catrina";
$a[] = "Carol";
$a[] = "Cann";
$a[] = "Cinderella";
$a[] = "Dawood";
$a[] = "Dungal";
$a[] = "Delshad";
$a[] = "Eman";
$a[] = "Easy";
$a[] = "Fareeha";
$a[] = "Fatima";
$a[] = "Faheem";
$a[] = "Faryal";
$a[] = "Faisal";
$a[] = "Fawad";
$a[] = "Fareed";
$a[] = "Faiz";
$a[] = "Fahmeed";
$a[] = "Fayeem";
$a[] = "Ghost";
$a[] = "Ghaleem";
$a[] = "Haroon";
$a[] = "Haleem";
$a[] = "Hakeem";
$a[] = "Hatim";
$a[] = "Hajra";
$a[] = "Hakima";
$a[] = "Hamina";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
