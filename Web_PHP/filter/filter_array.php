<?php
$int = 150;
$min = 1;
$max = 200;
echo filter_var($int, FILTER_VALIDATE_INT, 
array("options" => 
        array("min_range"=>$min, "max_range"=>$max)))."<br>";
if (filter_var($int, FILTER_VALIDATE_INT, 
        array("options" => 
                array("min_range"=>$min, "max_range"=>$max))) !== false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}
?>