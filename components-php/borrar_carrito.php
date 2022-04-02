<?php
header("location:" . $_SERVER['HTTP_REFERER'] . "");
session_unset($_SESSION['carrito']);
?>
a