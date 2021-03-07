<?php

include('connection.php');

$document_id = $_POST['document_id'];
$date_cre = $_POST['date_cre'];
$from_doc = $_POST['from_doc'];
$reciever = $_POST['reciever'];
$title_doc = $_POST['title_doc'];
$text_doc = $_POST['text_doc'];
$action_doc = $_POST['action_doc'];
$notation = $_POST['notation'];
$urgency_doc = $_POST['urgency_doc'];
$type_doc = $_POST['type_doc'];





$sql = "INSERT INTO savedocument (doc_id,document_id, date_cre, from_doc, reciever,title_doc, text_doc, action_doc, notation, urgency_doc, type_doc, status_doc)
	    VALUES ('','$document_id', '$date_cre', '$from_doc', '$reciever', '$title_doc',
			  '$text_doc', '$action_doc', '$notation', '$urgency_doc', '$type_doc', 'ยังไม่เปิดอ่าน')";


$result = mysqli_query($conn, $sql);

var_dump($result);
//ปิดการเชื่อมต่อ database

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลเรียบร้อย');";
    echo "window.location = 'page_user.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";

    echo "</script>";
}
