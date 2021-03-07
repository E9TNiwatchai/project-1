<?php session_start(); ?>
<?php
include 'connection.php';
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

        <title>Creative - Bootstrap Admin Template</title>

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
                                <b class="caret"></b>
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
                                <li><a class="" href="savetext.php">บันทึกข้อความ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="create_savetext.php">
                                <i class="icon_document_alt"></i>
                                <span>สร้างแบบฟอร์ม</span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บันทึกข้อความ</span>
                            </a>

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
                            <h3 class="page-header"><i class="fa fa-laptop"></i>ประวัติส่วนตัว</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">ประวัติส่วนตัว</a></li>
                                <li><i class="fa fa-laptop"></i>ประวัติส่วนตัว</li>
                            </ol>
                        </div>
                    </div>



                    <?php
                    @$d = $_GET['d'];
                    if ($d == 'del') {
                        include('del_form.php');
                    } elseif ($d == 'edit') {
                    }
                    ?>


                    <?php
                    include 'connection.php';
                    $userid = $_SESSION["userid"];

                    $repair = "SELECT * FROM users WHERE user_id='$userid '" or die("Error:" . mysqli_error($conn));

                    $result = mysqli_query($conn, $repair);
                    $row = mysqli_fetch_array($result);

                    extract($row);
                    ?>
                    <div class="container col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i> E-mail</span>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" readonly>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_key_alt"></i> Password</span>
                            <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password" readonly>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_profile"></i> ชื่อ</span>
                            <input type="text" class="form-control" name="f_name" value="<?php echo $f_name; ?>" placeholder="ชื่อ" readonly>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_profile"></i> นามสกุล</span>
                            <input type="text" class="form-control" name="l_name" value="<?php echo $l_name; ?>" placeholder="นามสกุล" readonly>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_profile"> ตำแหน่ง</i></span>
                            <input type="text" class="form-control" name="position" value="<?php echo $position; ?>" placeholder="ตำแหน่ง" readonly>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_phone"></i> เบอร์โทรศัพท์</span>
                            <input type="text" class="form-control" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="เบอร์โทร" readonly>
                        </div><br>
                        <center> <a href='user_edit.php?d=edit&ID=<?= $row[0]; ?>' class='btn btn-danger'>แก้ไข</a></center>
                    </div>




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