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
                <?php if ($_SESSION["userlevel"] == "admin") { ?>
                  <span class="profile-ava">
                    <?php echo $_SESSION["name"]; ?>
                  </span>
                <?php  } ?>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="editadmin.php"><i class="icon_profile"></i> ประวัติส่วนตัว</a>
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
              <a class="" href="page_admin.php">
                <i class="icon_house_alt"></i>
                <span>หน้าหลัก</span>
              </a>
            </li>
            <li>
              <a class="" href="create_form.php">
                <i class="icon_document_alt"></i>
                <span>สร้างฟอร์มเอกสาร</span>

              </a>

            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>เอกสาร</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="formin.php">เอกสารรับ</a></li>
                <li><a class="" href="formrecieve.php">เอกสารส่ง</a></li>
                <li><a class="" href="formsar.php">เอกสารSAR</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_desktop"></i>
                <span>ดูสถานะเอกสาร</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="status_in.php">เอกสารรับ</a></li>
                <li><a class="" href="status_recieve.php">เอกสารส่ง</a></li>
                <li><a class="" href="status_sar.php">เอกสารSAR</a></li>
              </ul>
            </li>
            <li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_piechart"></i>
                <span>รายงานสรุป</span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนเอกสาร</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="chardbar.php">แบบกราฟแท่ง</a></li>
                <li><a class="" href="chardline.php">แบบกราฟเส้น</a></li>
              </ul>
            </li>



            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_table"></i>
                <span>จัดการข้อมูลผู้ใช้</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="leveluser.php">กำหนดสิทธิ์ผู้ใช้งาน</a></li>
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
              <h3 class="page-header"><i class="icon_document_alt"></i>หน้าหลัก</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="formin.php">หน้าหลัก</a></li>
                <li><i class="fa fa-laptop"></i>ประชาสัมพันธ์</li>
              </ol>
            </div>
          </div>









          <!--/col-->
          <?php
          @$d = $_GET['d'];
          if ($d == 'del') {
            include('del_form.php');
          } elseif ($d == 'edit') {
          }

          ?>

          <?php
          include 'connection.php';
          $repair = "SELECT * FROM document WHERE doc_id and reciever ='ทุกคน'" or die("Error:" . mysqli_error($conn));
          $strSQL = "SELECT * FROM document";
          $result = mysqli_query($conn, $strSQL) or die("Error Query [" . $strSQL . "]");
          $result = mysqli_query($conn, $repair);
          ?>

          <h1>ประชาสัมพันธ์</h1>
          <p style="color:blue">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspเนื่องด้วยมาตรการและการเฝ้าระวังการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) คณะวิศวกรรมศาสตร์จึงเห็นสมควรไม่อนุญาตให้นักศึกษาออกฝึกประสบการณ์วิชาชีพ (ฝึกงาน / สหกิจศึกษา) ภาคการศึกษาฤดูร้อน 3/2562 และภาคการศึกษาที่ 1/2563 ทุกกรณี แต่ให้นักศึกษาลงทะเบียนในรายวิชาฝึกประสบการณ์วิชาชีพ (ฝึกงาน / สหกิจศึกษา) ได้ตามปกติ สำหรับการฝึกงานเทอม 3/2562 นี้อาจารย์ประจำภาควิชาวิศวกรรมคอมพิวเตอร์จะดำเนินการฝึกงานให้กับนักศึกษา ซึ่งนักศึกษาต้องทำปฏิบัติตามดังนี้

            *ขอให้นักศึกษากลุ่ม 61346CPE กลุ่ม 61446CPE และกลุ่ม ตกค้าง (รายชื่อตามไฟล์แนบ ) ให้เข้าระบบของ Microsoft Teams โดยสอบถามวิธีการเข้าระบบจากอาจารย์ที่ปรึกษาแต่ละกลุ่ม และเมื่อเข้าระบบแล้ว อาจารย์จะจัดการและอธิบายการฝึกงานรูปแบบออนไลน์ สำหรับเทอม 3/2562 ให้กับนักศึกษาทุกคนต่อไป
          </p>
          <br>
          <br>
          <br>
          <table id="example" class="table table-striped table-bordered" style="width:100%">

            <thead>

              <tr>
                <th>ลำดับ</th>
                <th>ที่</th>
                <th>ลงวันที่</th>
                <th>จาก</th>
                <th>ถึง</th>
                <th>เรื่อง</th>
                <th>การปฏิบัติ</th>
                <th>หมายเหตุ</th>
                <th>ระดับความเร่งด่วน</th>
                <th>ประเภทเอกสาร</th>
                <th>ไฟล์ที่แนบมา</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
                <th>PDF</th>
                <th>ส่ง</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              while ($row = mysqli_fetch_array($result)) {
                $k = $i++;
              ?>
                <tr>
                  <td><?php echo $k; ?></td>
                  <td><?= $row["document_id"]; ?></td>
                  <td><?= $row["date_cre"]; ?></td>
                  <td><?= $row["from_doc"]; ?></td>
                  <td><?= $row["reciever"]; ?></td>
                  <td><?= $row["title_doc"]; ?></td>
                  <td><?= $row["action_doc"]; ?></td>
                  <td><?= $row["notation"]; ?></td>
                  <td><?= $row["urgency_doc"]; ?></td>
                  <td><?= $row["type_doc"]; ?></td>
                  <td>
                    <center><a href="myfile/<?php echo $row["path_doc"]; ?>"><?php echo $row["path_doc"]; ?></a></center>
                  </td>
                  <td><a href='formin_edit.php?d=edit&ID=<?= $row[0]; ?>' class='btn btn-danger'>แก้ไข</a></td>
                  <td><a href='formin.php?d=del&ID=<?= $row[0]; ?>' class='btn btn-danger'>ลบ</a></td>
                  <td><a href='pdfform.php?d=pdf&ID=<?= $row[0]; ?>' class='btn btn-danger'>PDF</a></td>
                  <td><a href="sendaction.php?ID=<?= $row[0]; ?>&user=<?php echo $_SESSION["userid"]; ?>" class='btn btn-success'>ส่ง</a></td>

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
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
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