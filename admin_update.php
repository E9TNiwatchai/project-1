<link rel="stylesheet" href="dist\sweetalert2.min.css">
<script src="dist\sweetalert2.min.js"></script>
<?php
//1. เชื่อมต่อ database:
include('connection.php');

$user = $_POST["user_id"];
$email = $_POST["email"];
$password = $_POST["password"];
$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$position = $_POST["position"];
$phonenumber = $_POST["phonenumber"];
$userlevel = $_POST["userlevel"];


$sql = "UPDATE users SET email='$email',password='$password',
f_name='$f_name',l_name='$l_name',position='$position',phonenumber='$phonenumber',userlevel='$userlevel' WHERE user_id='$user'";



$result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error());

if ($result) {
	echo '1';
?> <script>
		Swal.fire({

			icon: 'success',
			title: 'แก้ไขข้อมูลสำเร็จ..!',
			showConfirmButton: false,
			timer: 2500
		}).then((result) => {
			if (result) {
				window.location.replace("leveluser.php");
			}
		});
	</script><?php
			} else {
				?> <script>
		Swal.fire({
			icon: 'error',
			title: 'แก้ไขข้อมูลไม่สำเร็จ..!',
			showConfirmButton: false,
			timer: 2500
		}).then((result) => {
			if (result) {
				window.location.replace("leveluser.php");
			}
		});
	</script><?php
			}
				?>