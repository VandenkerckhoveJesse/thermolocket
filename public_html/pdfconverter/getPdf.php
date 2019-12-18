<?php


use setasign\Fpdi\Fpdi;
require "../fpd/fpdf/fpdf181/fpdf.php";
//require "../fpd/fpdf/fpdf181/fpdf.php";
require "../fpd/fpdi/autoload.php";



$pdf = new Fpdi();
$pdf->AddPage();
$pdf->SetFont('Arial');

$strCity = "diksmuide";

$strPdfTemplate = "../ftp/pdf/blanco.pdf";

//-- Check if specific template exists, if so: use it
if(file_exists("../ftp/pdf/" . $strCity . ".pdf")) {
	$strPdfTemplate = "../ftp/pdf/" . $strCity . ".pdf";
}

$pdf->setSourceFile($strPdfTemplate);
$pdfTpl = $pdf->importPage(1);
$pdf->useTemplate($pdfTpl);


$strImage = "../ftp/fotos/" . "Poperinge" . "/" . "proven" . "/" . "left" . "/" . "023047" . ".jpg";


$pdfImage = $pdf->Image($strImage, 25.5, 90, 145);

$pdf->AddPage();
$pdf->Output();
class myPDF extends FPDF{
	function header(){
	$this->Image("../ftp/fotos/header.JPG");
	}
	function footer(){
	$this->SetY(-30);
	$this->Image("../ftp/fotos/Footer.JPG");
	}
}
$pd = new myPDF();
$pd->Addpage();
$pd->Cell(200,10, "PersoonID: " );

$pd->Output();








