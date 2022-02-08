<?php


include("connection.php");
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    $sql = "select * from users where email='$email' AND password='$password'";
    // $sql = "Select * from users where email='$email'";
    $result = mysqli_query($con, $sql);
    $result2=mysqli_fetch_assoc($result);
    $user_id=$result2['id'];
    
    
    
    $num = mysqli_num_rows($result);


    if ($num == 1)
    {
        // while($row=mysqli_fetch_assoc($result))
    
            // if (password_verify($password, $row['password']))
             
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['user_id']=$user_id;
                
                header("Location:/dbms/index2.php");
    }        
     else
     {
                $showError = "Invalid Credentials";
    }
        
        
     
    // else{
    //     $showError = "Invalid Credentials";
    // }
}
    
?>











<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
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
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }

        .pass {
            margin: 13px;
        }

        .pass a {
            padding-left: 43px;
        }

        body {
            /* background: #28a745 !important; */
            background:url('/bus.jpg');
            font-family: 'Muli', sans-serif;
            background-size: cover;
        }

        h1 {
            color: #fff;
            padding-bottom: 2rem;
            font-weight: bold;
        }

        a {
            color: #333;
        }

        a:hover {
            color: #E8D426;
            text-decoration: none;
        }

        .form-control:focus {
            color: #000;
            background-color: #fff;
            border: 2px solid #E8D426;
            outline: 0;
            box-shadow: none;
        }

        .btn {
            background: #28a745;
            border: #E8D426;
        }

        .btn:hover {
            background: #28a745;
            border: #E8D426;
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

      <a href="/dbms/index2.html" class="get-started-btn scrollto">Go Back</a>
      <!-- <a href="/dbms/logout.php" class="get-started-btn scrollto">Log out</a> -->
      
    </div>
  </header><!-- End Header -->

<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>



<div class="pt-5">
    <h1 class="text-center"> Login</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card card-body">
                    <form id="submitForm" action="/dbms/login.php" method="post" data-parsley-validate=""
                        data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
                        <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                        <div class="form-group required my-3">
                            <!-- <lSabel for="username"> Enter your name </lSabel> -->
                            <input type="email" class="form-control text-lowercase" id="email" required=""
                                name="email"  placeholder ="Enter your Email" value="">
                        </div>
                        <div class="form-group required my-3">
                            <!-- <lSabel for="username"> Enter your email </lSabel> -->
                            <input type="password" class="form-control text-lowercase" id="password" required=""
                                name="password"  placeholder ="Enter your password" value="">
                        </div>
                        
                        <div class="form-group mt-4 mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me"
                                    data-parsley-multiple="remember-me">
                                <label clss="custom-control-label" for="remember-me"> Remember Me? </label>
                            </div>
                        </div> 
                        <p class="small-xl pt-3">
                        <span class="text-muted"> Forgot Password? </span>
                        <a href="/dbms/recover.php"> Click here </a>
                    </p>
                        <div class="form-group pt-1">
                            <button class="btn btn-primary btn-block" href= "/dbms/index2.html" type="submit">Login</button>
                        </div>
                        
                    </form>
                    <!-- <p class="small-xl pt-3 text-center">
                        <span class="text-muted"> forgot possword? </span>
                        <a href="/dbms/recover.php"> Click here </a>
                    </p> -->
                    <p class="small-xl pt-3 text-center">
                        <span class="text-muted"> Not a member? </span>
                        <a href="/dbms/signup.php"> Signup </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


</html>