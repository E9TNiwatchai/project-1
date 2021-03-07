<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

<?php 


function query_executer($month,$type){
    include "connection.php" ;
    $str_query = "select COUNT(document.doc_id) as COUNT
    from document
    WHERE document.date_cre LIKE '_____".$month."___'  AND document.type_doc LIKE '%".$type."'";
    //$connect=mysqli_connect("localhost","root","","projecti");
    $result = mysqli_query($conn,$str_query);
    $row = mysqli_fetch_array($result);
    return $row['COUNT'];
}

?>

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['เดือน', 'เอกสารรับ', 'เอกสารส่ง','เอกสารSAR'],
      ['มกราคม',  <?php echo query_executer('01','รับ');?>,     <?php  echo query_executer('01','ส่ง');?> ,     <?php  echo query_executer('01','sar');?>],
      ['กุมภาพันธ์',  <?php echo query_executer('02','รับ');?>,     <?php  echo query_executer('02','ส่ง');?> ,     <?php  echo query_executer('02','sar');?>],
      ['มีนาคม',  <?php echo query_executer('03','รับ');?>,     <?php  echo query_executer('03','ส่ง');?> ,     <?php  echo query_executer('03','sar');?>],
      ['เมษายน',  <?php echo query_executer('04','รับ');?>,     <?php  echo query_executer('04','ส่ง');?> ,     <?php  echo query_executer('04','sar');?>],
      ['พฤษภาคม',  <?php echo query_executer('05','รับ');?>,     <?php  echo query_executer('05','ส่ง');?> ,     <?php  echo query_executer('05','sar');?>],
      ['มิถุนายน',  <?php echo query_executer('06','รับ');?>,     <?php  echo query_executer('06','ส่ง');?> ,     <?php  echo query_executer('06','sar');?>],
      ['กรกฏาคม',  <?php echo query_executer('07','รับ');?>,     <?php  echo query_executer('07','ส่ง');?> ,     <?php  echo query_executer('07','sar');?>],
      ['สิงหาคม',  <?php echo query_executer('08','รับ');?>,     <?php  echo query_executer('08','ส่ง');?> ,     <?php  echo query_executer('08','sar');?>],
      ['กันยายน',  <?php echo query_executer('09','รับ');?>,     <?php  echo query_executer('09','ส่ง');?> ,     <?php  echo query_executer('09','sar');?>],
      ['ตุลาคม',  <?php echo query_executer('10','รับ');?>,     <?php  echo query_executer('10','ส่ง');?> ,     <?php  echo query_executer('10','sar');?>],
      ['พฤศจิกายน',  <?php echo query_executer('11','รับ');?>,     <?php  echo query_executer('11','ส่ง');?> ,     <?php  echo query_executer('11','sar');?>],
      ['ธันวาคม',  <?php echo query_executer('12','รับ');?>,     <?php  echo query_executer('12','ส่ง');?> ,     <?php  echo query_executer('12','sar');?>]  
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
