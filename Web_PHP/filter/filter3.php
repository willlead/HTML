<?php
$int = "100";
// echo var_dump( filter_var($int, FILTER_VALIDATE_INT))."<br>";
// echo !var_dump( filter_var($int, FILTER_VALIDATE_INT))."<br>";
if (!filter_var($int, FILTER_VALIDATE_INT) === false 
        || filter_var($int, FILTER_VALIDATE_INT) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>