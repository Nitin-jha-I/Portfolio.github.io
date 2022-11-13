<?php
$servername ="127.0.0.1:3307";
$username ="root";
$password ="";
$dbname ="coding_arena";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection OK";
}
else
{
   echo "Connection Failed";
}
?>