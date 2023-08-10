<?php
   include '../config.php';
   include 'adminsession.php';

   
   $sql="SELECT * FROM files";
   $result =$conn->query($sql);
   		
   	
   	 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Retrieve form data
       $id = $_POST["id"];
       $name = $_POST["username"];
       $email = $_POST["email"];
       $mobile = $_POST["mobile"];
      
   	$sql = "UPDATE userinfo SET username='$name', email='$email', mobile='$mobile' WHERE id=$id";
   
       if ($conn->query($sql) === TRUE) {
   		echo "<script>alert('Updated,Please login Againg')</script>";
   		echo "<script>location.href='logout.php'</script>";
       } else {
           echo "Error updating data: " . $conn->error;
       }
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/c68b4388d9.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="../profilepage.css">
      <title>G SHARE | ADMIN</title>
      <style>
      .table-container {
         height: 300px;
         /* width: 800px; */
         overflow-y: scroll;
      }
      .p-l{
        padding-left:35%;
        font-size:35px
      }
   </style>
   </head>
   <body class="b-g">
      <section class="pt-4">
         <div class="container-fluid col-12 col-md-8 col-lg-10">
            <h4 class="mt-5 p-l text-white">Admin Dashboard</h4>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex mt-3">
               <div class=" border-right">
                  <div class="nav flex-column nav-pills mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                     <i class="fa fa-bars text-center  mr-1"></i> 
                     Dashboard
                     </a>
                  </div>
               </div>
               <div class="tab-content p-4 p-md-5" id="tabContent">
                  <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                     <h3 class="mb-4">Files</h3>
                  </div>
                  <div class="table-container">
                  <table class="table table-striped table-white  border border-dark col-md-8 col-lg-8  " id ="table-data">
                     <thead>
                        <tr>
                        <th scope="col">
                              <h6>ID</h6>
                           </th>
                           <th scope="col">
                              <h6>Title</h6>
                           </th>
                           <th scope="col">
                              <h6>File</h6>
                           </th>
                           <th scope="col">
                              <h6>Couse Name</h6>
                           </th>
                           <th scope="col">
                              <h6>View</h6>
                           </th>
                           <th scope ="col">
                              <h6>Delete</h6>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if($result->num_rows>0){
                           while($row =$result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['Filename']."</td>";
                            echo "<td>".$row['file']."</td>";
                            echo "<td>".$row['CourseName']."</td>";
                            echo '<td><a href="../materials/'.$row['file'].'" class ="btn  btns btn-primary hover-btn" >View</a></td>';
                            echo "<td><a class='btn btn-danger' href='deleteAction.php? id=$row[id]'><i class='fa fa-trash' aria-hidden='true'></i></a></td>"; 
                           }
                           }
                           else{
                            echo"<tr><td colspan='3'>No Records Found.</td></tr>";
                           }
                            
                           ?> 
                     </tbody>
                  </table>
                  <a class="btn btn-danger" href="adminlogout.php">logout</a>
                  </div>
               </div>
            </div>
         </div>
        
      </section>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>