<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['info']);

session_destroy();
header('Location:index.php');

?>