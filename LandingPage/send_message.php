<?php
include 'config.php';

session_start();
if(isset( $_SESSION['l_uname'])){
  echo"";
}
else{
    echo "<script>alert('No user record found, Please Login First')</script>";
    echo "<script>location.href='LandingPage.html'</script>";
}

$message = $_POST["message"];
$username =$_SESSION["l_uname"];


// Insert the message into the database
$sql = "INSERT INTO `chat_messages`(`message`, `username`) VALUES ('$message','$username')";
$conn->query($sql);
$conn->close();


header("Location: chat.php");
exit();
?>
