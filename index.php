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

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$gn=$_POST['gender'];
$em=$_POST['email'];
$pw=$_POST['password'];
$pn=$_POST['tel'];
$cou=$_POST['course'];
$feed=$_POST['message'];

$query2="INSERT INTO FEEDBACK VALUES('$fn','$ln','$gn','$em','$pw','$pn','$cou','$feed')";
$sql = "DELETE FROM `feedback` WHERE password=\"\";";
$data2=mysqli_query($conn,$query2);

if($feed=='')
{
    $sql = "DELETE FROM `feedback` WHERE password=\"\";";
    $data2=mysqli_query($conn,$sql);
}
if($data2)
{
    //echo "Data inserted into Database";
}
else
{
    echo "Failed to insert data  into Database";
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
    <link rel="stylesheet" href="index.css">
    <title>CODING ARENA</title>
</head>

<body>
    <div id="preloader">
    </div>
    <header>
    <nav>
        <ul>
        <li class="brand"><img src ="webicon.png" alt ="The Beat Buzz">CODING ARENA</li>
        <li class="home" alt="">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li class="About"alt="">&nbsp;&nbsp;<a href="about.php" class="about">About me</li>
        <li class="Logout"alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="logout">Logout</a></li>
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
        <li> I am founder of <a href="index.html">CODING ARENA</a></li>
        <li> I have certified as professional in PYTHON,JAVA,HTML5,CSS3,JAVASCRIPT,DRUPAL,WORDPRESS,PHP,React.js,etc from <a href="https://www.mygreatlearning.com/">Great Learning</a> and <a href="https://www.udemy.com/">Udemy</a></li>
        <li> I am actively participate in <a href="https://www.hackerrank.com/">hackerrank</a>, <a href="https://leetcode.com/">leetcode</a>, <a href="https://www.codechef.com/">codechef</a></li>
        </ul>
         
    <!--hr>
    <h1>Courses</h1>
    <div class="box1">
        <div class="container">
        
        </div>
    </div>
        
    </div-->
    <hr>
    
    <article id="contact">
        <fieldset>
        <h2 class="contact">Feedback Form</h2>

        <form>
            <p>
            <label for="firstname">First Name :-&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="firstname" id="firstname" placeholder="NITIN" autocomplete="on" required >
            </p>
            <p>
            <label for="lastname">Last Name :-&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
            <input type="text" name="lastname" id="lastname" placeholder="JHA" autocomplete="on" required >
            </p>
            <p>
            <label for="gender">Gender :-&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
            
            <input type="radio" name="gender" id="Male" value="Male">
            <label for="Male">Male</label>
            &nbsp;&nbsp;     
            <input type="radio" name="gender" id="Female" value="Female">
            <label for="Female">Female</label>    
            </p>
            <p>
            <label for="email">Your registered email-id :-&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" id="email" placeholder="abc@gmail.com" autocomplete="on" required>   
            </p>
            <p>
            <label for="password">&nbsp;Password :-&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
            <input type="password" name="password" id="password" placeholder="***********" required>    
            </p>
            <p>
            <label for="phone">&nbsp;Your registered Phone.no :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  +91
            <input type="tel" name="tel" id="tel" placeholder="8882735670" autocomplete="on" required>   
            </p>
            <p>
            <label for="course">&nbsp;Course enrolled :-&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="course" id="course" list="course-list">
            <datalist id="course-list">  
                <option value="Data analysis with python"></option>
                <option value="frontend web development"></option>
                <option value="Ms-excel(BASIC)"></option>
                <option value="Ms-excel(INTERMEDIATE)"></option>
                <option value="Ms-excel(ADVANCED)"></option>
                <option value="Data Visualization with Power BI"></option>
                <option value="Data Mining"></option>
                <option value="HTML5 full course"></option>
                <option value="My-SQL full course"></option>
                <option value="Python (BASIC)"></option>
                <option value="Python (INTERMEDIATE)"></option>
                <option value="Python (ADVANCED)"></option>
                <option value="CSS full course"></option>
                <option value="Javascript full course"></option>
                <option value="Android development(BASIC)"></option>
                <option value="Android development(INTERMEDIATE)"></option>
                <option value="Android development(ADVANCED)"></option>                
                <option value="Bootstrap Full course"></option>
                <option value="Wordpress(BASIC)"></option>
                <option value="Wordpress(INTERMEDIATE)"></option>
                <option value="Wordpress(ADVANCED)"></option>
                <option value="Web development with Python, Django"></option>
            </datalist>      
            </p>
            
            <p>
            <h2 class="feedback">Your Feedback </h2>
            <br> 
            <textarea name="message" id="message" cols="100" rows="10" placeholder="Give your valuable feedback about our course "></textarea>  
            </p>
            
            <button type="submit" formaction="" formmethod="post">SUBMIT</button>
            <button type="reset">RESET</button>
            
        </fieldset>
        </form>
        <hr>
    </article>
    </main>
<script>
    var loader =document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>    
</body>

</html>
<?php

?>