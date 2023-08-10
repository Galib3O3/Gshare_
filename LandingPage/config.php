<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "g-share";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection faild!".mysqli_connect_err());
}
else{
    echo "<script>alart('muhaha')</script>";
}

?>