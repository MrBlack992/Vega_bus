<?php
  include('connection.php');
  $update=false;
  $showError=false;
  session_start();
  if(isset($_POST['submit']))
  {
    $userid = $_POST["userid"];
    $sql="SELECT * FROM `users1` WHERE id='$userid'";
    $result1 = mysqli_query($con, $sql);
    $result2=mysqli_fetch_assoc($result1);
    if($result2)
    {
      $user_id=$result2['id'];
    }
    
    $query="SELECT * FROM `payment` WHERE user_id='$userid'";
    $result3 = mysqli_query($con, $query);
    $result4= mysqli_fetch_assoc($result3);
     if($result4)
    {

      $paid=$result4['paid'];
      echo"data saved";
      
      
    }
    else{
      $b=mysqli_error($con);
      echo"$b";
    
    }
    
    if($paid==0)
   {
      $query1="UPDATE `payment` SET paid=1 WHERE user_id='$userid'";
      
      $result5= mysqli_query($con, $query1);
      // if($query1)
      // {
      //   echo"saved";
      // }
      // else{
      //   echo"data not saved";
      // $a=mysqli_error($con);
      // echo"$a";
      // }
      // $update=true;
      if($result5)
      {
        $update="true";
      }

   }
   else{
     $showError="Passenger has already taken ride with this ticket";
    //  $query2="DELETE FROM `P` WHERE  user_id ='$userid";
    //  $result6=mysqli_query($con,$query2);
   }

  //  if($update)
  //  {
  //     $update="updated successfully";
  //  }
  //  else{
  //     $showError="Passenger has already taken a ride with this ticket";
  //  }

     
  }
  







?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME</title>
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

  <!-- =======================================================
  * Template Name: Presento - v3.7.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
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
<style> .btn {
  background: #28a745;
  border: #E8D426;
}</style>
<style>
  .cont {
    margin-top: 50rem;
  }
</style>
<style>
  #goback{
    margin-left: 30px;
    background: #e03a3c;
    color: #fff;
    border-radius: 4px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
  }
  .btn a{
    color: #ffffff;
    
  }
</style>
</head>

<body>
  <?php
    if($update){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!,The ticket is valid for this ride</strong>'. $update.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
 
  <div class="container">

    <div class="pt-5">
      <h1 class="text-center"> Enter User Details</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-5 mx-auto">
            <div class="card card-body">
              <form id="submitForm" action="/dbms/conductorinterface.php" method="post" data-parsley-validate=""
                data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
                <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">

                <div class="form-group required my-3">
                  <!-- <lSabel for="username"> Enter your email </lSabel> -->
                  <input type="text" class="form-control text-lowercase" id="userid" required="" name="userid"
                    placeholder="Enter passenger's user_id" value="">
                </div>

                <!-- <div class="form-group mt-4 mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me"
                                    data-parsley-multiple="remember-me">
                                <label clss="custom-control-label" for="remember-me"> Remember me? </label>
                            </div>
                        </div> 
                        <p class="small-xl pt-3">
                        <span class="text-muted"> forgot possword? </span>
                        <a href="/dbms/recover.php"> Click here </a>
                    </p> -->
                <div class="form-group pt-1 ">
                  <button class="btn btn-primary btn-block" name="submit" type="submit"><a href="payment.php">Check Status</a></button>
                  <button id="goback" class="btn btn-primary btn-block"><a href="conductorlogin.html">Go back</a></button>
                </div>

              </form>
              <!-- <p class="small-xl pt-3 text-center">
                        <span class="text-muted"> forgot possword? </span>
                        <a href="/dbms/recover.php"> Click here </a>
                    </p> -->
              <!-- <p class="small-xl pt-3 text-center">
                        <span class="text-muted"> Not a member? </span>
                        <a href="/dbms/signup.php"> Signup </a>
                    </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>


</body>

</html>