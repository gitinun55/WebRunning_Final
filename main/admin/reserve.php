
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

    <style>
    .aligncenter {
        text-align: center;
    }
    </style>

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

    <!-- TABLE -->
    	<div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <h1>งานที่รออนุมัติ</h1>
                            <?php require_once '../../connectDB/database.php'; ?>

                            <?php
                                $mysqli = new mysqli("localhost","root","","data_running") or die(mysqli_error($mysqli));
                                $result = $mysqli->query("SELECT * FROM add_event ") or die ($mysqli->error);
                            ?> 

                            <div class = "row justify-content-center">
                                <table class="white">
                                    <thead>
                                        <tr class="table100-head">
                                            <th >ID</th>
                                            <th >ชื่องาน</th> 
                                            <th >องค์กร</th>
                                            <th >ผู้จัดกิจกรรม</th>
                                            <th >วันเริ่ม</th>
                                            <th >วันสิ้นสุด</th>
                                            <th >สถานะ</th>
                                            <th colspan="2">ตรวจสอบ</th>
                                        </tr>
                                    </thead>

                                    <?php
                                        while ($row = $result->fetch_assoc()): 
                                        $id_add = $row['id_add'];

                                        $status_event = $row['status_event'];
                                        if($status_event == 1){
                                            $summit = "อนุมัติ";
                                        }elseif ($status_event == 0) {
                                            $summit = "รออนุมัติ";
                                        }elseif ($status_event == 2) {
                                            $summit = "ไม่อนุมัติ";
                                        }
                                    ?>
                                            <tr>
                                                <td><?php echo $row['id_add']; ?></td>
                                                <td><?php echo $row['name_event']; ?></td>
                                                <td><?php echo $row['name_producer']; ?></td>
                                                <td><?php echo $row['name_organizer']; ?></td>
                                                <td><?php echo $row['date_reg_start']; ?></td>
                                                <td><?php echo $row['date_reg_end']; ?></td>
                                                <td><?php echo $summit?></td>
                                                <td>
                                                    <button type="summit" class="btn btn-primary" id="btn_detailEvent"
                                                    data-id="<?php echo $row['id_add']; ?>"
                                                    data-pic_event="<?php echo $row['pic_event']; ?>"
                                                    data-name_event="<?php echo $row['name_event']; ?>"
                                                    data-name_producer="<?php echo $row['name_producer']; ?>"
                                                    data-name_organizer="<?php echo $row['name_organizer']; ?>"
                                                    data-date_reg_start="<?php echo $row['date_reg_start']; ?>"
                                                    data-date_reg_end="<?php echo $row['date_reg_end']; ?>"
                                                    data-objective="<?php echo $row['objective']; ?>"
                                                    data-detail="<?php echo $row['detail']; ?>" 
                                                    data-type="<?php echo $row['type']; ?>"
                                                    data-toggle="modal" data-target="#exampleModalLong" href="#exampleModalLong">
                                                    <i class="fa fa-file"></i>  เพิ่มเติม</button>
                                                    
                                                    <!-- model -->
                                                        <div class="detail_modal modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <div class="h3">รายละเอียดงาน
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        </div> 
                                                                    </div>
                                                                    <form id="showdetail">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id_add" id="id_add" class="text-second">
                                                                            ลำดับ <p name="text_id_add" id="text_id_add"></p>
                                                                            <p class="aligncenter">
                                                                                <img name="pic_event" id="text_pic_event" width="400" height="200" alt="centered image"></img>
                                                                            </p>
                                                                            ชื่องาน <p name="name_event" id="text_name_event"></p>
                                                                            ชื่อผู้สมัคร <p name="name_organizer" id="text_name_organizer"></p>
                                                                            ชื่อมูลนิธิ <p name="name_producer" id="text_name_producer"></p>
                                                                            วันเริ่มกิจกรรม <p name="date_reg_start" id="text_date-reg_start"></p>
                                                                            วันสิ้นสุดกิจกรรม <p name="date_reg_end" id="text_date_reg_end"></p>
                                                                            วัตถุประสงค์ <p name="objective" id="text_objective"></p>
                                                                            รายละเอียด <p name="detail" id="text_detail">
                                                                        </div>
                                                                        
                                                                        <div class="modal-footer">
                                                                            <a href="#" class="detail_cancel btn btn-danger">ไม่อนุมัติ</a>
                                                                            <button type="summit" class="btn btn-success" id="btn_summitevent" data-id="">อนุมัติ</button>
                                                                      
                                                                        </div>
                                                                       
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- model -->
                                                </td>       
                                            </tr>
                                    <?php endwhile; ?> 
                                </table>
                            </div>
                            
                        <?php
                            function pre_r( $array ) {
                                echo 'pre';
                                print_r($array);
                                echo '</pre>';
                            }
                        ?>

                    </div>      
                </div>  
            </div>  
        </div>  

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






    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>

<script>

    $(document).on("click","#btn_detailEvent", function () {
        var id_add = $(this).data("id");
        var pic_event = $(this).data("pic_event");
        var name_event = $(this).data("name_event");
        var name_organizer = $(this).data("name_organizer");
        var name_producer = $(this).data("name_producer");
        var date_reg_start = $(this).data("date_reg_start");
        var date_reg_end = $(this).data("date_reg_end"); 
        var objective = $(this).data("objective"); 
        var detail = $(this).data("detail"); 
        var type = $(this).data("type");
        $('#id_add').val(id_add);
        $('#text_id_add').text(id_add);
        $('#text_pic_event').attr("src",pic_event);
        $('#text_name_event').text(name_event);
        $('#text_name_organizer').text(name_organizer);
        $('#text_name_producer').text(name_producer);
        $('#text_date-reg_start').text(date_reg_start);
        $('#text_date_reg_end').text(date_reg_end);
        $('#text_objective').text(objective);
        $('#text_detail').text(detail);

        if(type != 0){
            $('.modal-footer').hide();
        }
     
    });

    $('#exampleModalLong').on('show.bs.modal', function (event) {
            var id_add = $(event.relatedTarget).attr('data-id');
            var href = 'detail_cancel.php?id_add=' + id_add
            $('.detail_cancel', this).attr('href', href)
    });

    $('#btn_summitevent').on("click" , function(summit_event) {
        summit_event.preventDefault();
            $.ajax({
                url: "accept.php",
                method: "POST",
                cache: false,
                data: $('#showdetail').serialize(),
                success: function(data) {
                    location.reload()
                        alert("Send Completed");
                   
            
                }
        });
    });

    $(document).ready(function() {
        $('.modal').on("hidden.bs.modal", function(e) { //fire on closing modal box
            if ($('.modal:visible').length) { // check whether parent modal is opend after child modal close
                $('body').addClass(
                    'modal-open'
                ); // if open mean length is 1 then add a bootstrap css class to body of the page
            }
        });
    });
   

     

</script>
