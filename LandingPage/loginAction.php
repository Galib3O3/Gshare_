<?php
include 'config.php';
session_start();

$l_uname = $_POST['l_uname'];
$l_pass = $_POST['l_pass'];

// Sanitize and escape user input
$l_uname = mysqli_real_escape_string($conn, $l_uname);
$l_pass = mysqli_real_escape_string($conn, $l_pass);

// Prepare a parameterized query to prevent SQL injection
$query = "SELECT * FROM `userinfo` WHERE username = ? AND pass = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $l_uname, $l_pass);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result)) {
  $result_fetch = mysqli_fetch_assoc($result);
  if ($result_fetch['is_verified'] == 1) {
    $_SESSION['l_uname'] = $l_uname;
    echo "<script>location.href='Landingpage.php'</script>";
  } else {
    echo "<script>alert('Email is not verified')</script>";
    echo "<script>location.href='LandingPage.html'</script>";
  }
} else {
  echo "<script>alert('Username and password not matching')</script>";
  echo "<script>location.href='LandingPage.html'</script>";
}
?>
