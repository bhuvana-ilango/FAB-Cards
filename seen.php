<?php 
require_once('db.php');
$query="UPDATE `notify` SET `read_status`='1' WHERE n_id='{$_GET['n_id']}'";
$result=mysqli_query($conn,$query);
header("location:notify.php");
?>