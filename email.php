<?php
require_once("db.php");
session_start();
    
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'flash');
// $cid = $_SESSION['c_id'];
$paragraph = $_POST['paragraph'];
$mail=$_POST['mail'];


$to = "$mail";
$subject = "Reply from FAB cards";
$paragraph = "$paragraph";
$headers = "From: athithyaa.ramesh@pec.edu\r\n";
// $headers .= "Reply-To: sender@example.com\r\n";
// $headers .= "Content-Type: text/html\r\n";

// send the email
if (mail($to, $subject, $paragraph, $headers)) {
  echo "Email sent successfully.";
} else {
  echo "Email sending failed.";
}
