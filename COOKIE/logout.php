<?php
setcookie('userdata','',time() + (86400 * 30),"/");
unset($_COOKIE['userdata']);

header("location:index.php");

?>