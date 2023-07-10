<?php 
require_once("db.php");
session_start();
$query = "SELECT * FROM a_deck where status = 'pending'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);

$query1 = "SELECT * FROM user where username not like '%admin'";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_num_rows($result1);


$query2="select * from a_deck WHERE created_by='admin'";
$result2=mysqli_query($conn,$query2);
$row2 = mysqli_num_rows($result2);

$query3="select * from a_deck WHERE created_by!='admin'";
$result3=mysqli_query($conn,$query3);
$row3 = mysqli_num_rows($result3);

$query4="SELECT * FROM contact where read_status='0'";
$result4=mysqli_query($conn,$query4);
$row4 = mysqli_num_rows($result4);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ADMIN | DASHBOARD </title>

    <!-- Bootstrap linksheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- CSS linksheet -->
    <link rel = "stylesheet" type = "text/css" href = "static/styles/dashboard.css'">
</head>

<style>

/*header*/
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

        .cardcontainer {
            display: flex;
            justify-content : center;
            align-items: center;
            height : 50vh;
        }

        .box {
            width : 350px;
            height : 235px;
            position : relative;
        }

        

li {
    color : #ffffff;
    font-size: large;
}

.top{
    margin-top: 100px;
    display:flex;
    flex-direction:row;
}

.hi{
    padding-left:40px;
    padding-top:30px;
}


.box{
    background-color: #ffffff;
    border: 2px solid black;
    width:300px;
    padding:20px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    border-radius: 20px;

  
}

.content{
    display: flex;
    flex-wrap: wrap;
    padding-left: 100px;
    
    
}

.create{
    padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: rgb(93, 202, 198);
        border: none;
        border-radius: 25px;
        cursor: pointer;
        margin-left: 70px;
        transition: background-color 0.3s ease;
        margin-top:15px;
        align-self: center;
}

.create:hover{
    background-color: rgba(93, 202, 198,0.4);
    transition-duration: 0.1ms;
}



.head{
    font-weight:700;
    font-size:24px;
    text-align:center;
}

#box2{
    background-color: #ffffff;
    border: 3px solid black;
    float:right !important;
    height:500px;
    width:500px;
    padding:20px;
    margin-left:50px;
    margin-top:30px;
    margin-right: 100px;
    border-radius: 20px;
}

.rectangle{
    background-color: #ffffff;
    border: 3px solid black;
    float:right !important;
    height:70px;
    width:450px;
    padding:20px;
    margin-left:150px;
    
    border-radius: 20px;
    text-align: center;
    margin-top: 40px;
}

.rectangle p{
    font-weight: 700;
}

.square{
    text-align: center;
    border: 3px solid black;
    border-radius: 20px;
    height:70px;
    width:150px;
    margin-left: 50px;

}

.res1{
    font-weight: 1000;
    margin-top: -42px;
    margin-right: -180px;
    color:red ;
    font-size: 20px;
    
}

.res2{
    font-weight: 1000;
    margin-top: -42px;
    margin-right: -200px;
    color:red ;
    font-size: 20px;
    
}

.res3{
    font-weight: 1000;
    margin-top: -60px;
    margin-right: 0px;
    color:red ;
    font-size: 20px;
    
}

.hor{
    display: flex;
    flex-direction: row;
    margin-left: -20px;
    margin-top: 50px;

}
.page{
    display:flex;
    flex-direction:row;
}

.noti{
    position: absolute;
  top: 10px;
  right: 10px;
  background-color: red;
  color: white;
  padding: 7px;
  border-radius: 50%;
  font-size: 16px;
}

.hnoti{
    font-weight:700;
    font-size:24px;
    text-align:center;
    padding-top: 25px;
}


</style>
<body>

<nav class="navbar ">
        <div class="container">
          <a class="navbar-brand "> <em>FAB</em> CARDS</a>
          <ul class="nav ">
            <li><a href="admindash.php" class="nav-link ">Home</a></li>
            <li><a href = "landing.html" class="nav-link"> Log Out </a></li>
            <li><a href = "admindash.php" class="nav-link"> WELCOME ADMIN </a></li>
          </ul>
        </div>
</nav>
<br></br>
<br></br>
<div class="page">
    <div class="content">
        <div class="box">
            <div class="head">CREATE DECKS</div>
            <br>
            
            <div class="butn">
                <button onclick="location.href='admin_deck.php'" type="submit" class="create">ADD DECK</button>
            </div>
        </div>    
        <div class="box">
            <div class="head">PUBLICATION REQUEST</div>
            <div class="butn">
                <button onclick="location.href='publication.php'" type="submit" class="create">REVIEW</button>
            </div>
        </div> 
        <div class="box">
            <div class="hnoti">NOTIFICATION</div>
            <div class="noti"><?php echo $row4 ?></div>
            <div class="butn">
                <button onclick="location.href='notification.php'" type="submit" class="create">VIEW</button>
            </div>
        </div> 
    </div>

    <div id="box2">
        <div class="rectangle">
            <p>Publication Request: <div class=res1><?php echo $row?></div></p>
            
        </div>
        <div class="rectangle">
            <p>Total Number of Users:<div class=res2><?php echo $row1 ?></div></p>
            
        </div>
        <div class="rectangle">
            <p>Total Number of Decks</p>
            <div class="hor">
            <div class="square">
                <p>By Admin</p><br>
                <p><div class=res3><?php echo $row2 ?></div></p>
            </div>
            <div class="square">
                <p>By user</p><br>
                <p><div class=res3><?php echo $row3 ?></div></p>
            </div>
        </div>

        </div>
    </div>

</div>
</body>

</html>