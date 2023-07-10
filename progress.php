<?php

require_once('db.php');
session_start();
$query = "SELECT * FROM score inner join a_deck on score.deck_id=a_deck.deck_id where user_id='{$_SESSION['userid']}'";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PROGRESS REPORT </title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    

<style>
body {
            background-color: #f5a425;
            
        }
        .navbar{
            background-color: rgba(22,34,57,0.95);
            height: 80px;
            position: fixed;
            z-index: 12;
            width: 100%;
            top: 0;
        }
        .navbar-brand {
            font-weight : bolder;
            font-family: serif;
            font-size : xx-large;
            color: #ffffff;
        }

        .navbar-brand em{
            color: #f5a425;
            font-style: normal;
        }
        .nav-link{
            color: #ffffff;

        }

        .nav-link:hover{
            color: #f5a425;
        }


        li {
            color : #ffffff;
            font-size: large;
        }

        .big {
            margin : 0;
            padding : 0;
            box-sizing: border-box;
            font-family : 'Poppins', sans-serif;
            color : #fff;
        }

    
        .req
        {
        width: 90%;
        margin: center;
        padding-left:85px;
        padding-top: 115px;
        letter-spacing: 2px;
        font-weight: 700;
        text-transform: capitalize;
        }

        h2{
        text-align: center;
        padding-top:10px;
        }

        .rect {
        display: flex;
        flex-direction: row;
        height: 50px;
        width: 1000px;
        border-radius:10px;
        margin-left:80px;
        margin-top:40px;
        margin-bottom:25px;
        }

        

    
        .exid {
        display: flex;
        align-items: center;
        text-align:center;
        font-size: 15px;
        margin-left:300px;
        text-transform: uppercase;
        background-color: #ffffff;
        }



    .division{
        border-radius:10px;
    flex: 1;
	display: flex;
	justify-content: center;
	align-items: center; 
    font-size: 18px;
    border: 2px solid rgba(22,34,57,0.95);
    background-color: #ffffff;
    }




</style>
<body>
    <h1 class="req">PROGRESS REPORT :</h1>
	<div class="rect">
        <div class="division">DECK NAME</div>
		<div class="division">SCORE</div>
	</div>
    <div class="entry">
        <?php
        while($row = mysqli_fetch_array($result))
        {
        ?>

        <div class="rect">
            <div class="division"><?php echo $row['deck_name']?></div>
            <div class="division"><?php echo $row['score']?></div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    </div>
    <div id="4"></div>
</body>
</html>
