<?php session_start(); ?>
<?php

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
                                <?php if ($_SESSION["userlevel"] == "super user") { ?>
                                    <span class="profile-ava">
                                        <?php echo $_SESSION["name"]; ?>
                                    </span>
                                <?php  } ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> ประวัติส่วนตัว</a>
                                </li>

                                <li>
                                    <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                                </li>

                            </ul>

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
                            <a class="" href="page_super.php">
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
                                <li><a class="" href="formin_s.php">เอกสารรับ</a></li>
                                <li><a class="" href="formrecieve_s.php">เอกสารส่ง</a></li>
                                <li><a class="" href="formsar_s.php">เอกสารSAR</a></li>
                                <li><a class="" href="savetext_s.php">บันทึกข้อความ</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_desktop"></i>
                                <span>ดูสถานะเอกสาร</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="status_in_s.php">เอกสารรับ</a></li>
                                <li><a class="" href="status_recieve_s.php">เอกสารส่ง</a></li>
                                <li><a class="" href="status_sar_s.php">เอกสารSAR</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_piechart"></i>
                                <span>รายงานสรุป</span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนเอกสาร</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="chardbar2.php">แบบกราฟแท่ง</a></li>
                                <li><a class="" href="chardline2.php">แบบกราฟเส้น</a></li>
                            </ul>
                        </li>


                    </ul>
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
                            <h3 class="page-header"><i class="icon_document_alt"></i>รายงานสรุปจำนวนเอกสาร</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="formin.php">รายงานสรุปจำนวนเอกสาร</a></li>
                                <li><i class="fa fa-laptop"></i>กราฟแบบแท่ง</li>
                            </ol>
                        </div>
                    </div>



                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Document</title>
                    </head>

                    <body>


                        <div id="chart_div"></div>
                        </div>

                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        <script type="text/javascript">
                            <?php


                            function query_executer($month, $type)
                            {
                                include "connection.php";
                                $str_query = "select COUNT(document.doc_id) as COUNT
    from document
    WHERE document.date_cre LIKE '_____" . $month . "___'  AND document.type_doc LIKE '%" . $type . "'";
                                //$connect=mysqli_connect("localhost","root","","projecti");
                                $result = mysqli_query($conn, $str_query);
                                $row = mysqli_fetch_array($result);
                                return $row['COUNT'];
                            }

                            ?>
                            google.load("visualization", "1", {
                                packages: ["corechart"]
                            });
                            google.setOnLoadCallback(drawChart);

                            function drawChart() {
                                // สร้างตัวแปร array เก็บค่า ข้อมูล
                                var dataArray1 = [
                                    ['เดือน', 'เอกสารรับ', 'เอกสารส่ง', 'เอกสารSAR'],
                                    ['มกราคม', <?php echo query_executer('01', 'รับ'); ?>, <?php echo query_executer('01', 'ส่ง'); ?>, <?php echo query_executer('01', 'sar'); ?>],
                                    ['กุมภาพันธ์', <?php echo query_executer('02', 'รับ'); ?>, <?php echo query_executer('02', 'ส่ง'); ?>, <?php echo query_executer('02', 'sar'); ?>],
                                    ['มีนาคม', <?php echo query_executer('03', 'รับ'); ?>, <?php echo query_executer('03', 'ส่ง'); ?>, <?php echo query_executer('03', 'sar'); ?>],
                                    ['เมษายน', <?php echo query_executer('04', 'รับ'); ?>, <?php echo query_executer('04', 'ส่ง'); ?>, <?php echo query_executer('04', 'sar'); ?>],
                                    ['พฤษภาคม', <?php echo query_executer('05', 'รับ'); ?>, <?php echo query_executer('05', 'ส่ง'); ?>, <?php echo query_executer('05', 'sar'); ?>],
                                    ['มิถุนายน', <?php echo query_executer('06', 'รับ'); ?>, <?php echo query_executer('06', 'ส่ง'); ?>, <?php echo query_executer('06', 'sar'); ?>],
                                    ['กรกฏาคม', <?php echo query_executer('07', 'รับ'); ?>, <?php echo query_executer('07', 'ส่ง'); ?>, <?php echo query_executer('07', 'sar'); ?>],
                                    ['สิงหาคม', <?php echo query_executer('08', 'รับ'); ?>, <?php echo query_executer('08', 'ส่ง'); ?>, <?php echo query_executer('08', 'sar'); ?>],
                                    ['กันยายน', <?php echo query_executer('09', 'รับ'); ?>, <?php echo query_executer('09', 'ส่ง'); ?>, <?php echo query_executer('09', 'sar'); ?>],
                                    ['ตุลาคม', <?php echo query_executer('10', 'รับ'); ?>, <?php echo query_executer('10', 'ส่ง'); ?>, <?php echo query_executer('10', 'sar'); ?>],
                                    ['พฤศจิกายน', <?php echo query_executer('11', 'รับ'); ?>, <?php echo query_executer('11', 'ส่ง'); ?>, <?php echo query_executer('11', 'sar'); ?>],
                                    ['ธันวาคม', <?php echo query_executer('12', 'รับ'); ?>, <?php echo query_executer('12', 'ส่ง'); ?>, <?php echo query_executer('12', 'sar'); ?>]
                                ];

                                // แปลงข้อมูลจาก array สำหรับใช้ในการสร้าง กราฟ
                                var data = google.visualization.arrayToDataTable(dataArray1);

                                // ตั้งค่าต่างๆ ของกราฟ เพิ่มเติม https://developers.google.com/chart/interactive/docs/gallery/columnchart
                                var options = {
                                    title: "รายงานสรุปจำนวนเอกสาร",
                                    hAxis: {
                                        title: 'เดือน',
                                        titleTextStyle: {
                                            color: 'red'
                                        }
                                    },
                                    vAxis: {
                                        title: 'จำนวนการสร้างเอกสาร',
                                        titleTextStyle: {
                                            color: 'blue'
                                        }
                                    },
                                    width: 1300,
                                    height: 500,
                                    bar: {
                                        groupWidth: "80%"
                                    },
                                    legend: {
                                        position: 'right',
                                        maxLines: 3
                                    },
                                    tooltip: {
                                        trigger: 'select'
                                    }
                                };

                                // สร้างกราฟแนวตั้ง แสดงใน div id = chart_div
                                var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                                chart.draw(data, options); // สร้างกราฟ

                            }
                        </script>
                    </body>

                    </html>



                    </table>


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
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>

    </body>

    </html>
<?php } ?>