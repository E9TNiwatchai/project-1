<?php

    $conn = mysqli_connect("localhost","root","","saraban");

    if(!$conn) {
        die("Failed to connect to database" . mysqli_error($conn));
    }

    mysqli_set_charset($conn, "utf8");

?>