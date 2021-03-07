<?php session_start(); ?>
<?php
include('connection.php');

if (!$_SESSION["userid"]) {  //check session
    Header("Location: index.php");
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <title>ระบบจัดการงานสารบรรณอิเล็กทรอนิกส์</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="css/elegant-icons-style.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link rel="stylesheet" href="css/fullcalendar.css">
        <link href="css/widgets.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />
        <link href="css/xcharts.min.css" rel=" stylesheet">
        <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
        <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
    </head>

    <body>
        <!-- container section start -->
        <section id="container" class="">


            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
                </div>

                <!--logo start-->
                <a href="index.html" class="logo">ระบบจัดการงาน <span class="lite">สารบรรณอิเล็กทรอนิกส์</span></a>
                <!--logo end-->



                <div class="top-nav notification-row">
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">


                        <!-- inbox notificatoin end -->
                        <!-- alert notification start-->

                        <!-- alert notification end-->
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <?php if ($_SESSION["userlevel"] == "user") { ?>
                                    <span class="profile-ava">
                                        <?php echo $_SESSION["name"]; ?>
                                    </span>
                                <?php  } ?>

                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="edituser.php"><i class="icon_profile"></i> ประวัติส่วนตัว</a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    </li>
                    <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a class="" href="page_user.php">
                                <i class="icon_house_alt"></i>
                                <span>หน้าหลัก</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="create_savetext.php">
                                <i class="icon_document_alt"></i>
                                <span>สร้างแบบฟอร์ม</span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บันทึกข้อความ</span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_document_alt"></i>
                                <span>เอกสาร</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="formin_u.php">เอกสารรับ</a></li>
                                <li><a class="" href="formrecieve_u.php">เอกสารส่ง</a></li>
                                <li><a class="" href="formsar_u.php">เอกสารSAR</a></li>
                                <li><a class="" href="formsar_u.php">บันทึกข้อความ</a></li>
                            </ul>
                        </li>

                        <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!--overview start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-laptop"></i>สร้างฟอร์มเอกสาร</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">สร้างฟอร์มเอกสาร</a></li>
                                <li><i class="fa fa-laptop"></i>สร้างฟอร์มเอกสาร</li>
                            </ol>
                        </div>
                    </div>

                    <body>





                        <p>
                            <h1>&nbsp;&nbsp;&nbsp;สร้างฟอร์มบันทึกข้อความ</h1>
                        </p><br>

                        <div class="container col-sm-4">

                            <form method="post" action="createform2.php">
                                <input type="hidden" name="doc_id">
                                <div class="input-group">
                                    <span class="input-group-addon">ที่</span>
                                    <input type="text" class="form-control" name="document_id" placeholder="ที่" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">ลงวันที่</span>
                                    <input type="date" class="form-control" name="date_cre" placeholder="ลงวันที่" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">จาก</span>
                                    <input type="text" class="form-control" name="from_doc" placeholder="จาก" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">ถึง</span>
                                    <select type="text" class="form-control" name="reciever" placeholder="ถึง" id="reciever" required>
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM users");
                                        while ($row = $sql->fetch_assoc()) {
                                            echo '<option value=" ' . $row['f_name'] . ' ' . $row['l_name'] . ' "> ' . $row['f_name'] . ' ' . $row['l_name'] . ' </option>';
                                        }

                                        ?>
                                    </select>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">เรื่อง</span>
                                    <input type="text" class="form-control" name="title_doc" placeholder="เรื่อง" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">ข้อความ</span>
                                    <input type="text" class="form-control" name="text_doc" placeholder="ข้อความ" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">การปฏิบัติ</span>
                                    <select type="text" class="form-control" name="action_doc" placeholder="การปฏิบัติ" required id="action_doc">
                                        <option value="ตอบกลับ">ตอบกลับ</option>
                                        <option value="ไม่ตอบกลับ">ไม่ตอบกลับ</option>
                                    </select>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">หมายเหตุ</span>
                                    <input type="text" class="form-control" name="notation" placeholder="หมายเหตุ" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">ระดับความเร่งด่วน</span>
                                    <select type="text" class="form-control" name="urgency_doc" placeholder="urgency_doc" required id="urgency_doc">
                                        <option value="ปกติ">ปกติ</option>
                                        <option value="ด่วน">ด่วน</option>
                                        <option value="ด่วนมาก">ด่วนมาก</option>
                                    </select>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">ประเภทเอกสาร</span>
                                    <select type="text" class="form-control" name="type_doc" placeholder="type_doc" required id="type_doc">
                                        <option value="บันทึกข้อความ">บันทึกข้อความ</option>

                                    </select>
                                </div><br>


                        </div><br>

                        <div class="container col-sm-10">
                            <span class="input-group-">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                                <button type="submit" name="submit" class="btn btn-success">สร้างฟอร์มบันทึกข้อความ</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset" name="submit" class="btn btn-success">รีเซ็ตข้อมูล</button>
                                &nbsp;

                            </span>
                        </div>

                    </body>




                    <!-- Today status end -->




                </section>
                <div class="text-right">
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->

                    </div>
                </div>
            </section>
            <!--main content end-->
        </section>
        <!-- container section start -->

        <!-- javascripts -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.10.4.min.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- charts scripts -->
        <script src="assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="js/owl.carousel.js"></script>
        <!-- jQuery full calendar -->
        <<script src="js/fullcalendar.min.js">
            </script>
            <!-- Full Google Calendar - Calendar -->
            <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
            <!--script for this page only-->
            <script src="js/calendar-custom.js"></script>
            <script src="js/jquery.rateit.min.js"></script>
            <!-- custom select -->
            <script src="js/jquery.customSelect.min.js"></script>
            <script src="assets/chart-master/Chart.js"></script>

            <!--custome script for all page-->
            <script src="js/scripts.js"></script>
            <!-- custom script for this page-->
            <script src="js/sparkline-chart.js"></script>
            <script src="js/easy-pie-chart.js"></script>
            <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="js/jquery-jvectormap-world-mill-en.js"></script>
            <script src="js/xcharts.min.js"></script>
            <script src="js/jquery.autosize.min.js"></script>
            <script src="js/jquery.placeholder.min.js"></script>
            <script src="js/gdp-data.js"></script>
            <script src="js/morris.min.js"></script>
            <script src="js/sparklines.js"></script>
            <script src="js/charts.js"></script>
            <script src="js/jquery.slimscroll.min.js"></script>
            <script>
                //knob
                $(function() {
                    $(".knob").knob({
                        'draw': function() {
                            $(this.i).val(this.cv + '%')
                        }
                    })
                });

                //carousel
                $(document).ready(function() {
                    $("#owl-slider").owlCarousel({
                        navigation: true,
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        singleItem: true

                    });
                });

                //custom select box

                $(function() {
                    $('select.styled').customSelect();
                });

                /* ---------- Map ---------- */
                $(function() {
                    $('#map').vectorMap({
                        map: 'world_mill_en',
                        series: {
                            regions: [{
                                values: gdpData,
                                scale: ['#000', '#000'],
                                normalizeFunction: 'polynomial'
                            }]
                        },
                        backgroundColor: '#eef3f7',
                        onLabelShow: function(e, el, code) {
                            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                        }
                    });
                });
            </script>

    </body>

    </html>
<?php } ?>