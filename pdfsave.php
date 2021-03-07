<?php
session_start();
include 'connection.php';
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $repair = "SELECT * FROM savedocument WHERE doc_id = '{$id}'";
}
$result = mysqli_query($conn, $repair);
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'defualt_font_size' => 16,
    'default_font' => 'saraban'
]);
$row = mysqli_fetch_array($result);
$html .= '<div style="padding-top:110px;text-align:center;font-size:30px"><b>' .  $row["type_doc"]; ?>. '</b>
</div>'
<?php
$html .= '<div style="padding-top:60px;padding-left:80px;text-align:left;font-size:20px">' . $row["document_id"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:-33px;padding-left:475px;text-align:left;font-size:20px">' . $row["date_cre"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:16px;padding-left:-460px;text-align:left;font-size:20px">' . $row["from_doc"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:13px;padding-left:0px;text-align:left;font-size:20px">' . $row["reciever"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:8px;padding-left:0px;text-align:left;font-size:20px">' . $row["title_doc"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:40px;padding-left:0px;text-align:left;font-size:20px">' . $row["text_doc"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:120px;padding-left:35px;text-align:left;font-size:20px">' . $row["action_doc"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:40px;padding-left:5px;text-align:left;font-size:20px">' . $row["notation"]; ?>. '</div>'
<?php
$html .= '<div style="padding-top:185px;padding-left:365px;text-align:left;font-size:20px">' . $row["reciever"]; ?>. '</div>'
<?php


$mpdf->SetImportUse();
$mpdf->SetDocTemplate('savepdf.pdf', true);
$row = mysqli_fetch_array($result);

// Do not add page until doc template set, as it is inserted at the start of each page
$mpdf->AddPage();


$mpdf->WriteHTML($html);

// Subsequent pages from logoheader.pdf will be inserted on all subsequent pages


$mpdf->Output();
