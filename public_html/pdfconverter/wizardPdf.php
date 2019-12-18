<?php
use setasign\Fpdi\Fpdi;
require "../fpd/fpdf/fpdf181/fpdf.php";
//require "../fpd/fpdf/fpdf181/fpdf.php";
require "../fpd/fpdi/autoload.php";
$db = new PDO('mysql:host=localhost;dbname=thermoloket', 'root','');

class myPDF extends FPDF{
function header(){
$this->Image("../ftp/fotos/header.JPG");
}
function footer(){
$this->SetY(-30);
$this->Image("../ftp/fotos/Footer.JPG");
}
function getContactInformation($db){
    $this->SetFont('Arial','B', 18);
    $this->Text(10, 54, 'Contact Informatie');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 67, 'Naam');
    $this->SetFont('Arial', '', 14);
    $this->SetFillColor(243, 243, 243);
    $this->Rect(70,60,50,10, 'F');
    $this->Rect(122,60,50,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 87, 'Email');
    $this->SetFont('Arial', '', 14);
    $this->Rect(70,80,122,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 107, 'Telefoon');
    $this->SetFont('Arial', '', 14);
    $this->Rect(70,100,122,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 127, 'Locatie');
    $this->SetFont('Arial', '', 14);
    $this->Rect(70,120,122,10, 'F');
    $this->Rect(70,140,60,10, 'F');
    $this->Rect(132,140,60,10, 'F');
    $this->Rect(70,160,60,10, 'F');
    $this->Rect(132,160,60,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 187, 'Woning verwarmd');
    $this->SetFont('Arial', '', 14);
    $this->Rect(70,180,60,10, 'F');
    $stmt = $db->query('select * from personen where persoon_id = 1');
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Text(73,67, $data->voornaam);
        $this->Text(125,67, $data->familienaam);
        $this->Text(73,87, $data->email);
        $this->Text(73,107, $data->telefoon);
        $this->Text(73,127, $data->voornaam);
        $this->Text(73,147, $data->voornaam);
        $this->Text(135,147, $data->voornaam);
        $this->Text(73,167, $data->voornaam);
        $this->Text(135,167, $data->voornaam);
        $this->Text(73,187, $data->voornaam);
    }
}
function getGevel($db){
    $this->SetFont('Arial','B', 18);
    $this->Text(10, 54, 'Gevel');
    $this->Line(10, 56, 200, 56);
    $this->Ln(10);
    $stmt = $db->query('select * from personen');
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(100, 10, $data->email);
        $this->Ln();
    }
}
function getOpeningen($db){
    $this->SetFont('Arial','B', 18);
    $this->Text(10, 54, 'Openingen');
    $this->Line(10, 56, 200, 56);
    $this->Ln(10);
    $stmt = $db->query('select persoon_id from personen');
    
    foreach ($stmt as $row){
        $this->Cell(10,10, $row['persoon_id']);
        $this->Ln();
        $stmt1 = $db->query('select * from personen');
        foreach ($stmt1 as $row){
            $this->Cell(20,10, $row['email']);
            $this->Ln();
        }
        $this->Ln();
    }    
}
function getDak($db){
    $this->SetFont('Arial','B', 18);
    $this->Cell(10, 54, 'Dak');
    $this->Line(10, 56, 200, 56);
    $this->Ln(10);
    $stmt = $db->query('select * from personen');
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(100, 10, $data->email);
        $this->Ln();
    }
}
}
$pdf = new mypDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->getContactInformation($db);
$pdf->AddPage();
$pdf->getGevel($db);
$pdf->AddPage();
$pdf->getOpeningen($db);
$pdf->getDak($db);
$pdf->Output();





