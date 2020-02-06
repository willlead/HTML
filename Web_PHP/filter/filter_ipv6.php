<?php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
echo filter_var($ip, FILTER_FLAG_IPV6)."<br>";
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
} else {
    echo("$ip is not a valid IPv6 address");
}
?>