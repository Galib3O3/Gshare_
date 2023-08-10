<?php
 require ("config.php");

if(isset($_GET['email'])&&isset($_GET['v_code']))
{
  $query = "SELECT * FROM `userinfo` WHERE `email`='$_GET[email]' AND `Verify_code`='$_GET[v_code]'";
  $result = mysqli_query($conn,$query);
  if($result){
         if(mysqli_num_rows($result)==1)
         {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0)
            {
                $update ="UPDATE `userinfo` SET `is_verified`='1' WHERE `email`='$result_fetch[email]'";
                if(mysqli_query($conn,$update))
                {
                    echo "<script>alert('Verification Successfull');
                    window.location.href='landingpage.html';</script>";
                    
                }
                else{
                    echo "<script>alert(some erro occurs please try againg')</script>";
                }
            }
            else
            {
                echo "<script>alert('Email already verified')</script>";
            }
         }
  }
  else{
    echo "<script>alert('some erro occurs please try againg')</script>";
   
  }
}

?>