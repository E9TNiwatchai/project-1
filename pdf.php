<?php
session_start();
include 'connection.php';
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $repair = "SELECT * FROM document WHERE doc_id = '{$id}'";
    $status = "UPDATE document SET status_doc = 'เปิดอ่านแล้ว' WHERE document.doc_id = '{$id}'";
    $updatestatus = mysqli_query($conn, $status);
}
$result = mysqli_query($conn, $repair);


require_once __DIR__ . '/vendor/autoload.php';


$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        "saraban" => [
            'R' => "THSarabunNew.ttf",
            'B' => "THSarabunNew Bold.ttf",
            'I' => "THSarabunNew Italic.ttf",
            'BI' => "THSarabunNew BoldItalic.ttf",
        ]
    ],
    'default_font' => 'saraban'
]);


ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มเอกสาร</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'saraban', serif;
        }

        img.center {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $row = mysqli_fetch_array($result);
        ?>

        <h1 align="center"><b><?= $row["type_doc"]; ?></b></h1><br>
        <div style="text-align:center">

            </h1>
        </div>
        <br>
        <div class="container">
            <table align="left" width="50%">
                <tr>
                    <th style="font-size: 20px;">เลขที่รับแจ้ง :</th>
                    <th style="font-size: 20px;">วันที่แจ้งซ่อม :</th>
                </tr>
            </table>
            <table align="left" width="50%">
                <tr>

                    <th style="font-size: 20px;">วันที่แจ้งซ่อม :</th>

                </tr>
            </table><br>
        </div>
    </div>






    <?php
    $html = ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("MyReport.pdf");
    ob_end_flush();

    ?>
    <center><a href="MyReport.pdf" class="btn btn-primary">ดาวโหลดฟอร์มเอกสาร (pdf)</a></center>






    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 197px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            text-decoration: none;
            display: block;
            border: none;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    </head>

    <body>





        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>