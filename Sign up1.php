<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Signup1.css" rel="stylesheet" >
</head>
<body>
	
	<div id="titile">
		<h4>SIGN UP HERE</h4>
		
	</div>
	<div id="form-container">
		<?php
                    $email= "";
                    $password = "";
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $firstname = test_input($_POST(firstname));
                        $lastname = test_input($_POST(lastname));
                        $email = test_input($_POST(email));
                        $password = test_input($_POST(password));
                        $cpassword = test_input($_POST(cpassword));
                    }

                   function test_input($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
            ?>
		<form method="post" action="<?php echo htmlspecialchars(["PHP_SERVER"]); ?>">
			<table>
				<tr>
					<td>
						<div>
							<label style="color: black;">First Name:</label>
							<input type="text" id="firstname" name="firstname" placeholder="First Name" />
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<label style="color: black;">Last Name:</label>
							<input type="text" id="lastname" name="lastname" placeholder="Last Name" />
						</div>
					</td>
				</tr>	
				<tr>
					<td>
						<div>
							<label style="color: black;">Email Id:</label>
							<input type="text" id="email" name="email" placeholder="Email example@gmail.com" />
							<span id="erro"></span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<label style="color: black;">Password</label>
							<input type="password" id="password" name="password" placeholder="Password" />
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<label style="color: black;">Confirm Password</label>
							<input type="password" id="confirmpassword" name="cpassword" placeholder="Confirm password" />
						</div>
						<div id="password-message">
							<h4>Please password must contain the following</h4>
							<p id="uppercase" class="invalid"><b>A lowercase letter</b></p>
							<p id="lowercase" class="invalid"><b>A uppercase letter</b></p>
							<p id="digit" class="invalid"><b>A number</b></p>
							<p id="lengths" class="invalid"><b>Length must be between 8 to 20</b></p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="show-password"><input type="checkbox" name="checkbox" onclick="show()" /><label>Show password</label></div>
					</td>
				</tr>
				<tr>
					<td>
						<p id="signup">Do you agree to our <a href="#"> <strong>Terms and Conditions</strong></a></p>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<p><input type="checkbox" name="checkbox"><strong>Yes,I Agree</strong><label class="checkbox"></label></p>
							
								<button >Sign in</button>
							<input type="submit" name="submit" id="submit" value="Signup"/>
						</div>
					</td>
				</tr>
		</table>
		</form>
	</div>
		
	</div>
    <?php
    $firstnameErr = "";
    $lastnameErr = "";
    $emailErr = "";
    $passwordErr ="";
    $cpasswordErr = "";

    if (empty($_POST["username"])) {
        $firstnameErr = "You Forgot to Enter Your firstname!";
    } else {
        $firstname = test_input($_POST["firstname"]);
        }

    if (empty($_POST["username"])) {
        $lastnameErr = "You Forgot to Enter Your lastname!";
    } else {
        $lastname = test_input($_POST["lastname"]);
        }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST("email"))){
            $emailErr ="Enter valid email";  
        }else{
            $email_error = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
        }
    }

    if(!empty($_POST["password"]) && ($_POST["password"]) == ($_POST("cpassword"))) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST("cpassword"));
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