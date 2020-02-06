<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// 세션 제거

// remove all session variables
session_unset();
echo var_dump($_SESSION)."<br>";
// destroy the session
session_destroy();
echo var_dump($_SESSION)."<br>";
?>

</body>
</html>