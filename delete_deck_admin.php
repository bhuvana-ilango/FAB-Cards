<?php 
require_once("db.php");
session_start();

$query = "DELETE FROM `a_deck` where created_by='admin' and deck_id='{$_GET['d_id']}'";
$result = mysqli_query($conn,$query);
header("location:admin_deck.php")
?>