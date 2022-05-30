<?php
session_start();

session_destroy();
header("Location: /php-masterclass/session.php")
?>