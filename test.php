<?php 
require_once("db.php");
session_start();
$_SESSION['class'] = '1';
$_SESSION['subject'] = '3';
echo $_SESSION['class'];
echo $_SESSION['subject'];

?>