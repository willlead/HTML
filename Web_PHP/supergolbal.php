<!DOCTYPE html>
<html>
<body>

<?php 
$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
?>



<h1>3123</h1>
<?php 
addition();
echo $z;
?>
</body>
</html>
