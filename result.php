<?php
require_once("db.php");
session_start();
$did = $_SESSION['deck_id'];
$query = "SELECT * FROM test WHERE deck_id='$did'";
$result = mysqli_query($conn,$query);
$sno='1';
$score = '0';

while( $row = mysqli_fetch_array($result))
{ 
    $temp = '0';
    $temp = $_POST[$sno];
    if($row['q_type']=="mcq" && $temp==$row['answer'])
    {
        $score= $score+$row['score'];
    }
    elseif($temp==$row['answer']){
        $score= $score+$row['score'];
    }
$sno++;
}
$query = "INSERT INTO `score`(`s_id`, `deck_id`, `user_id`, `score`) VALUES ('','$did','{$_SESSION['userid']}','$score')";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<body>
    <p>Your score is: <?php echo $score?></p>
</body>
</html>