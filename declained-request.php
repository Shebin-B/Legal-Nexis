<?php
include("connection.php");
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}

// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0");
if (isset($_POST["interested"])) 
            {
                $sts = "INTERESTED";
                $cemail = $_POST['cemail'] ?? '';
                $cpassword = $_POST['cpassword'] ?? '';
                $appointment_id = $_POST['appointment_id'] ?? '';
            
                $query = "UPDATE appointment_requests SET lawyerstatus='$sts' WHERE cemail='$cemail' AND cpassword='$cpassword' and appointment_id='$appointment_id'";
                $result = mysqli_query($con, $query);

                  if($result)
                  {
                      echo "<script>alert('Your respose have been saved!');</script>";
                      header("Location:declained-request.php");
                      exit();
                  } 

                  else 
                  {
                      echo "<script>alert('Response failed. Please try again.');</script>";
                  }
            }


            if (isset($_POST["delete"])) 
            {
                $sts1 = "DECLAINED";
                $cemail = $_POST['cemail'] ?? '';
                $cpassword = $_POST['cpassword'] ?? '';
                $appointment_id = $_POST['appointment_id'] ?? '';
            
                $query = "UPDATE appointment_requests SET lawyerstatus='$sts1' WHERE cemail='$cemail' AND cpassword='$cpassword' and appointment_id='$appointment_id'";
                $result = mysqli_query($con, $query);

                  if($result)
                  {
                      echo "<script>alert('Your respose have been saved!');</script>";
                      header("Location:declained-request.php");
                      exit();
                  } 

                  else 
                  {
                      echo "<script>alert('Response failed. Please try again.');</script>";
                  }
            }


            // if (isset($_POST["proceedpay"])) 
            
            // {
            //     $sts2="Proceeded payment";
            //     $cemail = $_POST['cemail'] ?? '';
            //     $cpassword = $_POST['cpassword'] ?? '';
            //     $amount = $_POST['amount'] ?? '';
            //     $appointment_id = $_POST['appointment_id'] ?? '';
            
            //     $query = "UPDATE appointment_requests 
            //     SET paymentstatus='$sts2', 
            //         feetopay='$amount', 
            //         totalamount = totalamount + '$amount' 
            //     WHERE cemail='$cemail' AND cpassword='$cpassword' and appointment_id='$appointment_id'";               
            //      $result = mysqli_query($con, $query);

            //       if($result)
            //       {
            //           echo "<script>alert('Your respose have been saved!');</script>";
            //           header("Location:appointments-table.php");
            //           exit();
            //       } 

            //       else 
            //       {
            //           echo "<script>alert('Response failed. Please try again.');</script>";
            //       }

            // }

            // if (isset($_POST["casests"])) 
            
            // {
                
            //     $cemail = $_POST['cemail'] ?? '';
            //     $cpassword = $_POST['cpassword'] ?? '';
            //     $casests = $_POST['casestatus'] ?? '';
            //     $appointment_id = $_POST['appointment_id'] ?? '';
            
            //     $query = "UPDATE appointment_requests SET case_status='$casests' WHERE cemail='$cemail' AND cpassword='$cpassword' and appointment_id='$appointment_id'";
            //     $result = mysqli_query($con, $query);

            //       if($result)
            //       {
            //           echo "<script>alert('Your respose have been saved!');</script>";
            //           header("Location:appointments-table.php");
            //           exit();
            //       } 

            //       else 
            //       {
            //           echo "<script>alert('Response failed. Please try again.');</script>";
            //       }

            // }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointments</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css?v=1.0" rel="stylesheet">
  <link rel="stylesheet" href="admincss.css?v=1.0">

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
<!-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a>End Notification Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>End Messages Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul>End Messages Dropdown Items 

        </li>End Messages Nav -->

        <!-- <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="images\home-images\default.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
          </a> End Profile Iamge Icon 

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>admin</h6>
              <span>LegalNexis</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-dashboard.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="about.php">
                <i class="bi bi-question-circle"></i>
                <span>About</span>
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

          </ul><!-- End Profile Dropdown Items 
        </li>End Profile Nav -->

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
      <h1>Lawyer profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Appointments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   <!-- table -->
   <section id="clients">




   <?php

    include("connection.php");
    if (!isset($_SESSION['email'])) {
      header("Location: login.php");
      exit();
    }
    
 

    
       $lemail = $_SESSION['email'] ?? '';
       $lpassword =  $_SESSION['password']?? '';


      $query="select * from appointment_requests where lemail='$lemail' and lpassword='$lpassword' and lawyerstatus='DECLAINED'";
      $result=mysqli_query($con,$query);
   
              echo"<h2>My appointments</h2>";
              echo"<div class='container101'>";
              echo"<table>";
                echo"<thead>";
                    echo"<tr>";
                      // echo"<th>Image</th>";
                      echo"<th>Client Name</th>";
                      echo"<th>Place</th>";   
                      echo"<th>Case number</th>";
                      echo"<th>Case description</th>";
                      echo"<th>Phone</th>"; 
                      echo"<th>Contact options</th>"; 
                      echo"<th>Action</th>";                                                   
                      echo"<th>My Status</th>";
                      

                      

                    echo"</tr>";
                  echo" </thead>";

                  if($result && mysqli_num_rows($result) > 0) 
                  {
                    echo "<tbody>";
                      while($row = $result->fetch_assoc()) 
                      {
                        echo "<tr>";
                        // echo "<td><img src=\"" . 'images/client_images/' . $row['image'] . "\" alt=\"\" width=\"180px\" height=\"200px\"></td>";
                        echo "<td>" .($row['clientname'])."</td>"; 
                        echo "<td>" .($row['clientplace'])."</td>"; 
                        echo "<td>" .($row['case_number'])."</td>"; 
                        echo "<td>" .($row['case_description'])."</td>";
                        echo "<td>" .($row['clientcontact'])."</td>"; 
                        echo "<td>";
                        echo "<a href='tel:" . $row['clientcontact'] . "' class='icon-button'><i class='fas fa-phone'></i></a>";
                        echo "<a href='mailto:" . $row['cemail'] . "' class='icon-button'><i class='fas fa-envelope'></i></a>";
                        echo "</td>";
                        

                        echo "<td>
                        <form method='POST'>
                            <input type='hidden' name='appointment_id' value='" . $row['appointment_id'] . "'>
                            <input type='hidden' name='cemail' value='" . $row['cemail'] . "'>
                            <input type='hidden' name='cpassword' value='" . $row['cpassword'] . "'>
                            <button name='delete'>Delete</button><br><br>
                            <button class='button1' name='interested'>Interested</button>
                        </form>
                        </td>";



                        echo "<td>" .($row['lawyerstatus'])."</td>"; 

                        
                        echo "</tr>";
                      }
                    echo "</tbody>";
                  } 

              else 
                  {
                    echo "<tr><td colspan='7'>No records found</td></tr>";
                  }
  
                echo "</table>";
              echo "</div>";

  
            
                
  ?>

  </section>
</main>






<!-- table -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; <strong><span>LegalNexis</span></strong>. All Rights Reserved
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