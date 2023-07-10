<?php

session_start();
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'flash');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT * FROM user where username='$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if(isset($row))
{
    if(($row['username'])==$name)
    {
        if(($row['username'])=="admin")
        {
            header('location:admindash.php');
            $_SESSION['userid']="admin";
        }
        else
        {
            header('location:landing2.php');
            $_SESSION['userid']=$row['user_id'];
        }
        
    }
}
else
    {
        header('location:faillogin.html');
    }


?>