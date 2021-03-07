<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
session_start();
if (isset($_POST['email'])) {
  include("connection.php");
  $email = $_POST['email'];
  $password = $_POST['password'];



  $sql = "SELECT * FROM users
                  WHERE  email='" . $email . "'
                  AND  password='" . $password . "' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $_SESSION["userid"] = $row["user_id"];
    $fname = $row["f_name"];
    $lname = $row["l_name"];
    $_SESSION["name"] = $fname . ' ' . $lname;
    $_SESSION["userlevel"] = $row["userlevel"];

    if ($_SESSION["userlevel"] == "admin") {

      Header("Location: page_admin.php");
    }
    if ($_SESSION["userlevel"] == "user") {

      Header("Location: page_user.php");
    }
    if ($_SESSION["userlevel"] == "super user") {

      Header("Location: page_super.php");
    }
  } else {
    echo '0'; ?>
    <script type='text/javascript'>
      Swal.fire({
        icon: 'error',
        title: 'E-mail หรือ รหัสผ่าน ไม่ถูกต้อง',
        text: '',
      }).then(function() {
        window.location.href = "index.php";
      });
    </script> <?php
            }
          } else {

            Header("Location: home.php"); //user & password incorrect back to login again

          }
