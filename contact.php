<?php

session_start();
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'flash');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$time = date('Y-m-d H:i:s');


$s = "INSERT INTO `contact`(`c_name`,`c_email`,`c_msg`,`c_time`,`read_status`) VALUES ('$name','$email','$msg','$time','0')";

$result = mysqli_query($con, $s);

header('location:landing.html');

