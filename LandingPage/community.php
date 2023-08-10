<?php
   include 'config.php';
   include 'sessionfile.php';


   $sql="SELECT * FROM userinfo";
   $result =$conn->query($sql);
   
   
   $data="SELECT * FROM material_request";
   $rs =$conn->query($data);
            
   $conn-> close();
   ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="icon" type="image/x-icon" href="img/gshares.png">
      <script src="https://kit.fontawesome.com/c68b4388d9.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
      <link rel="stylesheet" href="index.css">
      <link rel="stylesheet" href="font.css">
      <title>G SHARE | COMMUNITY</title>
   </head>
   <body class="b-g-c">
      <div class="container">
         <div class="row">
            <div class="col">
               <nav class="navbar  navbar-expand-lg mt-2 ">
                  <div class="container-fluid ">
                     <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                        <h4>G - SHARE</h4>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0  ">
                           <li class="nav-item ">
                              <a class="nav-link hv" aria-current="page" href="Landingpage.php">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link hv " href="material.php">Files</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link hv " href="file.php">Contribute</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link hv active" href="">Community</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link hv" href="chat.php">G SHARE | CHAT</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <h1 class="d-flex mt-5 justify-content-center">G - SHARE Community</h1>
      <hr class ="w-100 mx-auto">
      <div class="container ">
      </div>
      <div class="row ms-4">
         <div class="col-md-4 col-lg-4 col-sm-4">
            <h3 class="ms-5">Member list</h3>
            <!-- <hr class=" mx-auto w-75"> -->
            <table class="table table-striped table-light mx-auto mt-3 w-75 border border-dark " id ="table-data">
               <thead class="thead-dark">
                  <tr>
                     <th>
                        <h6>ID</h6>
                     </th>
                     <th scope="col">
                        <h6>Name</h6>
                     </th>
                     <th scope="col">
                        <h6>Email</h6>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $count =1;
                     if($result->num_rows>0){
                     while($row =$result->fetch_assoc()){
                      echo "<tr>";
                      echo "<td>".$count."</td>";
                      echo "<td><strong><a href='userprofile.php? id=$row[id]' class='text-decoration-none text-black'>".$row['username']."</a></strong></td>";
                      echo "<td>".$row['email']."</td>";
                     echo "</tr>";
                     $count++;
                     }
                     }
                     else{
                      echo"<tr><td colspan='3'>No Records Found.</td></tr>";
                     }
                    
                     ?>
               </tbody>
            </table>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-4">
         <h3 class="ms-5">Material Request list</h3>
            <!-- <hr class=" mx-auto w-75"> -->
            <table class="table table-striped table-white mx-auto mt-3 w-100 border border-dark  " id ="table-data">
               <thead>
                  <tr>
                     <!-- <th>
                        <h6>ID</h6>
                     </th> -->
                     <th scope="col">
                        <h6>Course</h6>
                     </th>
                     <th scope="col">
                        <h6>Topic</h6>
                     </th>
                     <th scope="col">
                        <h6>Request from</h6>
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if($rs->num_rows>0){
                     while($row =$rs->fetch_assoc()){
                      echo "<tr>";
                     //  echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['topic']."</td>";
                      echo "<td>".$row['username']."</a></td>";

                     //  echo "<td><a class='' href='update.php? id=$row[id]' >Update</a></td>";
                     echo "</tr>";
                     }
                     }
                     else{
                      echo"<tr><td colspan='3'>No Records Found.</td></tr>";
                     }
                      
                     ?>
               </tbody>
            </table>
         </div>
         <div class="col-md-4 col-lg-4 com-sm-4">
         <h3 class="ms-5">Material Request Form</h3>
            <form class="bg-form w-75 p-2 mt-3 ms-5 rounded rounded-3" action="ReqMat.php" method="post">
               <div class="mt-3 p-2 overflow-auto ">
                  <!-- <h4 class="">Material Request</h4> -->
                  <select id="course" name="course" class="form-select bg-input">
                     <option selected>Choose...</option>
                     <option>C programming</option>
                     <option>Data structure</option>
                     <option>Algorithm and complexity</option>
                     <option>DBMS</option>
                     <option>OOP</option>
                     <option>JAVA</option>
                     <option>TOC</option>
                     <option>CN</option>
                     <option>Numerical Method</option>
                     <option>WEB technologies</option>
                     <option>Operating system</option>
                     <option>Machine Learning</option>
                     <option>AI</option>
                  </select>
               </div>
               <div class="mt-3 p-2">
                  <label for="">Topic</label>
                  <input type="text" id="topic" name="topic" class="form-control mt-2  bg-input">
               </div>
               <div class=" ms-2 mt-3">
                  <button type="submit" class="btn btn-primary">Send</button>
               </div>
            </form>
         </div>
      </div>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>