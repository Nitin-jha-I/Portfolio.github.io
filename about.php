<?php
include("connection.php");
error_reporting(0);
session_start();
$user = $_SESSION['email'];
if($user == true)
{

}
else
{
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nitin Jha">
    <link rel="icon" href="webicon.png" type="image/x-icon">
    <link rel="stylesheet" href="about.css">
    <title>CODING ARENA</title>
</head>

<body>
    <div id="preloader">
    </div>
    <header>
    <nav>
        <ul>
            <li class="brand"><img src ="webicon.png" alt ="The Beat Buzz">CODING ARENA</li>
            <li class="home" alt="">&nbsp;&nbsp;<a href="index.php" class="Home">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li class="About"alt="">&nbsp;&nbsp;About me</li>
            <li class="Logout"alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="logout" href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>
    
    
    
    <main>
    <hr>
    <h1>Hey There!</h1>
    <h1>Welcome To The Arena Of Coding</h1>
    <h2>About me</h2>
    <img class="self" src="nitin.jpeg"></img>
    <p>NITIN JHA</p>
        <ul>
        <li> I am founder of <a href="https://codingarena.42web.io/">CODING ARENA</a></li>
        <li> I have certified as professional in PYTHON,JAVA,HTML5,CSS3,JAVASCRIPT,DRUPAL,WORDPRESS,PHP,React.js,etc from <a href="https://www.mygreatlearning.com/">Great Learning</a> and <a href="https://www.udemy.com/">Udemy</a></li>
        <li> I am actively participate in <a href="https://www.hackerrank.com/" >hackerrank</a>, <a href="https://leetcode.com/">leetcode</a>, <a href="https://www.codechef.com/">codechef</a></li>
        </ul>
         
    <hr>
    <h1>My achievements</h1>
    <fieldset>
    <img class="certificate3"src="certificate1.png"></img>
    <img class="certificate3"src="certificate2.png"></img>
    <img class="certificate3"src="certificate4.png"></img>
    <img class="certificate3"src="certificate3.png"></img>
    <img class="certificate3"src="certificate5.png"></img>
    <img class="certificate3"src="certificate8.png"></img>
    <img class="certificate3"src="certificate6.png"></img>
    <img class="certificate3"src="certificate7.png"></img>
    </fieldset>
    <hr>
    </main>
    <script>
        var loader =document.getElementById("preloader");
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>    
</body>

</html>