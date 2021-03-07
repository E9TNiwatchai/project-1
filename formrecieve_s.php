<?php session_start(); ?>
<?php
include 'connection.php';
$noid = "SELECT * FROM notification WHERE type = 'เอกสารส่ง' and status = 'unread' and token2 = 'user2'";
$resultnoid = mysqli_query($conn, $noid);
$getrow = mysqli_fetch_array($resultnoid);

if ($getrow) {
    $update = "UPDATE notification SET status = 'read' WHERE notification.id = '$getrow[0]'";
    $result = mysqli_query($conn, $update);
}

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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">


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
                            <h3 class="page-header"><i class="icon_document_alt"></i>เอกสาร</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="formin.php">เอกสาร</a></li>
                                <li><i class="fa fa-laptop"></i>เอกสารส่ง</li>
                            </ol>
                        </div>
                    </div>









                    <!--/col-->
                    <?php
                    @$d = $_GET['d'];
                    if ($d == 'del') {
                        include('del_form_s.php');
                    } elseif ($d == 'edit') {
                    } elseif ($d == 'pdf') {
                        include('pdf.php');
                    }

                    ?>

                    <?php
                    include 'connection.php';
                    $repair = "SELECT * FROM superdocument WHERE doc_id and type_doc ='เอกสารส่ง' " or die("Error:" . mysqli_error($conn));



                    $result = mysqli_query($conn, $repair);
                    ?>



                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    <center>ลำดับ</center>
                                </th>
                                <th>
                                    <center>ที่</center>
                                </th>
                                <th>
                                    <center>ลงวันที่</center>
                                </th>
                                <th>
                                    <center>จาก</center>
                                </th>
                                <th>
                                    <center>ถึง</center>
                                </th>
                                <th>
                                    <center>เรื่อง</center>
                                </th>
                                <th>
                                    <center>การปฏิบัติ</center>
                                </th>
                                <th>
                                    <center>หมายเหตุ</center>
                                </th>
                                <th>
                                    <center>ระดับความเร่งด่วน</center>
                                </th>
                                <th>
                                    <center>ประเภทเอกสาร</center>
                                </th>
                                <th>
                                    <center>เกี่ยวข้องกับSAR</center>
                                </th>
                                <th>
                                    <center>ไฟล์ที่แนบมา</center>
                                </th>
                                <th>
                                    <center>แก้ไข</center>
                                </th>
                                <th>
                                    <center>ลบ</center>
                                </th>
                                <th>
                                    <center>PDF</center>
                                </th>
                                <th>
                                    <center>ส่ง</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                $k = $i++;
                            ?>
                                <tr>
                                    <td>
                                        <center><?php echo $k; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["document_id"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["date_cre"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["from_doc"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["reciever"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["title_doc"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["action_doc"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["notation"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["urgency_doc"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["type_doc"]; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row["About"]; ?></center>
                                    </td>
                                    <td>
                                        <center><a href="myfile/<?php echo $row["path_doc"]; ?>"><?php echo $row["path_doc"]; ?></a></center>
                                    </td>
                                    <td>
                                        <center><a href='formrecieve_edit.php?d=del&ID=<?= $row[0]; ?>' class='btn btn-warning'>แก้ไข</a></center>
                                    </td>
                                    <td>
                                        <center><a href='formin_s.php?d=del&ID=<?= $row[0]; ?>' class='btn btn-danger'>ลบ</a></center>
                                    </td>
                                    <td>
                                        <center><a href='pdfform.php?d=pdf&ID=<?= $row[0]; ?>' class='btn btn-danger'>PDF</a></center>
                                    </td>
                                    <td>
                                        <center><a href='sendform.php?ID=<?= $row[0]; ?>' class='btn btn-primary'>ส่ง</a></center>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
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
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
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
                    $('#example').DataTable();
                });
            </script>

    </body>

    </html>
<?php } ?>