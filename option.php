<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OPTION </title>

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
            height : 250px;
            position : relative;
        }

        .box .front, .box .back {
            position : absolute;
            width : 350px;
            height : 250px;
            display: flex;
            justify-content : center;
            align-items: center;
            flex-direction: column;
            background :whitesmoke;
            backface-visibility : hidden;
            cursor : pointer;
            border-radius: 20px;
            box-shadow : 0 5px 30px rgba(22,34,57,0.95);
            transition: transform 0.8s;
        }

        .box .back {
            transform : perspective(800px) rotateX(-100deg);
        }

        .box .front p, .box .back p {
            font-size : x-large;
            font-weight : bolder;
            margin : 10px 20px;
            text-align : center;
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
            <li><a href = "admindash.php" class="nav-link">  </a></li>
          </ul>
        </div>
    </nav>
    <br></br>


    <!-- Deck -->
    <div class="container mt-5 mb-5">
        <div class="row gy-5">
         
            <div class="col-md-4">
              <div class = "big">
                <div class= "cardcontainer">
                    <div class="box">
                        <div class="front" style="color:black;"onclick="location.href='user_dash.php'" ><p> MY DECKS </p></div>
                    </div>
                </div>
              </div>
            </div>
            

            
            <div class="col-md-4">
              <div class = "big">
                <div class= "cardcontainer">
                    <div class="box">
                        <div class="front"style="color:black;" onclick="location.href='classlist.php'"><p> VIEWS THE CONTENTS </p></div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class = "big">
                <div class= "cardcontainer">
                    <div class="box">
                        <div class="front" style="color:black;" onclick="location.href='progress.php'"><p> KNOW YOUR PROGRESS </p></div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class = "big">
                <div class= "cardcontainer">
                    <div class="box">
                        <div class="front" style="color:black;"onclick="location.href='notify.php'"><p> NOTIFICATIONS </p></div>
                    </div>
                </div>
              </div>
            </div>

        </div>
    </div>
    
    
</div>
</body>
</html>