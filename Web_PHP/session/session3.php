<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//  세션 변경
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>