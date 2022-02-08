<?php
 

 include("connection.php");
 session_start();
 if(isset($_POST['submit']))
 {
   $source=$_POST['source'];
   $destination=$_POST['destination'];
   $uid =$_SESSION['user_id'];
  

   $query="INSERT INTO `booking` ( `source`, `destination`, `user_id`) VALUES ( '$source', '$destination',`$uid`)";
   $result= mysqli_query($con, $query);
   if($result)
   {
     echo"data saved";
   }
   else{
     echo"data not saved";
   }
 }
 


?>



<html>

<head>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.css' rel='stylesheet'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/htmlmixed/htmlmixed.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/javascript/javascript.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/xml/xml.js'></script>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Book Tickets</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
      #header{
          background-color: #333;
          
      }
      #header .logo a {
      color: #ffffff;
      }
      .navbar a, .navbar a:focus {
           color: #ffffff;
          }
      body{
          background: url("../img/bus.jpg") top center no-repeat;
      }
</style>    
  </head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index2.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index2.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index2.php #services">Services</a></li>
          <!---- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>-->
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>-->
          <!----  <li><a href="blog.html">Blog</a></li>-->
          <!--- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <!--<li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/dbms/index2.php" class="get-started-btn scrollto">GO BACK</a>

    </div>
  </header><!-- End Header -->
  <br>
  <br>
  <br>
  <br>
  <br>

<div style="background-color: #FFF; max-width: 800px; margin: auto; padding: 20px;">
    <div class="container-fluid">
    <form id="submitForm" action="/dbms/book.php" method="post" data-parsley-validate=""
    data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
        <select name="source" class="form-select" aria-label="Default select example ">
          <option selected>Select Source</option>
          <option value="1">Begur</option>
          <option value="2">AMC College</option>
          <option value="3">Majestic</option>
        </select><br>
        <select name="destination" class="form-select" aria-label="Default select example">
          <option selected>Select Destination</option>
          <option value="1">Begur</option>
          <option value="2">AMC College</option>
          <option value="3">Majestic</option>
        </select>
        <br>
        <br>

        <button type="submit" href =" /dbms/payment.php" name="submit" class="btn btn-primary" >BOOK NOW</button>
    </div>
<!-- </div>   -->
    <!-- <br>
    <br>
    <br> -->
    </form>
    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

         <!--- <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>-->

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index2.php #hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index2.php #about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index2.php #services">Services</a></li>
             <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

<!---          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>-->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
       <!--- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

</body>

</html>