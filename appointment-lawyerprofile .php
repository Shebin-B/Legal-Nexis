<?php
include("connection.php");

session_start(); // Start the session


// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0");

// Check if user is logged in
if (!isset($_SESSION['cemail'])) {
    echo "<script>alert('You must be logged in to view this page.'); window.location.href='login.php';</script>";
    exit();
  }
  $cemail = $_SESSION['cemail'] ?? '';
  $cpassword =  $_SESSION['cpassword']?? '';

        $cname = $_SESSION['name'] ?? '';
        $ccontact = $_SESSION['contact'] ?? '';
        $email = $_SESSION['email'] ?? '';
        $ccity = $_SESSION['city'] ?? '';
        $image_name = $_SESSION['image_name'] ?? 'default.jpg';
        $image_path = 'images/client_images/' . $image_name;

if (isset($_GET['email']) && isset($_GET['password'])) {
    $lawyer_email = $_GET['email'];
    $lawyer_password = $_GET['password'];

    // Escape the email to prevent SQL injection
    $lawyer_email = mysqli_real_escape_string($con, $lawyer_email);

    // Query to get the lawyer's details
    $query = "SELECT * FROM lawyer_registration WHERE email='$lawyer_email' and password='$lawyer_password'";
    $result = mysqli_query($con, $query);      
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    $lname = $row['name'];
    $lcontact = $row['contact'];
    $email =$row['email'];
    $address =$row['address'];
    $district =$row['district'];
    $lcity = $row['city'];
    $pin = $row['pin'];
    $image_name =$row['image'];
    $image_path ='images/lawyer_images/' . $image_name;
    $bar_id =$row['bar_id'];
    $qualification =$row['qualification'];
    $university =$row['university'];
    $yearofpass =$row['yearofpass'];
    $experience =$row['experience'];
    // $practice =$row['practice'];
    $specialization =$row['specialization'];
}
                
  ?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style1.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css?v=1.0" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Legal</span>
        <span class="d-none d-lg-block">Nexis</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
        
        <!-- <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?php echo htmlspecialchars($image_path); ?>"   width="50" height="120">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ($lname); ?></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ($lname); ?></h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Lawyer-profile .html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="about.php">
                <i class="bi bi-gear"></i>
                <span>About</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <form method="POST" action="logout.php" style="margin: 0;">
    <button type="submit" class="dropdown-item d-flex align-items-center">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </button>
  </form>
</li> -->

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- <li class="nav-item">
        <a class="nav-link " href="Lawyer-profile .html">
          <i class="bi bi-grid"></i>
          <span>Lawyer Profile</span>
        </a>
      </li>End Dashboard Nav -->

      

      
      <li class="nav-heading">Pages</li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="client-profile.php">
          <i class="bi bi-house"></i>
          <span>My profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-list"></i>
          <span>Login</span>
        </a>
      </li><!-- End Register Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="about.php">
          <i class="bi bi-info-circle"></i>
          <span>About us</span>
        </a>
      </li><!-- End Register Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Register Page Nav -->

   
      <li class="nav-item">
        <a class="nav-link collapsed" href="search-form.php">
          <i class="bi bi-question-circle"></i>
          <span>Search</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!--     <li class="nav-item">
  <form method="POST" action="logout.php">
    <button type="submit" class="nav-link collapsed">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </button>
  </form>
</li>End Login Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Lawyers</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?php echo ($image_path); ?>" alt="Profile" width="190" height="200">
              <h2><?php echo ($lname); ?></h2>
              <h3><?php echo ($qualification); ?></h3>
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" name="profile">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Request an Appointment</button>
                </li>

                

                

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Profile Details</h5>



                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Full Name</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="full_name" value="<?php echo ($lname); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Bar Council ID</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="bar_id" value="<?php  echo ($bar_id); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Contact</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="contact" value="<?php echo ($lcontact); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="email" name="email" value="<?php echo ($email); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="address" value="<?php echo ($address); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">District</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="district" value="<?php echo ($district); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">City</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="city" value="<?php echo ($lcity); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Pin Code</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="pin" value="<?php echo ($pin); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Qualification</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="qualification" value="<?php echo ($qualification); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">University</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="university" value="<?php echo ($university); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Year of Pass</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="year_of_pass" value="<?php echo ($yearofpass); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Experience</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="experience" value="<?php echo ($experience); ?>" class="form-control" required>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-3 col-md-4 label">Area of Practice</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="practice" value="<?php echo ($practice); ?>" class="form-control" required>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Practiced In</div>
                        <div class="col-lg-9 col-md-8">
                            <input type="text" name="specialization" value="<?php echo ($specialization); ?>" class="form-control" required>
                        </div>
                    </div>

                    

                    
                  </div>




             
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="" enctype="multipart/form-data">

                    
                    
                    <!-- <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName">
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Case number</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="case_no" type="text" class="form-control" id="fullName" >                     
                     </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="contact" type="text" class="form-control" id="company" >
                      </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Place</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="place" type="text" class="form-control" id="company" >
                      </div>
                    </div> -->
                    

                    <!-- <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="Job" >
                      </div>
                    </div> -->

                    <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Case description</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="description" type="text area" class="form-control" id="Job" >
                      </div>
                    </div>
              
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Request for an appointment</button>
                    </div>
                  </form><!-- End Profile Edit Form -->


                  <?php
                    include("connection.php");
                
                    
                
                    

                    if (isset($_POST["submit"])) {

                    
                      $case_no = $_POST["case_no"]; 
                      $description = $_POST["description"];
                      $lstatus = "PENDING";
                      $payment_sts ="Not yet";
                      $feetopay ="0";
                      $case_sts="Not proceeded";
                      $totalamount ="0";
                     


                      $query = "INSERT INTO appointment_requests (clientname, lawyername, case_number, clientcontact, lawyercontact, clientplace, lawyerplace, case_description, lawyerstatus, paymentstatus, feetopay, totalamount, lemail, lpassword, cemail, cpassword, case_status)
                      VALUES ('$cname', '$lname', '$case_no', '$ccontact', '$lcontact', '$ccity','$lcity','$description','$lstatus','$payment_sts','$feetopay','$totalamount', '$lawyer_email','$lawyer_password','$cemail','$cpassword','$case_sts')";
                      
                     $result = mysqli_query($con,$query);

                      if ($result) 
                      {
                        
                        echo "<script>alert('Request has been sent!');</script>";
                  
                    } else {
                        echo "<script>alert('Request not sent!');</script>";
                    }


                    }



                  ?>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy;  <strong><span>LegalNexis</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     <a href="https://bootstrapmade.com/"></a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>