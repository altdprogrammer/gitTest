<?php
$_COOKIE['hello'] = "hei";
setcookie("samples", "hello");
echo '<pre/>';
print_r($_COOKIE);
?>