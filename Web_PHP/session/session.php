<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// 세션 생성

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>