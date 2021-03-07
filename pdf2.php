<?php

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
    <title>ใบแจ้งซ่อมอุปกรณ์</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    
<style>
    body{
        font-family: 'saraban', serif; 
    }
    img.center {
    display: block;
    margin: 0 auto;
}
</style>
</head>
<body>

<form name="fmtest" id="frmtest" method="post" action="MyReport.pdf">

<input type="text" name="nickname" id="nickname" />

<input type="text" name="address" id="address" />



</form>

<?php
    $html=ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("MyReport.pdf");
    ob_end_flush();
    
?>
<center><a href="MyReport.pdf" class="btn btn-primary">โหลดใบแจ้งซ่อม (pdf)</a></center>
 </div>
</body>