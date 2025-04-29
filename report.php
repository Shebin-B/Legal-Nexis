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
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lawyer Report</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Report -->
    <style>
        .report-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .report-header {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .report-field {
            display: flex;
            justify-content: space-between;
            margin: 8px 0;
            font-size: 18px;
        }
        .report-field label {
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
       <style>
        @media print {
            /* Hide sensitive fields */
            .sensitive-info {
                display: none;
            }
            /* Additional styles for print */
            body {
                margin: 0;
                padding: 0;
            }
            .report-container {
                page-break-inside: avoid; /* Prevents breaking the report */
            }
            /* Hide the URL and page numbers if possible */
            @page {
                margin: 0; /* Reduces margins to avoid headers/footers */
            }
        }
    </style>
</head>
<body>

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

        

        </li><!-- End Notification Nav -->

       

        
        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     
      </li><!-- End Dashboard Nav -->

      



      <li class="nav-item">
        <a class="nav-link collapsed" href="Lawyer-profile .php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

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
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="about.php">
          <i class="bi bi-info-circle"></i>
          <span>About us</span>
        </a>
       </li> <!-- End Register Page Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="search-form.php">
          <i class="bi bi-question-circle"></i>
          <span>Search</span>
        </a>
       </li> <!-- End Register Page Nav -->


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
  
      <nav>
        <ol class="breadcrumb">
        
          <li class="breadcrumb-item active">Case handover report</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   <!-- table -->
   <section id="clients">
   <?php
if (isset($_GET['appointment_id'])) {
    $appointment_id = $_GET['appointment_id'];

    // Query to fetch appointment details
    $query = "SELECT * FROM appointment_requests WHERE appointment_id='$appointment_id'";
    $result = mysqli_query($con, $query);      
    $row = $result->fetch_array(MYSQLI_ASSOC);

    // Appointment details
    $clientname = $row['clientname'];
    $clientcontact = $row['clientcontact'];
    $caseno = $row['case_number'];
    $clientplace = $row['clientplace'];
    $tfee = $row['totalamount'];
    $paymentStatus = $row['paymentstatus'];

    // Query to fetch all payments for the given appointment_id
    $payment_query = "SELECT * FROM payments WHERE appointment_id='$appointment_id'";
    $payment_result = mysqli_query($con, $payment_query);
    $payments = mysqli_fetch_all($payment_result, MYSQLI_ASSOC); // Fetch all payments
}
?>
   
  


  </section>
</main>
<div class="report-container">
        <div class="report-header">Report</div>

        <!-- Appointment Details -->
        <div class="report-field">
            <label>Client Name:</label>
            <span><?php echo htmlspecialchars($clientname); ?></span>
        </div>
        <div class="report-field">
            <label>Case no:</label>
            <span><?php echo htmlspecialchars($caseno); ?></span>
        </div>
        <div class="report-field">
            <label>Place:</label>
            <span><?php echo htmlspecialchars($clientplace); ?></span>
        </div>
        <div class="report-field">
            <label>Mobile:</label>
            <span><?php echo htmlspecialchars($clientcontact); ?></span>
        </div>
        <div class="report-field">
            <label>Fee Paid:</label>
            <span><?php echo htmlspecialchars($tfee); ?></span>
        </div>
        
        <!-- Payment Details -->
        <div class="report-field">
            <label>Fee Payments:</label>
            <ul>
                <?php
                if (!empty($payments)) {
                    foreach ($payments as $payment) {
                        echo "<li>Amount: " . htmlspecialchars($payment['payment_amount']) . " - Date: " . htmlspecialchars($payment['payment_date']) . "</li>";
                    }
                } else {
                    echo "<li>No payments recorded for this appointment.</li>";
                }
                ?>
            </ul>
        </div>

        <div class="btn-container">
            <button onclick="window.print()" class="btn btn-primary">Print Report</button>
            <button onclick="window.history.back()" class="btn btn-secondary">Go Back</button>
        </div>
    </div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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