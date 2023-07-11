<?php
require_once("db.php");
session_start();
$uid = $_SESSION['userid'];
$query = "INSERT INTO `a_deck`(`deck_id`, `deck_name`, `description`, `c_id`, `sub_id`, `diff_id`, `created_by`, `status`) VALUES ('','{$_POST['deck_name']}','{$_POST['deck_desc']}','','','','{$_SESSION['userid']}','non active')";
$result = mysqli_query($conn,$query);
header("location:user_dash.php");

?>