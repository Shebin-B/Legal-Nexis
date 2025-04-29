<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

                // Check if the user is logged in
                if (!isset($_SESSION['email'])) {
                  header("Location: login.php");
                  exit();
              }
              
              // Prevent caching
              header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
              header("Pragma: no-cache"); // HTTP 1.0.
              header("Expires: 0");

                        // Fetch session variables
                        $name = $_SESSION['name'] ?? '';
                        $contact = $_SESSION['contact'] ?? '';
                        $email = $_SESSION['email'] ?? '';
                        $address = $_SESSION['address'] ?? '';
                        $district = $_SESSION['district'] ?? '';
                        $city = $_SESSION['city'] ?? '';
                        $pin = $_SESSION['pin'] ?? '';
                        $image_name = $_SESSION['image_name'] ?? 'default.jpg';
                        $image_path = 'images/lawyer_images/' . $image_name;
                        $bar_id = $_SESSION['bar_id'] ?? '';
                        $qualification = $_SESSION['qualification'] ?? '';
                        $university = $_SESSION['university'] ?? '';
                        $yearofpass = $_SESSION['yearofpass'] ?? '';
                        $experience = $_SESSION['experience'] ?? '';
                        $practice = $_SESSION['practice'] ?? '';
                        $specialization = $_SESSION['specialization'] ?? '';
                        $password =  $_SESSION['password']?? '';

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

        
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?php echo htmlspecialchars($image_path); ?>"   width="50" height="120">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ($name); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ($name); ?></h6>
              <!-- <span>LegalNexis</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Lawyer-profile .php">
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
</li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="Lawyer-profile .php">
          <i class="bi bi-grid"></i>
          <span>Lawyer Profile</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      
      <li class="nav-heading">Pages</li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>My appointments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="appointments-table.php">
              <i class="bi bi-circle"></i><span>Accepted Appointments</span>
            </a>
          </li>
          <li>
            <a href="pending-request.php">
              <i class="bi bi-circle"></i><span>Pending Requests</span>
            </a>
          </li>
          <li>
            <a href="declained-request.php">
              <i class="bi bi-circle"></i><span>Declained Requests</span>
            </a>
          </li>
        </ul>
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
        <a class="nav-link collapsed" href="monthlyr.php">
          <i class="bi bi-envelope"></i>
          <span>Monthly Report</span>
        </a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link collapsed" href="search-form.php">
          <i class="bi bi-question-circle"></i>
          <span>Search</span>
        </a>
      </li><!-- End Register Page Nav -->

          <li class="nav-item">
  <form method="POST" action="logout.php">
    <button type="submit" class="nav-link collapsed">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </button>
  </form>
</li><!-- End Login Page Nav -->



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

            <img src="<?php echo ($image_path); ?>" alt="Profile" width="200" height="190">
              <h2><?php echo ($name); ?></h2>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
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
                            <input type="text" name="full_name" value="<?php echo ($name); ?>" class="form-control" required>
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
                            <input type="text" name="contact" value="<?php echo ($contact); ?>" class="form-control" required>
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
                            <input type="text" name="city" value="<?php echo ($city); ?>" class="form-control" required>
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

<div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
        <div class="pt-2">
            <input type="file" name="image" class="btn btn-primary btn-sm" title="Upload new profile image">
        </div>
    </div>
</div>

<div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
    <div class="col-md-8 col-lg-9">
        <input name="uname" type="text" class="form-control" id="fullName" value="<?php echo ($name); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid name (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="bar_id" class="col-md-4 col-lg-3 col-form-label">Bar Council ID</label>
    <div class="col-md-8 col-lg-9">
        <input name="ubar_id" type="text" class="form-control" id="bar_id" value="<?php echo ($bar_id); ?>">
    </div>
</div>

<div class="row mb-3">
    <label for="contact" class="col-md-4 col-lg-3 col-form-label">Contact</label>
    <div class="col-md-8 col-lg-9">
        <input name="ucontact" type="text" class="form-control" id="contact" value="<?php echo ($contact); ?>" pattern="^\d{10}$" title="Please enter a valid 10-digit contact number" >
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
    <div class="col-md-8 col-lg-9">
        <input name="uemail" type="email" class="form-control" id="email" value="<?php echo ($email); ?>" >
    </div>
</div>

<div class="row mb-3">
    <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
    <div class="col-md-8 col-lg-9">
        <input name="uaddress" type="text" class="form-control" id="address" value="<?php echo ($address); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid address (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="district" class="col-md-4 col-lg-3 col-form-label">District</label>
    <div class="col-md-8 col-lg-9">
        <input name="udistrict" type="text" class="form-control" id="district" value="<?php echo ($district); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid district (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
    <div class="col-md-8 col-lg-9">
        <input name="ucity" type="text" class="form-control" id="city" value="<?php echo ($city); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid city (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="pin" class="col-md-4 col-lg-3 col-form-label">Pin Code</label>
    <div class="col-md-8 col-lg-9">
        <input name="upin" type="text" class="form-control" id="pin" value="<?php echo ($pin); ?>" pattern="^\d{6}$" title="Please enter a valid 6-digit pin code" >
    </div>
</div>

<div class="row mb-3">
    <label for="qualification" class="col-md-4 col-lg-3 col-form-label">Qualification</label>
    <div class="col-md-8 col-lg-9">
        <input name="uqualification" type="text" class="form-control" id="qualification" value="<?php echo ($qualification); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid qualification (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="university" class="col-md-4 col-lg-3 col-form-label">University</label>
    <div class="col-md-8 col-lg-9">
        <input name="uuniversity" type="text" class="form-control" id="university" value="<?php echo ($university); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid university name (letters only)" >
    </div>
