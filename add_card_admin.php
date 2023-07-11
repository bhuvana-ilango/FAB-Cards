<?php
require_once("db.php");
session_start();
$query = "INSERT INTO `a_card`(`c_id`, `front`, `back`, `deck_id`) VALUES ('','{$_POST['front']}','{$_POST['back']}','{$_SESSION['deck_id']}')";
$result = mysqli_query($conn,$query);
header("location:admin_deck.php?d_id={$_SESSION['deck_id']}");

?>