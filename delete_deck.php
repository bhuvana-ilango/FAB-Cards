<?php 
require_once("db.php");
session_start();
$uid = $_SESSION['userid'];
$query = "DELETE FROM `a_deck` WHERE created_by='{$_SESSION['userid']}' AND deck_id='{$_GET['d_id']}'";
$result = mysqli_query($conn,$query);
header("location:user_dash.php");
?>