<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
include("connection.php");



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
$mail->Username   = 'sarabantest3@gmail.com';                     // SMTP username
$mail->Password   = 'u$err789';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom('sarabantest3@gmail.com', 'user');
$mail->addAddress('sarabantest2@gmail.com');     // Add a recipient
// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Form user to super user';
$mail->Body    = $text;
$mail->send();

if ($mail) {
    echo '0'; ?>
    <script type='text/javascript'>
        Swal.fire({
            icon: 'success',
            title: 'ส่งข้อมูลสำเร็จ',
            text: '',
        }).then(function() {
            window.location.href = "page_user.php";
        });
    </script> <?php
            }
