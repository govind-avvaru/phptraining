<?php
$cookie_name = "jaya";
$cookie_value = "4";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo "Cookie named '" . $cookie_name . "' is not set!";
?>
