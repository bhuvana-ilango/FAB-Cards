<?php 
require_once("db.php");
session_start();
$did = $_POST['deck_id'];
$_SESSION['deck_id'] = $_POST['deck_id'];
$query = "SELECT * FROM test WHERE deck_id='$did'";
$result = mysqli_query($conn,$query);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

     <!-- Bootstrap linksheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS linksheet -->
    <!--link rel="stylesheet" type = "text/css" href="{{ url_for('static', filename='styles/landing.css') }}"-->

    <title>EXAMS</title>
    
    <!-- Bootstrap linksheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- CSS linksheet -->
    <link rel = "stylesheet" type = "text/css" href = "static/styles/dashboard.css'">
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

        

        .flashcard {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
      }

      .flashcard h2 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
      }

      .flashcard p {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .flashcard label {
        display: block;
        font-size: 16px;
        margin-bottom: 10px;
      }

      .flashcard input[type="text"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      .flashcard input[type="text"]:focus {
        outline: none;
        border-color: #337ab7;
        box-shadow: 0 0 5px rgba(51, 122, 183, 0.5);
      }
      .footer {
            position : fixed;
            left : 50%;
            bottom : 100px;
            transform : translate(-50%, 50%);
            margin : auto;
        }

</style>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar ">
        <div class="container">
          <a class="navbar-brand "> <em>FAB</em> CARDS</a>
          <ul class="nav ">
            <li><a href="landing2.php" class="nav-link ">Home</a></li>
            <li><a href = "landing.html" class="nav-link"> Log Out </a></li>
          </ul>
        </div>
    </nav>
    <br></br>
    <br></br>


<form action="result.php" method="post">
<?php
// $score = '0';
$sno = '1';
while( $row = mysqli_fetch_array($result))
{ 

if($row['q_type']=="fillup")
{
?>
<div class="flashcard">
<p>Fill in the blanks:</p>

  <h2><?php echo $sno.".".$row['question'] ?></h2>
  
    <label for="answer">Answer:</label>
    <input type="text" id="answer" name="<?php echo $sno ?>" placeholder="Enter your answer here">
  
</div>
<?php
$sno++;
}
else
{
?>

<div class="flashcard">
<p>Select the correct answer:</p>
  <h2><?php echo $sno.".".$row['question'] ?></h2>
    <input type="radio" id="option1" name="<?php echo $sno ?>" value="opt1">
    <label for="option1"><?php echo $row['opt1'] ?></label><br>
    <input type="radio" id="option2" name="<?php echo $sno ?>" value="opt2">
    <label for="option2"><?php echo $row['opt2'] ?></label><br>    
</div>
<?php
}
$sno++;
}
?>

<button class="btn btn-success btn-lg add" position="center"; type="submit">SUBMIT TEST</button>

</form>
</body>
</html>