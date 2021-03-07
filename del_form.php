<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


  <?php
  //1. เชื่อมต่อ database:
  include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล

  $doc_id = $_REQUEST["ID"];
  //ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

  $sql = "DELETE FROM document WHERE doc_id='$doc_id' ";
  $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($sql));

  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  ?>

  <script type='text/javascript'>
    Swal.fire({
      icon: 'success',
      title: 'ลบข้อมูลสำเร็จ',
      text: '',
    }).then(function() {
      window.location.href = "formin.php";
    });
  </script>