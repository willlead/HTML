<?php
$ip = "127.0.0.5";

echo filter_var($ip, FILTER_VALIDATE_IP)."<br>";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>