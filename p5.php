<!DOCTYPE html>
<html lang="en">
<?php include "signup.inc.php"?>
<head>
    <meta charset="UTF-8">
    <style>
        #a {
            font-size: medium;
            color: black;
        }
        
        #b {
            font-size: medium;
            color: black;
        }
        
        #d {
            font-size: medium;
        }
        
        .container {
            text-align: bottom;
            margin-top: 10px;
            margin-right: 400px;
            margin-left: 12cm;
            height: 10cm;
        }
        
        .button1 {
            background-color: #4CAF50;
            border-radius: 100px;
            color: white;
            box-shadow: none;
            padding: 10px 35px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        .button2 {
            background-color: #4CAF50;
            border-radius: 100px;
            color: white;
            box-shadow: none;
            padding: 10px 35px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        body {
            background-image: url("Signup.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            text-align: center;
            margin-top: 20%;
        }
    </style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <p class="error"><?php echo $error; ?></p> <p class="success"><?php echo $success; ?></p>

        <div id="a">
            <h1>Please enter your email and password</h1>
            <hr max-width="300">
        </div>
        <div id="b">
            <form action="">
                <h2><i>Email address</i></h2>
                <input class="username" type="text" size=30px fontsize=25px placeholder="Email">
                <h2><i>Password</i></h2>
                <input type="password" size=30px fontsize=25px placeholder="Password">
            </form>
        </div>
        <div>
            <h2><input id="c" ; type="checkbox" ;> Remember me <br></h2>
        </div>
        <div>
            <button type="submit" class="button1">Login</button><br>
        </div>
        <div>
            <h2>
                <type="submit"><i><a>Forgot Password ?</a></i></h2>
        </div>
        <div>
            <h2><button class="button2">Sign Up</button></h2>
        </div>

    </div>


</body>

</html>