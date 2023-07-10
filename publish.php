<?php
require_once("db.php");
session_start();
$query = "UPDATE `a_deck` SET c_id = '{$_POST['class']}',sub_id = '{$_POST['sub']}',diff_id = '{$_POST['level']}',`status`='pending' WHERE deck_id='{$_POST['d_id']}'";
$result = mysqli_query($conn,$query);
$query1="SELECT * FROM a_deck WHERE deck_id='{$_POST['d_id']}'";
$result1 = mysqli_query($conn,$query1);
$row= mysqli_fetch_array($result1);
$query2="INSERT INTO `notify`(`n_id`, `user_id`, `message`, `read_status`) VALUES ('','{$_SESSION['userid']}','Admin received your request for the deck - {$row['deck_name']}','0')";
$result2 = mysqli_query($conn,$query2);
header("location:user_dash.php");
?>