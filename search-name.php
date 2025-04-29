<?php
// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0");
?>

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
  <link rel="stylesheet" href="admincss.css?v=1.0">
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
  <link rel="stylesheet" href="admincss.css?v=1.0">
  <!-- responsive style -->
  <link href="css/responsive.css?v=1.0" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images\home-images\bannerimg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <!-- <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a> -->
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
               
                <!-- <li class="nav-item active">
                  <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li> -->

                <li class="nav-item">
                  <a class="nav-link" href="search-form.php">Search by specialization</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="search-district.php">Search by district</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="login.php">login</a>
                </li>
               
              
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>register</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="clientform.php">Register as cleint</a>
                    <a class="dropdown-item" href="lawyerform.php">Register as lawyer</a>
                  
                  </div>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
             
                  <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="myprofile.php">My profile</a>
                </li>

           
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->

  </div>

  <!-- service section -->
  <div class="container11">
  <form method="POST" action="" enctype="multipart/form-data">
    <div class="search-container">
      <!-- <select id="district" class="search-field" name="district" required>
        <option value="">- District -</option>
        <option value="kasaragod">Kasaragod</option>
        <option value="Kannur">Kannur</option>
        <option value="Wayanad">Wayanad</option>
        <option value="Kozhikode">Kozhikode</option>
        <option value="Malapuram">Malapuram</option>
        <option value="Palakad">Palakad</option>
        <option value="Thrissur">Thrissur</option>
        <option value="Ernakulam">Ernakulam</option>
        <option value="Alappuzha">Alappuzha</option>
        <option value="Kottayam">Kottayam</option>
        <option value="Idukki">Idukki</option>
        <option value="Pathanamthita">Pathanamthita</option>
        <option value="Kollam">Kollam</option>
        <option value="Thiruvanathapuram">Thiruvanathapuram</option>
      </select>
      <select id="speciality" class="search-field" name="speciality" required>
       <option value="">- Specialized in -</option>
       <option value="criminal">Criminal Law</option>
       <option value="civil">Civil Law</option>
       <option value="writ">Writ Jurisdiction</option>
       <option value="company">Company Law</option>
       <option value="contract">Contract Law</option>
       <option value="commercial">Commercial Law</option>
       <option value="construction">Construction Law</option>
       <option value="information">IT Law</option>
       <option value="family">Family Law</option>
       <option value="religious">Religious Matter</option>
       <option value="investment">Investment Law</option>
       <option value="labour">Labour Law</option>
       <option value="property">Property Law</option>
       <option value="taxation">Taxation Law</option>
       <option value="others">Others</option>
      </select> -->
       <input type="text" placeholder="Lawyer name" class="search-field" name="name">
       <button class="search-button12" name="search">Search</button>
    </div>
  </div>

  <?php
    include("connection.php");


    
 
    
        if (isset($_POST["search"])) {

          $name=$_POST["name"];
          
          // $speciality=$_POST["speciality"];
          
          // $qualification=$_POST["qualification"];

        $query="select * from lawyer_registration where name='$name'";
        $result=mysqli_query($con,$query);

        //  $_SESSION['email'] = $row['email'];
        //  $_SESSION['password'] = $row['password'];
         
        if($result && mysqli_num_rows($result) > 0) 
        {

          echo"<div class='container101'>";
          echo"<table>";
          echo"<thead>";
          echo"<tr>";
               echo"<th>Image</th>";
               echo"<th>Name</th>";                                       
               echo"<th>District</th>";              
               echo"<th>Qualification</th>";             
               echo"<th>Specialized</th>";             
               echo"<th>Action</th>";
           echo"</tr>";
       echo"</thead>";
          echo "<tbody>";
          while($row = $result->fetch_assoc()) 
          {

           echo" <tr>";
              echo "<td><img src=\"" . 'images/lawyer_images/' . $row['image'] . "\" alt=\"\" width=\"180px\" height=\"200px\"></td>";
              echo" <td>" . ($row['name'])."</td>";                         
              echo" <td>" . ($row['district'])."</td>";
              echo" <td>" . ($row['qualification'])."</td>";
              echo" <td>" . ($row['specialization'])."</td>";               
              echo "<td><a href='appointment-lawyerprofile .php?email=" .$row['email'] . "&password=" .$row['password'] . "' class='button'>View profile</a></td>";
           echo "</tr>";
            }
          } 
          else 
          {
            echo "<tr><td colspan='7' style='text-align:center;'>No records found</td></tr>";
          }
                  
             echo" </tbody>";
      
            echo" </table>";
            echo"</div>";
        }
        ?>
  


  <!-- service section ends -->

  

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">LegalNexis</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
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

  <!-- End Google Map -->
</body>

</html>
