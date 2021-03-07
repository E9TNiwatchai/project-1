<link rel="stylesheet" href="dist\sweetalert2.min.css">
<script src="dist\sweetalert2.min.js"></script>
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
$sql = "INSERT INTO document (doc_id,document_id, date_cre, from_doc, reciever,
    title_doc,text_doc, action_doc, notation, path_doc, urgency_doc, type_doc, status_doc)
			 VALUES ('','$document_id', '$date_cre', '$from_doc', '$reciever', '$title_doc','$text_doc',
			  '$action_doc', '$notation', '" . $_FILES["path_doc"]["name"] . "', '$urgency_doc', '$type_doc', 'ยังไม่เปิดอ่าน')";
if (move_uploaded_file($_FILES["path_doc"]["tmp_name"], "myfile/" . $_FILES["path_doc"]["name"])) {
	$str = "INSERT INTO document
	(path_doc) VALUES ('" . $_FILES["path_doc"]["name"] . "')";
	$result1 = mysqli_query($conn, $str);

	$result2 = mysqli_query($conn, $sql);
}
//ปิดการเชื่อมต่อ database

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม


if ($result2) {
	echo '1';
?> <script>
		Swal.fire({

			icon: 'success',
			title: 'สร้างข้อมูลสำเร็จ..!',
			showConfirmButton: false,
			timer: 2500
		}).then((result) => {
			if (result) {
				window.location.replace("page_admin.php");
			}
		});
	</script><?php
			} else {
				?> <script>
		Swal.fire({
			icon: 'error',
			title: 'สร้างข้อมูลไม่สำเร็จ..!',
			showConfirmButton: false,
			timer: 2500
		}).then((result) => {
			if (result) {
				window.location.replace("page_admin.php");
			}
		});
	</script><?php
			}
				?>