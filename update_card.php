<?php
require_once("db.php");
session_start();
$uid = $_SESSION['userid'];
$query = "UPDATE `a_card` SET `front`='{$_POST['front']}',`back`='{$_POST['back']}',`deck_id`='{$_SESSION['deck_id']}' WHERE 1";
$result = mysqli_query($conn,$query);
header("location:user_dash.php?d_id={$_SESSION['deck_id']}");

?>