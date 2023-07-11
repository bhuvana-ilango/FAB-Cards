<?php
require_once("db.php");
session_start();
$uid = $_SESSION['userid'];
$query = "INSERT INTO `a_deck`(`deck_id`, `deck_name`, `description`, `c_id`, `sub_id`, `diff_id`, `created_by`, `status`) VALUES ('','{$_POST['deck_name']}','{$_POST['deck_desc']}','{$_POST['deck_class']}','{$_POST['deck_subject']}','{$_POST['deck_difficulty']}','{$_SESSION['userid']}','active')";
$result = mysqli_query($conn,$query);
header("location:admin_deck.php");

?>