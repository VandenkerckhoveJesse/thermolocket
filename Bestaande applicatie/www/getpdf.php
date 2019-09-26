<?php
use setasign\Fpdi\Fpdi;

include "../php/config.php";

//-- Init
$strCity = $_GET["city"];
$strSubCity = $_GET["subcity"];
$strSide = $_GET["side"];
$strId = $_GET["id"];

//-- Get necessary objects
require_once("../php/fpdf/fpdf.php");
require_once("../php/fpdi/autoload.php");

//-- Init pdf
$pdf = new Fpdi();
$pdf->AddPage();
$pdf->SetFont('Arial');

//-- Determine template to be used
//-- Init with default template
$strPdfTemplate = "../ftp/pdf/blanco.pdf";

//-- Check if specific template exists, if so: use it
if(file_exists("../ftp/pdf/" . $strCity . ".pdf")) {
	$strPdfTemplate = "../ftp/pdf/" . $strCity . ".pdf";
}

//-- Initialize the pdf from the template
$pdf->setSourceFile($strPdfTemplate);
$pdfTpl = $pdf->importPage(1);
$pdf->useTemplate($pdfTpl);

//-- Get the image to be added
$strImage = "../ftp/fotos/" . $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strId . ".jpg";

//-- Add the image
$pdfImage = $pdf->Image($strImage, 25.5, 90, 145);

//-- Output the pdf
$pdf->Output();