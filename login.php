<!DOCTYPE html>
<html lang="en">

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


        <div id="a">
            <h1>Please enter your email and password</h1>
            <hr max-width="300">
        </div>
        <div id="b">
                <?php
                    $email= "";
                    $password = "";
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $email = test_input($_POST(username));
                        $password = test_input($_POST(password));
                    }

                   function test_input($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
            ?>

            <form method ="post" action = "<?php echo htmlspecialchars(["PHP_SERVER"]); ?>" >
                <h2><i>Email address</i></h2>
                <input class="username" type="text" size=30px fontsize=25px placeholder="Email" name="username">
                <h2><i>Password</i></h2>
                <input type="password" size=30px fontsize=25px placeholder="Password" name="password">
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
            <h2><button type="submit" class="button2" onclick="document.location='Sign up1.html'">Sign Up</button></h2>
        </div>

    </div>
    <?php
    echo "<h2>Your Input: </h2>";
    echo $username;
    echo "<br>";
?>
<?php 
    $emailErr ="";
    $passwordErr ="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST("username"))){
            $emailErr ="Enter valid username";  
        }else{
            $email_error = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
        }
    }

    if(!empty($_POST["password"]) && ($_POST["password"])) {
        $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }
?>

</body>

</html>



