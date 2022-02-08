<?php
session_start();
   
   include("connection.php");
  
 if(isset($_POST['submit']))
 {
   $source=$_POST['source'];
   $destination=$_POST['destination'];
   
   if(isset($_SESSION['user_id']))
   {
    $uid =$_SESSION['user_id'];

   }
   
  

   $query="INSERT INTO `booking1` ( `source`, `destination`, `user_id`) VALUES ( '$source', '$destination','$uid')";
   $result= mysqli_query($con, $query);
   if($result)
   {
     echo"data saved";
   }
   else{
     echo"data not saved";
      $a=mysqli_error($con);
      echo"$a";
   }
 }
 


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TICKETS BOOKING</title>
     
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
     <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html #services">Services</a></li>
         <!---- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>-->
          <!--<li><a class="nav-link scrollto" href="index.html #team">Team</a></li>-->
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
         <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/dbms/index2.html" class="get-started-btn scrollto">GO BACK</a>
      <!-- <a href="/dbms/logout.php" class="get-started-btn scrollto">Log out</a> -->
      
    </div>
  </header><!-- End Header -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
<div class="container">
  <form action="/dbms/booking.php" method="post">
 <select class="form-select form-select-lg mb-3" name="source" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
 </select>

 <select class="form-select form-select-sm" name="destination" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
 </select>
 <button type="submit" name="submit" class="btn btn-primary">BOOK NOW</button>
 <button type="submit" name="submit" class="btn btn-success"><a href="/dbms/interface.php">GO BACK</a></button>

 </form>
</div>

</html>