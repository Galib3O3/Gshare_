<?php
session_start();
if(isset( $_SESSION['l_uname'])){
  echo"";
}
else{
    echo "<script>alert('No user record found, Please Login First')</script>";
    echo "<script>location.href='LandingPage.html'</script>";
}
?>