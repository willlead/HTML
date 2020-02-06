<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "홍 Doe\n";
fwrite($myfile, $txt);
$txt = "길 Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>