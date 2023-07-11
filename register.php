<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> LOGIN </title>
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<style>
    body {
            background-color: ##E8E8E8;
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: lato, sans-serif;
            overflow-y: auto;
}

.head{
        margin: auto;
        padding-left:10px;
        padding-top: 30px;
        letter-spacing: 2px;
        font-weight: 700;
        font-size: 40px;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 25px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);

}

.box {
		width: 470px;
		height: 500px;
		background-color: #fff;
		border: 5px solid goldenrod;
		border-radius: 15px;
    
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-left: none;
        border-right: none;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);


	}

    .username{
        border-color:goldenrod;
        height:40px;
        width:310px;
        border-radius:20px;
        padding-left:35px;
        font-family: lato, sans-serif;
        margin-left:61px;
        margin-top:40px;
        font-size: 20px;
    }

    .password{
        border-color:goldenrod;
        height:40px;
        width:310px;
        border-radius:20px;
        padding-left:35px;
        font-family: lato, sans-serif;
        margin-left:61px;
        margin-top:20px;
        margin-bottom: 40px;
        font-size: 20px;
    }
    .login{
        margin-top: -20px;
    }

    .phonenumber{
        border-color:goldenrod;
        height:40px;
        width:310px;
        border-radius:20px;
        padding-left:35px;
        font-family: lato, sans-serif;
        margin-left:61px;
        margin-top:20px;
        font-size: 20px;
    }


    button {
        float:left;
        margin-top:20px;
        margin-left: 110px;

    }

    


    .box-button2 {
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #D2691E;
        color: white;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        margin-left:170px;
        transition: background-color 0.3s ease;
    }



    .box-button2:hover {
    background-color: #D2691E;
    opacity: 0.5;
}
</style>

<body>
    <div class="box">
        <h2 class="head">REGISTER</h2>
        <div class="login">
        <form action="register_update.php" method="post">
            <input type="text" name="username" class="username" placeholder="username" required>
            <input type="password" name="password" class="password" placeholder="password" required>
            
        </div>
        <button type="submit" class="box-button2">REGISTER</button>
        </form>
       
    </div>
    
    
</body>