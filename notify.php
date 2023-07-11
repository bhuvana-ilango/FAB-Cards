<?php
require_once('db.php');
session_start();
$query = "SELECT * FROM notify WHERE user_id ={$_SESSION['userid']}";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> NOTIFICATION </title>
     <!-- Bootstrap linksheet -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- CSS linksheet -->
    <link rel = "stylesheet" type = "text/css" href = "static/styles/dashboard.css'">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- favicon -->

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

    

        body
        {
        margin: 0;
        font-family: 'Lato', sans-serif;
        height:100%;
        overflow-y: auto;
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
        border: 2px solid rgb(32, 228, 146);
        border-radius:10px;
        margin-left:80px;
        margin-top:40px;
        margin-bottom:25px;
        }

        .rectangle{
        display: flex;
        flex-direction: row;
        height: 110px;
        width: 1000px;
        border: 2px solid rgba(22,34,57,0.95);
        border-radius:10px;
        margin-left:80px;
        margin-bottom:10px;
        background-color: #ffffff;

        }

    
        .box-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        max-width: 500px;
        margin-left: 1000px;

        }

        .box-button:hover {
        background-color:rgba(22,34,57,0.55);
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

    </style>
<body>
    <!-- Navigation bar -->
    <nav class="navbar ">
        <div class="container">
          <a class="navbar-brand "> <em>FAB</em> CARDS</a>
          <ul class="nav ">
            <li><a href="landing2.php" class="nav-link ">Home</a></li>
            <li><a href = "landing.html" class="nav-link"> Log Out </a></li>
            <li><a href = "admindash.php" class="nav-link">  </a></li>
          </ul>
        </div>
    </nav>
    <br></br>
    <h1 class="req" style="color:rgba(22,34,57,0.95);">NOTIFICATIONS</h1>
    <p></p><p></p>

	
    <div class="entry">
        <?php
        while($row = mysqli_fetch_array($result))
        {
        ?>

        <div class="rectangle">
            <div class="exid"><?php echo $row['message']?></div>
        </div>
            <?php if($row['read_status']=="0"){?>
            <button class="box-button" onclick="location.href='seen.php?n_id=<?php echo $row['n_id']?>'">Mark as read</button>
            <?php }
            else{?>
            <button class="box-button" >Seen</button readonly>
            <?php }?>
            <br></br>
        </div>
        <?php
        }
        ?>
    </div>
    </div>
</body>
</html>
