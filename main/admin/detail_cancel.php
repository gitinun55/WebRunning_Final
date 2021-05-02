
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RUNNERS BACKEND</title>
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

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

    <style>
    #footer{
        position: fixed;
        padding: 1px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        font-size: 13px;
        height: 70px;
        background :black;
    }
    .aligncenter {
        text-align: center;
    }

    </style>
    <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="../../images/runner.png"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!--===============================================================================================-->
 
    <!-- Animate.css -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../../css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Modernizr JS -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>
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
                        <div class="col-md-3">
                            <a href="main_admin.php">
                                <div id="colorlib-logo"><img src="../../images/runner.png" width="50"height="50">RUNNER BACKEND
                            </a>
                        </div>
                    </div>

                    <div class="text-left menu-1">
                        <ul>
                            <li><a href="main_admin.php"><i class="fa fa-home"></i> หน้าหลัก</a></li>
                            <li><a href="reserve.php"><i class="fas fa-tasks"></i> งานที่รออนุมัติ</a></li>
                            </li>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <li class="btn-cta"><a href="../../main.php"><span><i class="fa fa-sign-in-alt"></i>
                                            ออกจากระบบ</span></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </nav>

        <form id="message_form" action="cancel.php" method="post">
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100">
                    
                            <h1>รายละเอียดเหตุผลที่ไม่อนุมัติ</h1>
                            <label for="w3review">รายละเอียด :</label>
                            <br>
                            <input type="hidden" id="id_add_message" name="id_add_message" value="<?php echo $_REQUEST['id_add']; ?>">
                            <textarea id="message_cancel" name="message_cancel" rows="4" cols="50"></textarea>
                            <br>
                            <button type="summit" class="btn btn-success" id="btn_summit">ส่ง</button>
                        
                        </div>
                    </div>
                </div>  
            </div> 
        </form>
     

        <div id="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 intro-wrap">
                        <div class="intro-flex"></div>
                    </div>
                </div>
            </div>
        </div>
    
		<footer id="footer">
			<div class="container">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; JUST FOR RUN </small><br>
						<small class="block">จัดทำโดย IT40</small>
					</p>
				</div>
            </div>
        </footer>
	</div>

    <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../../js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="../../js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="../../js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="../../js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="../../js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="../../js/main.js"></script>

</body>

</html>

<script>


</script>
