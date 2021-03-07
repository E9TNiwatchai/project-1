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
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'month');
      data.addColumn('number', 'เอกสารรับ');
      data.addColumn('number', 'เอกสารส่ง');
      data.addColumn('number', 'เอกสารSAR');

      data.addRows([
        [1,  <?php echo query_executer('01','รับ');?>, <?php  echo query_executer('01','ส่ง');?>, <?php  echo query_executer('01','sar');?>],
        [2,  <?php echo query_executer('02','รับ');?>,     <?php  echo query_executer('02','ส่ง');?> ,     <?php  echo query_executer('02','sar');?>],
        [3,  <?php echo query_executer('03','รับ');?>,     <?php  echo query_executer('03','ส่ง');?> ,     <?php  echo query_executer('03','sar');?>],
        [4,  <?php echo query_executer('04','รับ');?>,     <?php  echo query_executer('04','ส่ง');?> ,     <?php  echo query_executer('04','sar');?>],
        [5,  <?php echo query_executer('05','รับ');?>,     <?php  echo query_executer('05','ส่ง');?> ,     <?php  echo query_executer('05','sar');?>],
        [6,  <?php echo query_executer('06','รับ');?>,     <?php  echo query_executer('06','ส่ง');?> ,     <?php  echo query_executer('06','sar');?>],
        [7,  <?php echo query_executer('07','รับ');?>,     <?php  echo query_executer('07','ส่ง');?> ,     <?php  echo query_executer('07','sar');?>],
        [8,  <?php echo query_executer('08','รับ');?>,     <?php  echo query_executer('08','ส่ง');?> ,     <?php  echo query_executer('08','sar');?>],
        [9,  <?php echo query_executer('09','รับ');?>,     <?php  echo query_executer('09','ส่ง');?> ,     <?php  echo query_executer('09','sar');?>],
        [10, <?php echo query_executer('10','รับ');?>,     <?php  echo query_executer('10','ส่ง');?> ,     <?php  echo query_executer('10','sar');?>],
        [11, <?php echo query_executer('11','รับ');?>,     <?php  echo query_executer('11','ส่ง');?> ,     <?php  echo query_executer('11','sar');?>],
        [12, <?php echo query_executer('12','รับ');?>,     <?php  echo query_executer('12','ส่ง');?> ,     <?php  echo query_executer('12','sar');?>]
      ]);

      var options = {
        chart: {
          title: 'รายงานสรุปจำนวนเอกสาร',
          subtitle: 'แบบกราฟเส้น'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>
