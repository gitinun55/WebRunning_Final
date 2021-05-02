<?php  
  
include("connectDB/login.php");  
  
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $check_user="select * from user_admin WHERE username='$username' AND password='$password'";  
  
    $result = $conn->query($check_user);
    
	$row=mysqli_fetch_array($result);
	
 if ($result->num_rows > 0)	 
    {
        session_write_close();
        session_start();
        $_SESSION['user_admin'] = $username;
           
        echo "<script>window.open('main/admin/main_admin.php','_self')</script>";
    }  
    else  
    {  
        $_SESSION['user_admin'] = "";   
       echo "<script>alert('ชื่อผู้ใช้หรือรหัสผิด โปรดกรอกใหม่อีกครั้ง!')</script>";  
	   echo "<script>window.open('main.php','_self')</script>";  
    }  
}  
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RUNNER BACKEND</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="icon" type="image/png" href="images/runner.png"/>
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu bg-passtell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <a href="main.php">
                                <div id="colorlib-logo"><img src="images/runner.png" width="70" height="70"
									>RUNNER BACKEND
							</a></div>

					</div>
					
					<div class="text-left menu-1">
						<ul>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<!-- Modal -->
	<div id="ModalLogin" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<form role="form" method="post" action="main.php">
					<div class="modal-header">			
						<div class="h3">ลงชื่อผู้ใช้
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
					</div>

					<div class="modal-body">

						<div class="form-group">
							<label>ชื่อผู้ใช้</label>
							<input type="username" name="username" type="username" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>รหัสผ่าน</label>
							<input type="password" name="password" type="password" class="form-control" required="required">
						</div>
					</div>

					<div class="modal-footer justify-content-between">
						<button type="submit" class="btn btn-primary" name="login" value="login">ล็อคอิน</button>
					</div>

				</form>
			</div>
		</div>
	</div>    

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url(images/run.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
								<div class="slider-text-inner text-center">
									<h1>RUNNER BACKEND</h1>
										<p><button type="button" class="btn btn-primary" style="font-size: 17px" data-toggle="modal" data-target="#ModalLogin"><span>
										เข้าสู่ระบบ</span></button></p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>


	<div id="colorlib-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-5 intro-wrap">
					<div class="intro-flex"></div>
				</div>
			</div>
		</div>
<br><br><br><br>
		<footer id="colorlib-footer">
			<div class="container">

				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; JUST FOR RUN </small><br>
						<small class="block">จัดทำโดย IT40</small>
					</p>
				</div>
			</div>
	</div>
	</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>