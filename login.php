<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nitin Jha">
    <link rel="icon" href="webicon.png" type="image/x-icon">
    <link rel="stylesheet" href="login1.css">
    <title>CODING ARENA</title>
</head>

<body>
    <div id="preloader">
    </div>
    <header>
    <nav>
        <ul>
            <li class="brand"><img src ="webicon.png" alt ="The Beat Buzz">CODING&nbsp;ARENA</li>
            <li class="home" alt="">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li class="About"alt="">&nbsp;&nbsp;<a href="about.php" class="about">About&nbsp;me</a></li>
            <li class="Login"alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login/Sign&nbsp;up</li>
        </ul>
    </nav>
    </header>

    <hr>
    <main>
        <fieldset>
            <legend><h1>Login/Sign up</h1></legend>
            <form action="" method="POST">
            
                <p>
                <label for="firstname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="firstname" id="firstname" placeholder="NITIN" autocomplete="on" required >
                </p>
                <p>
                <label for="lastname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="lastname" id="lastname" placeholder="JHA" autocomplete="on" required >
                </p>
                <p>
                <label for="gender">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                
                <input type="radio" name="gender" id="Male" value="Male">
                <label for="Male">Male</label>
                &nbsp;&nbsp;    
                <input type="radio" name="gender" id="Female" value="Female">
                <label for="Female">Female</label>    
                </p>
                <p>
                <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email-id :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com"  autocomplete="on" required>   
                </p>
                <p>
                <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="password" id="password"  placeholder="***********" required>    
                </p>
                <p>
                <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re-enter password :-</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="conpassword" id="password" placeholder="***********" required>    
                </p>
                <p>
                <label for="phone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone.no :-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91
                <input type="tel" name="tel" id="tel" placeholder="8882735670" autocomplete="on" required>   
                </p>
                <button type="submit" name="sign" onclick="message1()">SIGN UP</button>
                <p>Already Signed in ?  Click here to Login :-<button type="submit" formaction="" formmethod="post" ><a href="sign.php">LOGIN</a></button></p>
            </form>
        </fieldset>
        <script>
            var loader =document.getElementById("preloader");
            window.addEventListener("load", function(){
                loader.style.display = "none";
            })
        </script>
        <script>
            function message1()
            {
                alert("Welcome to family of CODING ARENA please click on Login to activate your account in website")
            }
        </script>

    </main>
</body>
</html>
<?php

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$gn=$_POST['gender'];
$em=$_POST['email'];
$pw=$_POST['password'];
$cpw=$_POST['conpassword'];
$pn=$_POST['tel'];
$query="INSERT INTO SIGN VALUES('$fn','$ln','$gn','$em','$pw','$cpw','$pn')";
$query1="DELETE FROM `sign` WHERE firstname=\"\";";
$data=mysqli_query($conn,$query,$query1);
       
if($data)
{
    //echo "Data inserted into Database";
}
else
{
    echo "Failed to insert data  into Database";
}

?>