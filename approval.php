<?php
require_once("db.php");
$query = "UPDATE `a_deck` SET `status`='active' WHERE deck_id='{$_GET['d_id']}'";
$result = mysqli_query($conn,$query);
$query1="SELECT * FROM a_deck WHERE deck_id='{$_GET['d_id']}'";
$result1 = mysqli_query($conn,$query1);
$row= mysqli_fetch_array($result1);
$query2 = "INSERT INTO `notify`(`n_id`, `user_id`, `message`, `read_status`) VALUES ('','{$_GET['u_id']}','Admin accepted your request for the deck - {$row['deck_name']}','0')";
$result2 = mysqli_query($conn,$query2);
header("location:publication.php");
?>