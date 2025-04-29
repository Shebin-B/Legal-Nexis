<?php
ob_start(); // Start output buffering
include("connection.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (isset($_POST["login"])) {
    $username = $_POST["email"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM login_details WHERE username=? and password=? and status='APPROVED'");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        // Check if user exists
        if ($row) {
            // echo "User found: " . json_encode($row) . "<br>"; // Display user details for debugging

            // Check against the plain text password
            if ($password === $row['password']) {
                // Store relevant session variables
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['username'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['cemail'] = $row['username'];
                $_SESSION['cpassword'] = $row['password'];
               
               
                // Redirect based on user type
                switch ($row["user_id"]) {
                    case 0:
                        header("Location: admin-dashboard.php");
                        exit();
                    case 2:
                        // Fetch profile details from client_registration table
                        $client_stmt = $con->prepare("SELECT * FROM client_registration WHERE email=? and password=? and status='APPROVED'");
                        $client_stmt->bind_param("ss", $username, $password);
                        $client_stmt->execute();
                        $client_result = $client_stmt->get_result();
                        $client_row = $client_result->fetch_array(MYSQLI_ASSOC);

                        // Store client session variables
                        if ($client_row) {
                            $_SESSION['name'] = $client_row['name'];
                            $_SESSION['contact'] = $client_row['contact'];
                            $_SESSION['case_no'] = $client_row['case_no'];
                            $_SESSION['address'] = $client_row['address'];
                            $_SESSION['district'] = $client_row['district'];
                            $_SESSION['city'] = $client_row['city'];
                            $_SESSION['pin'] = $client_row['pin'];
                            $_SESSION['image_name'] = $client_row['image'];
                            $_SESSION['password'] = $client_row['password'];
                          
                        }

                        header("Location: client-profile.php");
                        exit();
                    case 3:
                        // Fetch profile details from lawyer_registration table
                        $lawyer_stmt = $con->prepare("SELECT * FROM lawyer_registration WHERE email=? and password=? and status='APPROVED'");
                        $lawyer_stmt->bind_param("ss", $username, $password);
                        $lawyer_stmt->execute();
                        $lawyer_result = $lawyer_stmt->get_result();
                        $lawyer_row = $lawyer_result->fetch_array(MYSQLI_ASSOC);

                        // Store lawyer session variables
                        if ($lawyer_row) {
                            $_SESSION['name'] = $lawyer_row['name'];
                            $_SESSION['bar_id'] = $lawyer_row['bar_id'];
                            $_SESSION['contact'] = $lawyer_row['contact'];
                            $_SESSION['email'] = $lawyer_row['email'];
                            $_SESSION['address'] = $lawyer_row['address'];
                            $_SESSION['district'] = $lawyer_row['district'];
                            $_SESSION['city'] = $lawyer_row['city'];
                            $_SESSION['pin'] = $lawyer_row['pin'];
                            $_SESSION['image_name'] = $lawyer_row['image'];
                            $_SESSION['qualification'] = $lawyer_row['qualification'];
                            $_SESSION['university'] = $lawyer_row['university'];
                            $_SESSION['yearofpass'] = $lawyer_row['yearofpass'];
                            $_SESSION['experience'] = $lawyer_row['experience'];
                            // $_SESSION['practice'] = $lawyer_row['practice'];
                            $_SESSION['specialization'] = $lawyer_row['specialization'];
                            $_SESSION['password'] = $lawyer_row['password'];
                            $_SESSION['lcontact'] = $lawyer_row['contact'];
                          
                        }

                        header("Location: Lawyer-profile .php");
                        exit();
                    default:
                        echo "Invalid user type"; // In case of unexpected user_id
                        break;
                }
            } else {
                echo "Invalid login credentials: Password mismatch"; // Password incorrect
            }
        } else {
            echo "Invalid login credentials: User not found"; // User not found
        }
    } else {
        echo "Error executing query: " . $stmt->error; // Error executing the query
    }

    $stmt->close();
}

ob_end_flush(); // End output buffering
?>

<!-- php code ends -->

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>LegalNexis</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css?v=1.0" />
  <link rel="stylesheet" href="login.css?v=1.0">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css?v=1.0" rel="stylesheet" />
  

  <!-- Custom styles for this template -->
  <link href="css/style.css?v=1.0" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css?v=1.0" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images\home-images\bannerimg.jpg" alt="">
    </div>
 
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
       
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                legalnexis@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand " href="index.html"> <div class="hh">
              <div class="head">
                <h2>LEGAL</h2> 
              </div>
              <div class="head1">
                <h2>Nexis</h2> 
              </div>
            </div> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
               
          
               
                <li class="nav-item">
                  <a class="nav-link" href="login.php">login</a>
                </li>
               
              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>register</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="clientform.php">Register as cleint</a>
                    <a class="dropdown-item" href="lawyerform.php">Register as lawyer</a>
                  
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
             
                  <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="myprofile.php">My profile</a>
                </li>

                <form class="form-inline justify-content-center">
                  <a href="search-form.php" class="btn my-2 my-sm-0 nav_search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </a>
                </form>
               
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
   

  </div>

  

<section class="service_section layout_padding">
  <div class="container1">
    <form class="loginform" method="POST" action="">
      <h1 id="heading">Login</h1>
      <div class="inputgroup">
          <label for="email">Email Id</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div class="inputgroup">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
      </div>

      
     
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</section>


   



 
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> 
        <a href="https://html.design/">LegalNexis</a>
      </p>
    </div>
  </footer>


 
  <script src="js/jquery-3.4.1.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>