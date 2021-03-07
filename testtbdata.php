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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" rel="stylesheet">
    <link href="https://code.jquery.com/jquery-3.3.1.js" rel="stylesheet">

    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  </head>

  <body>
    <!-- container section start -->

    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->


      </section>


    </section>




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
    $repair = "SELECT * FROM document WHERE doc_id and type_doc ='เอกสารรับ'" or die("Error:" . mysqli_error($conn));

    $result = mysqli_query($conn, $repair);
    ?>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>ลำดับ</th>
          <th>ที่</th>
          <th>ลงวันที่</th>
          <th>จาก</th>
          <th>ถึง</th>
          <th>เรื่อง</th>
          <th>action</th>
          <th>notation</th>
          <th>urgency_doc</th>
          <th>ประเภทเอกสาร</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
          <th>PDF</th>
          <th>ส่ง</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?= $row["doc_id"]; ?></td>
            <td><?= $row["document_id"]; ?></td>
            <td><?= $row["date_cre"]; ?></td>
            <td><?= $row["from_doc"]; ?></td>
            <td><?= $row["reciever"]; ?></td>
            <td><?= $row["title_doc"]; ?></td>
            <td><?= $row["action_doc"]; ?></td>
            <td><?= $row["notation"]; ?></td>
            <td><?= $row["urgency_doc"]; ?></td>
            <td><?= $row["type_doc"]; ?></td>
            <td><a href='' class='btn btn-danger'>แก้ไข</a></td>
            <td><a href='formin.php?d=del&ID=$row[0]' class='btn btn-danger'>ลบ</a></td>
            <td><a href='pdf.php?d=pdf&ID=$row[0]' class='btn btn-danger'>PDF</a></td>
            <td><a href='sendaction.php?ID=$row[0]' class='btn btn-success'>ส่ง</a></td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

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