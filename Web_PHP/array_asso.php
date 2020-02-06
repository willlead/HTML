<!DOCTYPE html>
<html>
<body>

<?php
$age0 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age0["ysr"] = "34";

echo "ysr is " . $age0['ysr'] . " years old.<br>";


$age1[0] = "35";
$age1[1] = "37";
$age1[2] = "43";

echo "ysr is " . $age1[0] . " years old.<br>";



for($i =0; $i<5; $i++){
    $age2[$i] = $i*10;
}

for($i =0; $i<count($age2); $i++){
    echo $age2[$i]."<br>";
}
?>

</body>
</html>
