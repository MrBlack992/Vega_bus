<?php include('connection.php');
session_start();
$message = $link = '';
if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$query = "SELECT * FROM users WHERE email = '".$email."'";
	$result = $con->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$id = $row['id'];
		$id_encode = base64_encode($id);
		$link = "<a href='reset.php?MnoQtyPXZORTE=$id_encode' class='btn btn-info btn-sm'>Recieve Mail</a>";
	}
	}else{
		$message = "<div class='alert alert-danger'>Invalid Email..!!</div>";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>forget Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
	#navbar{
		padding-left: 40rem;
	}
	button a{
		color:#ffffff;
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
             <!--- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <a href="/dbms/interface.html" class="get-started-btn scrollto">GO BACK</a>
          <!-- <a href="/dbms/logout.php" class="get-started-btn scrollto">Log out</a> -->
          
        </div>
      </header><!-- End Header -->

		<div class="container w-50 mt-5">
			<form class="bg-light p-5 shadow-lg" method="post">
				<?php echo $message; ?> 
				<h1 class="text-success">Forget Password</h1>
				<label for="Email">Email</label>
				<input type="email" name="email" placeholder="Email Address" class="form-control form-control-sm" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm"><a  href="/dbms/reset.php">Reset Password</a></button>
				<?php echo $link; ?>
			</form>
		</div>
</body>
</html>
