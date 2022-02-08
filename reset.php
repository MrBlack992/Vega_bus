<?php include('connection.php');
session_start();
$id = $_GET['MnoQtyPXZORTE'];
$message = $Home = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forgotpass.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Password Not Match..!!</div>";
	}
	else{
	$id_decode = base64_decode($id);
	$query = "UPDATE users SET password = '$password' WHERE id = '$id_decode' ";
	$result = $con->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Reset Your Password Successfully..</div>";
			$Home = "<a href='index.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		$message = "<div class='alert alert-danger'>Failed to Reset Password..!!</div>";
	}
	}
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
	</style>
	<style>
		.navbar{
			padding-left: 35rem;
		}
		.logo{
			padding-left: 1rem;
		}
	</style>
</head>
<body class="bg-secondary">
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
			  <li><a class="nav-link scrollto" href="index.html #team">Team</a></li>
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
	
		  <a href="/dbms/interface.html" class="get-started-btn scrollto">LOGIN/SIGNUP</a>
		  <!-- <a href="/dbms/logout.php" class="get-started-btn scrollto">Log out</a> -->
		  
		</div>
	  </header><!-- End Header -->
	
		<div class="container w-50 mt-5">
			<form class="bg-light p-5 shadow-lg" method="post">
				<?php echo $message; ?>
				<h1 class="text-success">Forget Password</h1>
				<label for="password">Password</label>
				<input type="text" name="password" placeholder="Password" class="form-control form-control-sm" required><br>
				<label for="password">Retype Password</label>
				<input type="text" name="Repassword" placeholder="Retype Password" class="form-control form-control-sm" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">Reset Password</button> <?php echo $Home; ?>
			</form>
		</div>
</body>
</html>
