<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// 세션 값 확인

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
print_r($_SESSION);
?>

</body>
</html>