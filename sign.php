<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nitin Jha">
    <link rel="icon" href="webicon.png" type="image/x-icon">
    <link rel="stylesheet" href="sign.css">
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
            <form action="#" method="POST">
                <p>
                <label for="email">Email-id :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com" autocomplete="on" required>   
                </p>
                <p>
                <label for="password">Password :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="password" id="password" placeholder="***********" required>    
                </p>
                <button type="submit" name="login">LOGIN</button>
                <p>
                <a href ="forgot.php" class="fp" name="fp">forgot password ?</a>
                </p>
                <p>Are you a new user ?  Click here for sign-up :-<button type="submit" formaction="" formmethod="post"><a href="login.php">SIGN UP</a></button></p>
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
  include("connection.php");
  error_reporting(0);
  if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query1 = "SELECT * FROM SIGN WHERE email='$email' && password ='$pwd' ";
    $data1 = mysqli_query($conn,$query1);

    $total = mysqli_num_rows($data1);
    //echo $total;
    if($total ==1)
    {
       //echo "Login sucessfully";
       $_SESSION['email'] = $email;
       header('location:index.php');
    }
    else
    {
        echo "Login failed";
    }
  } 

?>               