<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบแจ้งซ่อมอุปกรณ์</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Sarabun', sans-serif;
    }
    img.center {
    display: block;
    margin: 0 auto;
}
</style>
</head>
<body>
 <div class="container">
    <img class="center" src="img/nsm-2.jpg" height="40px" width="130px">
    <hr width="100%" size="5">
    <h2 align="center"><b>ใบแจ้งซ่อมอุปกรณ์</b></h2><br>
<table align="center" width="50%">
<tr>
    <th style="font-size: 20px;">เลขที่รับแจ้ง :</th>
    <td style="font-size: 20px;"><?=$row["ac_id"]; ?></td>
    <th style="font-size: 20px;">วันที่แจ้งซ่อม :</th>
    <td style="font-size: 20px;"><?=$row["rp_date"]; ?></td>
  </tr>
</table><br>
    <div class="container">
        <div class="row">
<table align="left" width="100%">
<tr>
    <th style="font-size: 20px;"width="5">เรื่อง แจ้งซ่อมอุปกรณ์</th>

  </tr>
  <tr>
    <th style="font-size: 20px;"width="5">รหัสพนักงาน</th>
    <td style="font-size: 20px;" width="5"><?=$row["emp_code"]; ?></td>
  </tr>
  <tr>
    <th style="font-size: 20px;"width="5">ชื่อ-นามสกุล</th>
    <td style="font-size: 20px;" width="5"><?=$row["emp_fristname"]; ?>  <?=$row["emp_lastname"]; ?></td>
  </tr>
  <tr>
    <th style="font-size: 20px;" width="5">ตำแหน่ง</th>
    <td style="font-size: 20px;" width="5"><?=$row["userlevel"]; ?></td>
  </tr>
  <tr>
    <th style="font-size: 20px;">เบอร์โทรศัพท์</th>
    <td style="font-size: 20px;" width="2"><?=$row["emp_tel"]; ?></td>
    <td style="font-size: 20px;" width="30">มีความประสงค์ให้ซ่อมบำรุงตามรายละเอียด ดังนี้</td>
  </tr>
</table><br>
<table align="center" width="100%">
<tr>
    <th style="font-size: 20px;">เลขครุภัณฑ์</th>
    <th style="font-size: 20px;">ชื่ออุปกรณ์</th>
    <th style="font-size: 20px;">ยี่ห้อ</th>
  </tr>
  <tr>
    <td style="font-size: 20px;"><?=$row["ac_id"]; ?></td>
    <td style="font-size: 20px;"><?=$row["ac_name"]; ?></td>
    <td style="font-size: 20px;"><?=$row["ac_brand"]; ?></td>
  </tr><br>
  <tr>
    <th style="font-size: 20px;">รุ่น</th>
    <th style="font-size: 20px;">ประเภท</th>
    <th style="font-size: 20px;">โซน</th>
  </tr>
  <tr>
    <td style="font-size: 20px;"><?=$row["ac_generation"]; ?></td>
    <td style="font-size: 20px;"><?=$row["ac_category"]; ?></td>
    <td style="font-size: 20px;"><?=$row["ac_zone"]; ?></td>
  </tr><br>
  <tr>
    <th style="font-size: 20px;">รายละเอียด</th>
</tr>
<tr>
    <td style="font-size: 20px;"><?=$row["rp_detail"]; ?></td>
</tr>
</table><br>
        </div>
    </div>
<table align="center" width="20%">
    <tr>
        <th style="font-size: 20px;" align="center">ผู้แจ้งซ่อม</th>
  </tr>
  <tr>
        <td style="font-size: 20px;">ลงชื่อ...............................</td>
  </tr>
  <tr>
        <td style="font-size: 20px;">(.......................................)</td>
  </tr>
  <tr>
        <th style="font-size: 20px;" align="center">ผู้รับแจ้งซ่อม</th>
  </tr>
  <tr>
        <td style="font-size: 20px;">ลงชื่อ...............................</td>
  </tr>
  <tr>
        <td style="font-size: 20px;">(.......................................)</td>
  </tr>
  <tr>
        <th style="font-size: 20px;" align="center">ผู้ตรวจสอบ</th>
  </tr>
  <tr>
        <td style="font-size: 20px;">ลงชื่อ...............................</td>
  </tr>
  <tr>
        <td style="font-size: 20px;">(.......................................)</td>
  </tr>
</table><br><br>
<?php
    $html=ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("MyReport.pdf");
    ob_end_flush();
?>
<center><a href="MyReport.pdf" class="btn btn-primary">โหลดใบแจ้งซ่อม (pdf)</a></center>
 </div>
</body>