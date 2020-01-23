<?php
use setasign\Fpdi\Fpdi;
require "fpd/fpdf/fpdf181/fpdf.php";
//require "../fpd/fpdf/fpdf181/fpdf.php";
require "fpd/fpdi/autoload.php";
function createPDF($dossier) {
    $pdf = new mypDF($dossier);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    //$pdf->getHeadImage();
    //$pdf->AddPage();
    $pdf->getContactInformation();
    $pdf->AddPage();
    $pdf->getGevel();
    $pdf->getOpeningen();
    $pdf->getMuren();
    $pdf->getDak();
    $pdf->getEnergiebronnen();
    //$pdf->getImages();
    $pdf->Output();

/*
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
*/
}
class myPDF extends FPDF
{

    private $dossier;

    function __construct($dossier ,$orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        $this->dossier = $dossier;
        parent::__construct($orientation, $unit, $size);
    }

    function header()
    {
        $gemeente = $this->dossier->getWoning()->getAdres()->getGemeente()->getNaam();
        $this->SetX(20);
        $this->Image("ftp/fotos/" . strtolower($gemeente) . ".JPG");
        $this->SetX(10);

    }

    function footer()
    {
        $this->SetY(-30);
        $this->Image("ftp/fotos/Footer.JPG");

    }

    function getContactInformation()
    {
        $this->SetFont('Arial', 'B', 18);
        $this->Text(10, 54, 'Contact Informatie');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 67, 'Naam');
        $this->SetFont('Arial', '', 14);
        $this->SetFillColor(243, 243, 243);
        $this->Rect(70, 60, 50, 10, 'F');
        $this->Rect(122, 60, 50, 10, 'F');
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 87, 'Email');
        $this->SetFont('Arial', '', 14);
        $this->Rect(70, 80, 122, 10, 'F');
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 107, 'Telefoon');
        $this->SetFont('Arial', '', 14);
        $this->Rect(70, 100, 122, 10, 'F');
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 127, 'Locatie');
        $this->SetFont('Arial', '', 14);
        $this->Rect(70, 120, 80, 10, 'F');
        $this->Rect(152, 120, 40, 10, 'F');
        $this->Rect(70, 140, 60, 10, 'F');
        $this->Rect(132, 140, 60, 10, 'F');
        $this->Rect(70, 160, 60, 10, 'F');
        $this->Rect(132, 160, 60, 10, 'F');
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 187, 'Woning verwarmd');
        $this->SetFont('Arial', '', 14);
        $this->Rect(70, 180, 60, 10, 'F');
        $this->SetFont('Arial', 'B', 14);
        $this->Text(10, 207, 'Waar is de woning verwarmd');
        $this->SetFont('Arial', '', 14);
        $this->Rect(10, 217, 183, 30, 'F');



        $i = 225;

        $klant = $this->dossier->getKlant();
        $woning = $this->dossier->getWoning();
        $adres = $woning->getAdres();
        $gemeente = $adres->getGemeente();

        $this->Text(73, 67, $klant->getVoornaam());
        $this->Text(125, 67, $klant->getFamilienaam());
        $this->Text(73, 87, $klant->getEmail());
        $this->Text(73, 107, $klant->getTelefoon());
        $this->Text(73, 127, $adres->getStraat());
        $this->Text(155, 127, $adres->getNummer());
        $this->Text(73, 147, $gemeente->getNaam());
        $this->Text(135, 147, $gemeente->getPostcode());
        $this->Text(73, 167, $this->dossier->getVerwantschap());
        $this->Text(135, 167, $adres->getBus());
        if($this->dossier->getWoning()->getVerwarmd() === '1') {
            $this->Text(73, 187, "Verwarmd");
        } else {
            $this->Text(73, 187, "Niet verwarmd");
        }
        $waarnemingen = $woning->getWaarnemingenFromCategorie(11);
        foreach ($waarnemingen as $waarneming) {
            $eigenschap = $waarneming->getEigenschap()->getBeschrijving();
            $this->Text(13, $i, $eigenschap);
            $i += 10;
        }
    }


    function getGevel()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(1);
        if(sizeof($waarnemingen) > 0){
        $this->SetFont('Arial', 'B', 20);
        $this->MultiCell(90, 10, 'Gevel');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 13);
        $this->MultiCell(190, 10, 'De gerelateerde verwarmingszaken die plaatsgevonden zijn:');
        $this->SetFont('Arial', '', 14);
        foreach ($waarnemingen as $waarneming) {
            $this->MultiCell(190, 10, $waarneming->getEigenschap()->getBeschrijving());
        }
        $this->Addpage();
    }
}   

    function getRamen()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(3);
        if(sizeof($waarnemingen) > 0){
        $this->Text(100, 10, sizeof($waarnemingen));
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Openingen');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Ramen');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function dakramen()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(4);
        if(sizeof($waarnemingen) > 0){
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Dakramen');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }

    }

    function deuren()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(5);
        if(sizeof($waarnemingen) > 0){
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Deuren');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }

    }

    function poorten()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(6);
        if(sizeof($waarnemingen) > 0){
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Poorten');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function brievenbus()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(7);
        if(sizeof($waarnemingen) > 0){
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'brievenbus');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function getMuren()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(8);
        if(sizeof($waarnemingen) > 0){
        $this->AddPage();
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(100, 10, 'Muren');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 13);
        $this->MultiCell(190, 10, 'De gelateerde verwarmingszaken die plaatsgevonden zijn:');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function getDak()
    {
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(9);
        if(sizeof($waarnemingen) > 0){
        $this->AddPage();
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(100, 10, 'Daken');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 13);
        $this->MultiCell(190, 10, 'De gelateerde verwarmingszaken die plaatsgevonden zijn:');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50, 10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function getEnergiebronnen()
    {
        
        
        $waarnemingen = $this->dossier->getWoning()->getWaarnemingenFromCategorie(10);
        if(sizeof($waarnemingen) > 0){
        $this->AddPage();
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(100, 10, 'Energiebronnen');
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 13);
        $this->MultiCell(190, 10, 'De gelateerde verwarmingszaken die plaatsgevonden zijn:');
        $this->SetFont('Arial', '', 14);
        for ($i = 0; $i < sizeof($waarnemingen); $i++) {
            $this->MultiCell(190, 10, $waarnemingen[$i]->getEigenschap()->getBeschrijving());
            $this->getColor($waarnemingen[$i]->getWaarnemingType()->getTitel());
            $this->MultiCell(50,10, $waarnemingen[$i]->getWaarnemingType()->getTitel(),1,1,'C',true);
        }
    }
    }

    function getColor($waarden){
        switch($waarden){
            case 'schitterend':
                $this->SetFillColor(0,128,0);
                break;
            
            case 'mooi resultaat':
                $this->SetFillColor(50,205,50);
                break;

            case 'goed op weg':
                $this->SetFillColor(255,255,0);
                break;

            case 'aanpakken':
                $this->SetFillColor(255,165,0);
                break;
            
            case 'dringend aanpakken':
                $this->SetFillColor(255,0,0); 
                break;

            case 'niet van toepassing':
                $this->SetFillColor(255,255,255); 
                break;
        }

    }


    function getOpeningen()
    {
        $this->getRamen();
        $this->dakramen();
        $this->deuren();
        $this->poorten();
        $this->brievenbus();

    }


    function getHeadImage()
    {
        /*
        $this->SetX(20);

        for ($i = 0; $i < 1; $i++) {
            $this->Image("ftp/fotos/jabbeke1.JPG");
            //$this->Image($values[$i], 25, 90, 150);
            $this->Image("ftp/fotos/jabbeke2.JPG", 22, 210);

        }*/
    }

    function getImages()
    {
        /*
        if (sizeof($values) != 1) {
            $this->AddPage();
            $y = 50;

            for ($i = 1; $i < sizeof($values); $i++) {
                $this->Image($values[$i], 20, 50, 150);
                $this->Addpage();
            }
        }*/
    }
}











