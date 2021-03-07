<link rel="stylesheet" href="dist\sweetalert2.min.css">
<script src="dist\sweetalert2.min.js"></script>
<?php
include('connection.php');

$doc_id = $_POST['doc_id'];
$document_id = $_POST['document_id'];
$date_cre = $_POST['date_cre'];
$from_doc = $_POST['from_doc'];
$reciever = $_POST['reciever'];
$title_doc = $_POST['title_doc'];
$action_doc = $_POST['action_doc'];
$notation = $_POST['notation'];
$urgency_doc = $_POST['urgency_doc'];
$type_doc = $_POST['type_doc'];


$sql = "UPDATE superdocument SET  document_id='$document_id',date_cre='$date_cre', from_doc='$from_doc', reciever='$reciever',
title_doc='$title_doc', action_doc='$action_doc', notation='$notation',   urgency_doc='$urgency_doc',
type_doc='$type_doc' WHERE doc_id='$doc_id'";



$result = mysqli_query($conn, $sql);






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
                window.location.replace("formin_s.php");
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
                window.location.replace("page_super.php");
            }
        });
    </script><?php
            }
                ?>