</div>

<div class="row mb-3">
    <label for="yearOfPass" class="col-md-4 col-lg-3 col-form-label">Year of Pass</label>
    <div class="col-md-8 col-lg-9">
        <input name="uyearofpass" type="text" class="form-control" id="yearOfPass" value="<?php echo ($yearofpass); ?>" pattern="^\d{4}$" title="Please enter a valid 4-digit year" >
    </div>
</div>

<div class="row mb-3">
    <label for="experience" class="col-md-4 col-lg-3 col-form-label">Experience</label>
    <div class="col-md-8 col-lg-9">
        <input name="uexperience" type="number" class="form-control" id="experience" value="<?php echo ($experience); ?>" min="0" max="25" title="Please enter a number between 0 and 25" >
    </div>
</div>

<div class="row mb-3">
    <label for="specialization" class="col-md-4 col-lg-3 col-form-label">Practiced In</label>
    <div class="col-md-8 col-lg-9">
        <input name="uspecialization" type="text" class="form-control" id="specialization" value="<?php echo ($specialization); ?>" pattern="^[A-Za-z\s]+$" title="Please enter a valid specialization name (letters only)">
    </div>
</div>

<div class="text-center">
    <button type="submit" name="usubmit" class="btn btn-primary">Save Changes</button>
</div>
</form>

                  <?php
                    include("connection.php");

                    if (!isset($_SESSION['email'])) {
                      header("Location: login.php");
                      exit();
                    }
                    
                  
                    
                    // Initialize the success flag

                    if (isset($_POST["usubmit"])) {
                        $uname = $_POST["uname"];
                        $ubar_id = $_POST["ubar_id"];
                        $ucontact = $_POST["ucontact"];
                        $uemail = $_POST["uemail"];
                        $uaddress = $_POST["uaddress"];
                        $udistrict = $_POST["udistrict"];
                        $ucity = $_POST["ucity"];
                        $upin = $_POST["upin"];
                        $uqualification = $_POST["uqualification"];
                        $uuniversity = $_POST["uuniversity"];
                        $uyearofpass = $_POST["uyearofpass"];
                        $uexperience = $_POST["uexperience"];
                        // $upractice = $_POST["upractice"];
                        $uspecialization = $_POST["uspecialization"];


                        // Fetch the existing image name from the database using email and password
                        $query = "SELECT image FROM lawyer_registration WHERE email='$email' AND password='$password'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        // Get the existing image name
                        $existing_image = $row['image'];

                        // Set default image name to the existing image
                        $image_name = $existing_image;

                        // Check if a file was uploaded
                        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                            $image_name = $_FILES["image"]["name"];
                            $image_tmp_name = $_FILES["image"]["tmp_name"];

                            // Move the uploaded file to the desired location
                            if (!move_uploaded_file($image_tmp_name, "images/lawyer_images/" . $image_name)) {
                                echo "<script>alert('Failed to move uploaded file.');</script>";
                            }
                        }

                        // Prepare the update query (as per your original request)
                        $query = "UPDATE lawyer_registration 
                                  SET name='$uname', bar_id='$ubar_id', contact='$ucontact', email='$uemail', 
                                      address='$uaddress',district='$udistrict',city='$ucity',pin='$upin',image='$image_name',qualification='$uqualification',
                                      university='$uuniversity',yearofpass='$uyearofpass',experience='$uexperience', specialization='$uspecialization' 
                                  WHERE email='$email' AND password='$password'";

                      
                        $result = mysqli_query($con, $query);
                        if (!$result) {
                            echo "Error: " . mysqli_error($con);
                        }
                        if ($result) {
                            // Update session variables
                            $_SESSION['name'] = $uname;
                            $_SESSION['contact'] = $ucontact;
                            $_SESSION['bar_id'] = $ubar_id;
                            $_SESSION['email'] = $uemail;
                            $_SESSION['address'] = $uaddress;
                            $_SESSION['district'] = $udistrict;
                            $_SESSION['city'] = $ucity;
                            $_SESSION['pin'] = $upin;
                            $_SESSION['image_name'] = $image_name;
                            $_SESSION['qualification'] = $uqualification;
                            $_SESSION['university'] = $uuniversity;
                            $_SESSION['yearofpass'] = $uyearofpass;
                            $_SESSION['experience'] = $uexperience;
                            // $_SESSION['practice'] = $upractice;
                            $_SESSION['specialization'] = $uspecialization;
                      

                            echo "<script>alert('Updation successful. Reload the page!');</script>";
                        } else {
                            echo "<script>alert('Update failed. Please try again.');</script>";
                        }
                    }
                  ?>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST" action="" enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="curpassword" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="change" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                  <?php

include("connection.php");

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}




  if (isset($_POST["change"])) {
      $curpassword = $_POST["curpassword"];
      $newpassword = $_POST["newpassword"]; 
        
      $query1="update lawyer_registration set password='$newpassword' where email='$email' and password='$curpassword'";

    $result1=mysqli_query($con,$query1);
    $query2="update login_details set password='$newpassword' where username='$email' and password='$curpassword'";
    $result2=mysqli_query($con,$query2);

    if ($result1) {
    
      $_SESSION['password'] = $newpassword;

      echo "<script>alert('Password updated successfully. Reload the page!');</script>";
  } else {
      echo "<script>alert('Update failed. Please try again.');</script>";
  }
}
?>



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