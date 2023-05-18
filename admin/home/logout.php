<?php 

session_start();

session_unset();

session_destroy();

header("Location: ../../registration_and_login/login.php");

?>