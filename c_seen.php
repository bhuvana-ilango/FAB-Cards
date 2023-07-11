<?php 
require_once('db.php');
$query="UPDATE `contact` SET `read_status`='1' WHERE c_id='{$_GET['c_id']}'";
$result=mysqli_query($conn,$query);
header("location:notification.php");
?>