<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
session_start();
include("connection.php");
if (isset($_POST['ID'])) {
   $id = $_POST['ID'];
   $getdata = "SELECT * FROM superdocument WHERE doc_id = '{$id}'";
   $result = mysqli_query($conn, $getdata);
   $data = mysqli_fetch_array($result);
   $user_id = $_SESSION["userid"];
   $doc_id = $data["doc_id"];
   $document_id = $data["document_id"];
   $date_cre = $data["date_cre"];
   $from_doc = $data["from_doc"];
   $reciever = $data["reciever"];
   $title_doc = $data["title_doc"];
   $text_doc = $data["text_doc"];
   $action_doc = $data["action_doc"];
   $notation = $data["notation"];
   $path_doc = $data["path_doc"];
   $status_doc = $data["status_doc"];
   $urgency_doc = $data["urgency_doc"];
   $type_doc = $data["type_doc"];
   $insertdata = "INSERT INTO userdocument (doc_id, document_id, date_cre, from_doc, reciever, title_doc, text_doc, action_doc, notation, path_doc, status_doc, urgency_doc, type_doc, dateend)
 VALUES ('$doc_id', '$document_id', '$date_cre', '$from_doc', '$reciever', '$title_doc', '$text_doc', '$action_doc', '$notation', '$path_doc', '$status_doc', '$urgency_doc', '$type_doc', NOW())";
   $queryinsert = mysqli_query($conn, $insertdata);
}
$insertdata2 = "INSERT INTO notification(id, token, token2, text, status, type, time) VALUES ('', '$user_id', 'user3', 'มีเอกสารใหม่เข้า', 'unread', '$type_doc', NOW())";
$queryinsert2 = mysqli_query($conn, $insertdata2);

$text = $_POST['text'];
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
//Server settings
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'sarabantest2@gmail.com';                     // SMTP username
$mail->Password   = '@$uper789';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom('sarabantest2@gmail.com', 'Superuser');
$getmail = $_POST['mail'];
if ($getmail = 'all') {
   $emailquery = "SELECT email FROM users";
   $query = mysqli_query($conn, $emailquery);
   if (mysqli_num_rows($query)) {
      while ($getemail = mysqli_fetch_array($query)) {
         $sendemail = $getemail['email'];
         $mail->addAddress($sendemail);
         $mail->isHTML(true);                                  // Set email format to HTML
         $mail->Subject = 'Document From Super User';
         $mail->Body    = $text;
         $mail->send();
      }
   }
} else {
   $mail->addAddress($getmail);     // Add a recipient
   // Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = 'Document From Super User';
   $mail->Body    = $text;
   $mail->send();
}
if ($mail) {
   echo '0'; ?>
   <script type='text/javascript'>
      Swal.fire({
         icon: 'success',
         title: 'ส่งข้อมูลสำเร็จ',
         text: '',
      }).then(function() {
         window.location.href = "page_super.php";
      });
   </script> <?php
            }
