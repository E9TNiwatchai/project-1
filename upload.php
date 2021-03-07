<?php
include('connection.php');
if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "myfile/" . $_FILES["filUpload"]["name"])) {
    echo "Copy/Upload Complete<br>";


    $strSQL = "INSERT INTO document ";
    $strSQL .= "(FilesName) VALUES ('" . $_FILES["filUpload"]["name"] . "')";
    $objQuery = mysql_query($strSQL);
}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>

</html>