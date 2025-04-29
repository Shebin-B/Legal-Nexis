<!DOCTYPE html>
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
  <link rel="stylesheet" href="lawyerformstyle.css?v=1.0">
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
                <!-- <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li> -->
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
                <!-- <form class="form-inline justify-content-center">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->

  </div>

  <!-- service section -->

<section class="service_section layout_padding">
    <div class="container2">
        <h1>Lawyer Registration Form</h1>
        <form action="#" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Please enter a valid name (letters only)">
    </div>
    
    <div class="form-group">
        <label for="barid">Bar Council ID:</label>
        <input type="text" id="barid" name="barid" required pattern="^[A-Z0-9\-]+$" title="Please enter a valid Bar Council ID">
    </div>

    <div class="form-group">
        <label for="contact">phone:</label>
        <input type="text" id="contact" name="contact" required pattern="\d{10}" title="Please enter a 10-digit phone number">
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required pattern="[A-Za-z\s]+" title="Please enter a valid address (letters only)">
    </div>

    <div class="form-group">
        <label for="district">District:</label>
        <select id="district" name="district" required>
            <option value="">- Choose your district -</option>
            <option value="kasaragod">Kasaragod</option>
            <option value="kannur">Kannur</option>
            <option value="wayanad">Wayanad</option>
            <option value="kozhikode">Kozhikode</option>
            <option value="malapuram">Malapuram</option>
            <option value="palakad">Palakad</option>
            <option value="thrissur">Thrissur</option>
            <option value="ernakulam">Ernakulam</option>
            <option value="alappuzha">Alappuzha</option>
            <option value="kottayam">Kottayam</option>
            <option value="idukki">Idukki</option>
            <option value="pathanamthita">Pathanamthita</option>
            <option value="kollam">Kollam</option>
            <option value="thiruvanathapuram">Thiruvanathapuram</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required pattern="[A-Za-z\s]+" title="Please enter a valid city name (letters only)">
    </div>

    <div class="form-group">
        <label for="pin">Pin Code:</label>
        <input type="text" id="pin" name="pin" required pattern="\d{6}" title="Please enter a 6-digit pin code">
    </div>

    <div class="form-group">
        <label for="image"> Profile Image:</label>
        <input type="file" id="image" name="image" required accept="image/*">
        <small>Please upload your image.</small>
    </div>

    <div class="form-group">
        <label for="qualification">Qualification:</label>
        <input type="text" id="qualification" name="qualification" required pattern="[A-Za-z\s]+" title="Please enter a valid qualification (letters only)">
    </div>

    <div class="form-group">
        <label for="university">University:</label>
        <input type="text" id="university" name="university" required pattern="[A-Za-z\s]+" title="Please enter a valid university name (letters only)">
    </div>

    <div class="form-group">
        <label for="yearpass">Year of Passing:</label>
        <input type="text" id="yearpass" name="yearpass" required pattern="\d{4}" title="Please enter a valid year (e.g., 2024)">
    </div>

    <div class="form-group">
        <label for="experience">Experience:</label>
        <input type="text" id="experience" name="experience" required min="0" max="25" title="Please enter a number between 0 and 99">
    </div>

    <div class="form-group">
        <label for="speciality">Specialized In:</label>
        <select id="speciality" name="speciality" required>
            <option value="">- Choose your specialization -</option>
            <option value="criminal">Criminal Law</option>
            <option value="civil">Civil Law</option>
            <option value="writ">Writ Jurisdiction</option>
            <option value="company">Company Law</option>
            <option value="contract">Contract Law</option>
            <option value="commercial">Commercial Law</option>
            <option value="construction">Construction Law</option>
            <option value="IT">IT Law</option>
            <option value="family">Family Law</option>
            <option value="religious">Religious Matter</option>
            <option value="investment">Investment Law</option>
            <option value="labour">Labour Law</option>
            <option value="property">Property Law</option>
            <option value="taxation">Taxation Law</option>
            <option value="others">Others</option>
        </select>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required minlength="4" maxlength="6" placeholder="Enter a password" title="Password must be between 4 to 6 characters long">
    </div>

    
    <div class="form-group">
        <label>
            <input type="checkbox" required> 
            I agree to the <a href="termsandco.html" target="_blank">terms and conditions</a>
        </label><br>
    </div>
    

    <button type="submit" name="submit">Register as Lawyer</button>
</form>



    </div>

</section>

  <!-- service section ends -->

  <!-- php code -->

<?php
include("connection.php");
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $bar_id=$_POST["barid"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $district=$_POST["district"];
    $city=$_POST["city"];
    $pin=$_POST["pin"];
    $image_name=$_FILES["image"]["name"];
    $image_tmp_name=$_FILES["image"]["tmp_name"];
    $qualification=$_POST["qualification"];
    $university=$_POST["university"];
    $yearofpass=$_POST["yearpass"];
    $experience=$_POST["experience"];
    // $practice=$_POST["area"];
    $specialization=$_POST["speciality"];
    $password=$_POST["password"];
    $user_id=3;
    $status="PENDING";


    $query="insert into lawyer_registration values('$name','$bar_id','$contact','$email','$address','$district','$city','$pin','$image_name','$qualification','$university','$yearofpass','$experience','$specialization','$password','$status')";
    $result1=mysqli_query($con,$query);

    $query="insert into login_details values('$email','$password','$user_id','$status')";
    $result2=mysqli_query($con,$query);

    if ($result1 && $result2) 
    {

      move_uploaded_file($image_tmp_name, "images/lawyer_images/" . $image_name);

      echo "<script>alert('Registration successful! Welcome Lawyer, $name!');</script>";
  } else {
      echo "<script>alert('Registration failed. Please try again.');</script>";
  }
}
?>

 <!-- php code ends -->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>