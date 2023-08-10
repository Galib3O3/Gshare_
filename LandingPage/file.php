<?php
include 'config.php';
include 'sessionfile.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c68b4388d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="file.css">
    <link rel="icon" type="image/x-icon" href="img/gshares.png">
    <title>G-SHARE File</title>
</head> 
<body>

    <div class="container"></div>
    <div class="container-fluid bg-youtube text-light py-3">
        <herader class="text-center">
            <h1 class="display-6">G-SHARE FILE SHARE</h1>
        </herader>
    </div>
   <!-- card -->
   <div class="container px-5">
    <div class="row mt-5">
      <div class="col-sm-6 col-lg-6">
        <div class="card card-border">
          <div class="card-body">
            <h5 class="card-title ms-5 ">Share Your Files here</h5>
            <p class="card-text ms-5">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6">
        <div class="card card-border">
          <div class="card-body">
            <img class="img-fluid img-size" src="img/fileupload.jpg" alt="img" >
          </div>
        </div>
      </div>
    </div>
   </div>
   
  <!-- card end -->
          <section class="container col-lg-6  bg-clr w-70 text-light p-2 rounded-3">
            <form class="row g-3 mx-3" action="uploadfile.php" method="post" enctype="multipart/form-data">
          <!-- course name -->
            <div class="col-md-6">
              <label class="form-label">Course name</label>
              <input type="text" name="CourseName" class="form-control" id="CourseName" required>
            </div>
            <!-- course Teacher -->
            <div class="col-md-6 ">
              <label  class="form-label">Course Teacher</label>
              <select id="CourseTeacher" name="CourseTeacher" class="form-select">
                <option selected>Choose...</option>
                <option>SKB</option>
                <option>JIM</option>
                <option>SRK</option>
                <option>STA</option>
                <option>AHQ</option>
                <option>RMS</option>
                <option>RLP</option>
                <option>PRB</option>
              </select>
            </div>
          <!-- File name -->
            <div class="col-md-6 ">
              <label for="inputAddress" class="form-label">File Title</label>
              <input type="text" name="title" class="form-control" id="FileTitle" required>
            </div>

           <!-- File -->
            <div class="col-md-6  ">
              <label for="inputCity"  class="form-label">File</label>
              <input type="file" name="File" class="form-control" id="File" required>
            </div>
            
            <!-- upload btn -->
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary mt-4">Upload</button>
            </div>
          </form>
      </section>


      <div class="margin-bottom"></div>

      <footer class="text-center text-lg-start bg-secondary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
            <a href="#" class="me-4 text-reset">
              <i class="fab fa-facebook"></i>
            </a>
           
            <a href="#" class="me-4 text-reset">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="me-4 text-reset">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 id="GS" class="text-uppercase text-black fw-bold mb-4">
                  G SHARE
                </h6>
                <p class="text-black">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem corrupti dicta saepe earum cumque ea adipisci repellat similique dolore quos?
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-3 mb-4">
                <!-- Links -->
                <h6 id="contact" class="text-uppercase text-black fw-bold mb-4">Contact</h6>
                <hr>
                <p><i class="fas fa-map-marked me-3"></i>Sylhet,Bangladesh</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  gshare@gshare.com
                </p>
                <p><i class="fas fa-phone me-3"></i> +880178901233</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center py-4 copyright text-white" >
          © 2023 Copyright:
          <a class="text-reset fw-bold text-decoration-none" href="Landingpage.php">G SHARE</a>
        </div>
        <!-- Copyright -->
      </footer>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>