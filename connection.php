<?php
$hostname ="127.0.0.1:3307";
$username ="root";
$password ="";
$database="coding_arena";
$conn = mysqli_connect($hostname,$username,$password,$database);

if ($conn)
{
    //echo "Connection Ok";
}
else
{
    echo "Connection Failed";
}
?>