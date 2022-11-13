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
            <li class="home" alt="">&nbsp;&nbsp;<a href="index.php" class="about">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li class="About"alt="">&nbsp;&nbsp;<a href="about.php" class="about">About&nbsp;me</a></li>
            <li class="Login"alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login/Sign&nbsp;up</li>
        </ul>
    </nav>
    </header>

    <hr>
    <main>
        <fieldset>
            <legend><h1>Login/Sign up</h1></legend>
            <form  action="" method="POST">
            <p>
            <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your email-id :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" id="email" placeholder="abc@gmail.com"  autocomplete="on" required>   
            </p>
            <p>
            <label for="phone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone.no :-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91
            <input type="tel" name="tel" id="tel" placeholder="8882735670" autocomplete="on" required>   
            </p>
            <p>
            <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create new-password :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="password" name="password" id="password" placeholder="***********" required>    
            </p>
            <p>
            <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re-enter password :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="password" name="conpassword" id="password" placeholder="***********" required>    
            </p>
            <button type="submit" name="gpass"> Save</button>
            </form>
        </fieldset>
        <script>
            var loader =document.getElementById("preloader");
            window.addEventListener("load", function(){
                loader.style.display = "none";
            })
        </script>

    </main>
</body>
</html>
<?php
if(isset($_POST['gpass']))
{
  $email = $_POST['email'];
  $pn = $_POST['tel'];
  $pw=$_POST['password'];
  $cpw=$_POST['conpassword'];
  $query3 = "UPDATE `sign` SET password=\"$pw\" WHERE  phonenumber=\"$pn\";";
  $query6 = $sql = "UPDATE `sign` SET confirmpassword=\"$cpw\" WHERE phonenumber=\"$pn\";";  
  $data3 = mysqli_query($conn,$query3);
  $data3 = mysqli_query($conn,$query6);
  $total3 = mysqli_num_rows($data3);
  if($total3 ==1)
  {
    echo "Your new password saved successfully";
  }
  else
  {
    echo "Not such account found on database please click on sign up button to reach our web services.";
  }
}
?>