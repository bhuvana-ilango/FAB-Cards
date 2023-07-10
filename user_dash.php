<?php 
require_once("db.php");
session_start();
//$_SESSION['userid'] = '1';
$uid = $_SESSION['userid'];
$query = "SELECT * FROM a_deck WHERE created_by='$uid'";
$result = mysqli_query($conn,$query);

// $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DECKS </title>

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

        .box:hover .front {
            transform: perspective(800px) rotateX(180deg);
        }

        .box:hover .back {
            border-radius: 20px 20px 0 0;
            transform: perspective(800px) rotateX(0);
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
        <?php
        while($row = mysqli_fetch_array($result))
        {
      ?>
            <div class="col-md-4">
              <div class = "big">
                <div class= "cardcontainer">
                    <div class="box">
                        <div class="front" style="color:black;"><p> <?php echo $row['deck_name']?> </p></div>
                        <div class="back" style="color:black;">
                          <p>
                          <?php echo $row['description']?> </p>
                            <div class="btn " >
                                <a href="user_card.php?d_id=<?php echo $row['deck_id']?>" class="btn btn-outline-secondary text-black ">Add cards</a>
                                <a href="delete_deck.php?d_id=<?php echo $row['deck_id']?>" class="btn btn-outline-secondary text-black " >Delete</a>
                                <?php if($row['status']=="non active"){?>
                                <a href="publish_html.php?d_id=<?php echo $row['deck_id']?>" class="btn btn-outline-secondary text-black " onclick="myFunction()" >Publish</a>                  
                               <?php
                                }
                                ?>
                            </div>
                          </p>
                        </div>
                    </div>
                </div>
              </div>
              </div>
              <?php
              }
              ?>
            </div>
            <!-- Button trigger modal -->
            <div class = "footer" style="color:black;">
                  <br><br><button id = "add" type="button" class="btn btn-success btn-lg add" data-toggle="modal" data-target="#exampleModal">
                      Add Deck
                  </button>
                </div>
            <!-- <div class="col-md-4"> -->
                <!-- Modal -->  
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3" action="add_deck.php" method="POST">
                          <div class="col-auto">
                            <label for="deckname" class="visually-hidden">Deck Name</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Deck Name" name="deck_name">
                            <label for="deckname" class="visually-hidden">Deck Description</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Deck Description" name="deck_desc">
                            <br></br>
                            <button type="submit" class="btn btn-primary mb-3">Add</button>
                            <button type="button" class="btn btn-success mb-3" data-dismiss="modal">Close</button>

                          </div>
                      </form>
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    
            <script>
function myFunction() {
  alert("The following contents you wish to publish should not have any inappropriate words");
}
</script>
</body>
</html>