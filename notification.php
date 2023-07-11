<?php
require_once('db.php');
session_start();
$query = "SELECT * FROM contact where read_status='0' ";
$result = mysqli_query($conn,$query);

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
        width: 1400px;
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
        margin-left: 1250px;

        }

        .box-button:hover {
        background-color:rgba(22,34,57,0.55);
        }

        .cname{
            display: flex;
        align-items: center;
        text-align:center;
        font-size: 15px;
        margin-left:50px;
        max-width: 100px;
        text-transform: capitalize;
        background-color: #ffffff;
        }
        .cemail{
            display: flex;
        align-items: center;
        text-align:center;
        max-width: 100px;
        font-size: 15px;
        margin-left:50px;
        text-transform: lowercase;
        background-color: #ffffff;
        }
        .cmsg{
            display: flex;
        align-items: center;
        text-align:center;
        font-size: 15px;
        margin-left:100px;
        width: 600px;
        text-transform: capitalize;
        background-color: #ffffff;
        }
        .ctime{
            display: flex;
        align-items: center;
        max-width: 100px;
        text-align:center;
        font-size: 15px;
        margin-left:50px;
        text-transform: uppercase;
        background-color: #ffffff;
        }

        /* .exid {
        display: flex;
        align-items: center;
        text-align:center;
        font-size: 15px;
        margin-left:300px;
        text-transform: uppercase;
        background-color: #ffffff;
        } */

</style>



<body>

     <!-- Navigation bar -->
     <nav class="navbar ">
        <div class="container">
          <a class="navbar-brand "> <em>FAB</em> CARDS</a>
          <ul class="nav ">
            <li><a href="admindash.php" class="nav-link ">Home</a></li>
            <li><a href = "landing.html" class="nav-link"> Log Out </a></li>
          </ul>
        </div>
    </nav>
    <br></br>
    <h1 class="req" style="color:rgba(22,34,57,0.95);">MESSAGES</h1>
    <p></p><p></p>


    <div class="entry">
        <?php
        while($row = mysqli_fetch_array($result))
        {
        ?>

        <div class="rectangle">
            <div class="cname"><?php echo $row['c_name']?></div>
            <div class="cemail"><?php echo $row['c_email']?></div>
            <div class="cmsg"><?php echo $row['c_msg']?></div>
            <div class="ctime"><?php echo $row['c_time']?></div>
        </div>
            <?php if($row['read_status']=="0"){?>
            <button class="box-button" onclick="location.href='c_seen.php?c_id=<?php echo $row['c_id']?>'">Mark as read</button>
            <!-- <button class="box-button" data-toggle="modal" data-target="#email">Reply</button> -->
            <br><br>
            <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="post" action="email.php">

            <label for="mail" class="visually-hidden">sent to</label>
            <input type="email" class="form-control" id="mail" placeholder="Sent to" name="mail">
            <label for="paragraph">Enter a paragraph:</label><br>
            <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
</form>

            <?php }
            else{?>
            <button class="box-button" >Seen</button readonly>
            <?php }?>
            <br></br>
        </div>
        <?php
        }
        ?>
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="mailbody" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="mailbody">body</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3" action="email.php" method="POST">
                          <div class="col-auto">
                          <div class="allignment">
                            <label for="body" class="visually-hidden">Body</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Write your reply...." name="body">
                                          
                            <br>
                                                    
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Add</button>
                        
                            <button type="button" class="btn btn-secondary mb-3" data-dismiss="modal">Close</button>
                        
                          </div>
                         
                        </form>
                      </div>
                    </div>
                  </div>
                </div> -->
</body>



</html>