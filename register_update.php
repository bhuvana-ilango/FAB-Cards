<?php

session_start();
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'flash');

$name = $_POST['username'];
$pass = $_POST['password'];

$s1 = "SELECT * FROM user where username='$name' && password='$pass'";


$s = "INSERT INTO `user`(`username`,`password`) VALUES ('$name','$pass')";

$result1 = mysqli_query($con, $s1);
$row = mysqli_fetch_array($result1);


if(isset($row))
{

    header('location:failregister.html');
} 

else {
  $result = mysqli_query($con, $s);
  header('location:successregister.html');

  }


?>