<?php
use setasign\Fpdi\Fpdi;
require "../fpd/fpdf/fpdf181/fpdf.php";
//require "../fpd/fpdf/fpdf181/fpdf.php";
require "../fpd/fpdi/autoload.php";




class myPDF extends FPDF{
function header(){
    $gemeente = $_POST['gegevens']['gemeente'];
    
    $this->SetX(20);
    $this->Image("../ftp/fotos/" . $gemeente . ".JPG");
    $this->SetX(10);
    
}
function footer(){
    $this->SetY(-30);
    $this->Image("../ftp/fotos/Footer.JPG");

}
function getContactInformation(){
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
    $this->Rect(70,120,80,10, 'F');
    $this->Rect(152,120,40,10, 'F');
    $this->Rect(70,140,60,10, 'F');
    $this->Rect(132,140,60,10, 'F');
    $this->Rect(70,160,60,10, 'F');
    $this->Rect(132,160,60,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 187, 'Woning verwarmd');
    $this->SetFont('Arial', '', 14);
    $this->Rect(70,180,60,10, 'F');
    $this->SetFont('Arial', 'B', 14);
    $this->Text(10, 207, 'Waar is de woning verwarmd');
    $this->SetFont('Arial', '', 14);
    $this->Rect(10,217,183,30, 'F');


    if (isset($_POST['gegevens'])){
        $empty_string = '';
        $values = $_POST['gegevens'];
        $verwarming = $values['verwarming'];
        $i = 225;
        
            $this->Text(73,67, $_POST['gegevens']['voornaam']);
            $this->Text(125,67, $_POST['gegevens']['familienaam']);
            $this->Text(73,87, $_POST['gegevens']['email']);
            $this->Text(73,107, $_POST['gegevens']['telefoon']);
            $this->Text(73,127, $_POST['gegevens']['straat']);
            $this->Text(155,127, $_POST['gegevens']['nummer']);
            $this->Text(73,147, $_POST['gegevens']['gemeente']);
            $this->Text(135,147, $_POST['gegevens']['postcode']);
            $this->Text(73,167, $_POST['gegevens']['verwantschap']);
            $this->Text(135,167, $_POST['gegevens']['bus']);
            $this->Text(73,187, $_POST['gegevens']['verwarmd']);
            if (isset($verwarming['eigenschappen'])){
                foreach($verwarming['eigenschappen'] as $item){
                    $this->Text(13,$i, $item);
                    $i += 10;
        
                }
            }
            if (isset($verwarming['eigenschappen-custom'])){
                foreach($verwarming['eigenschappen-custom'] as $item){
                    $this->Text(13,$i, $item);
                    
        
                }
            }

            $this->Addpage();
            

        }

    }
        
        
    


function getGevel(){
    $values = $_POST['gevel'];
    if(sizeof($values['eigenschappen']) >= 2){
    $this->SetFont('Arial','B', 20);
    $this->MultiCell(90, 10, 'Gevel');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 13);
    $this->MultiCell(190, 10, 'De gerlateerde verwarmingzaken die plaatsgevonden zijn:');
    $this->SetFont('Arial', '', 14);

    foreach($values['eigenschappen'] as $item){
        $this->MultiCell(190, 10, $item);
    }
    $this->Addpage();



}
}
function getRamen(){
    $values = $_POST['openingen'];
    $ramen = $values['ramen'];
    if(sizeof($ramen) > 1){
    $eigenschappen = $ramen['eigenschappen'];
    $waarnemingen = $ramen['waarnemingen'];
    $custom = $ramen['eigenschappen-custom'];
    
    $this->Text(100,10,sizeof($values));
    $this->SetFont('Arial','B', 18);
    $this->MultiCell(190, 10, 'Openingen');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 18);
    $this->MultiCell(190, 10, 'Ramen');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
}
}  

function dakramen(){
    $values = $_POST['openingen'];
    $dakramen = $values['dakramen'];
    if(sizeof($dakramen) > 1){
    $eigenschappen = $dakramen['eigenschappen'];
    $waarnemingen = $dakramen['waarnemingen'];
    $custom = $dakramen['eigenschappen-custom'];
    
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 18);
    $this->MultiCell(190, 10, 'Dakramen');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
}
}
function deuren(){
    $values = $_POST['openingen'];
    $deuren = $values['deuren'];
    if(sizeof($deuren) > 1){
    $eigenschappen = $deuren['eigenschappen'];
    $waarnemingen = $deuren['waarnemingen'];
    $custom = $deuren['eigenschappen-custom'];
    
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 18);
    $this->MultiCell(190, 10, 'Deuren');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
}
}
function poorten(){
    $values = $_POST['openingen'];
    $poorten = $values['poorten'];
    if(sizeof($poorten) > 1){
    $eigenschappen = $poorten['eigenschappen'];
    $waarnemingen = $poorten['waarnemingen'];
    $custom = $poorten['eigenschappen-custom'];
    
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'Poorten');
        $this->SetFont('Arial', '', 14);
        for($i = 0; $i < sizeof($eigenschappen); $i++){
            $this->MultiCell(190,10, $eigenschappen[$i]);
            $this->MultiCell(190,10, $waarnemingen[$i]);
            if(sizeof($custom) > 1){
            $this->MultiCell(190,10, $custom[$i]);
            $this->Ln(5);
            }
        }
}
}
function brievenbus(){
    $values = $_POST['openingen'];
    $brievenbus = $values['brievenbus'];
    if(sizeof($brievenbus) > 1){
    $eigenschappen = $brievenbus['eigenschappen'];
    $waarnemingen = $brievenbus['waarnemingen'];
    $custom = $brievenbus['eigenschappen-custom'];
    
        $this->Line(10, 56, 200, 56);
        $this->SetFont('Arial', 'B', 18);
        $this->MultiCell(190, 10, 'brievenbus');
        $this->SetFont('Arial', '', 14);
        for($i = 0; $i < sizeof($eigenschappen); $i++){
            $this->MultiCell(190,10, $eigenschappen[$i]);
            $this->MultiCell(190,10, $waarnemingen[$i]);
            if(sizeof($custom) > 1){
            $this->MultiCell(190,10, $custom[$i]);
            $this->Ln(5);
            }
        }
}
}

function getMuren(){
    $values = $_POST['muren'];
    if(sizeof($values) > 1){
    $this->AddPage();
    $eigenschappen = $values['eigenschappen'];
    $waarnemingen = $values['waarnemingen'];
    $custom = $values['eigenschappen-custom'];
    $this->SetFont('Arial','B', 18);
    $this->MultiCell(100, 10, 'Muren');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 13);
    $this->MultiCell(190, 10, 'De gelateerde verwarmingzaken die plaatsgevonden zijn:');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
    }
}

function getDak(){
    $values = $_POST['daken'];
    if(sizeof($values) > 1){
    $this->AddPage();
    $eigenschappen = $values['eigenschappen'];
    $waarnemingen = $values['waarnemingen'];
    $custom = $values['eigenschappen-custom'];
    $this->SetFont('Arial','B', 18);
    $this->MultiCell(100, 10, 'Daken');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 13);
    $this->MultiCell(190, 10, 'De gelateerde verwarmingzaken die plaatsgevonden zijn:');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
    }
}

function getEnergiebronnen(){
    $values =$_POST['energiebronnen'];
    if(sizeof($values) > 1){
    $this->AddPage();
    $eigenschappen = $values['eigenschappen'];
    $waarnemingen = $values['waarnemingen'];
    $custom = $values['eigenschappen-custom'];
    $this->SetFont('Arial','B', 18);
    $this->MultiCell(100, 10, 'Energiebronnen');
    $this->Line(10, 56, 200, 56);
    $this->SetFont('Arial', 'B', 13);
    $this->MultiCell(190, 10, 'De gelateerde verwarmingzaken die plaatsgevonden zijn:');
    $this->SetFont('Arial', '', 14);
    for($i = 0; $i < sizeof($eigenschappen); $i++){
        $this->MultiCell(190,10, $eigenschappen[$i]);
        $this->MultiCell(190,10, $waarnemingen[$i]);
        if(sizeof($custom) > 1){
        $this->MultiCell(190,10, $custom[$i]);
        $this->Ln(5);
        }
    }
    }
}



function getOpeningen(){
    $this->getRamen();
    $this->dakramen();
    $this->deuren();
    $this->poorten();
    $this->brievenbus();

}



function getHeadImage(){
    $this->SetX(20);
    $values = $_POST['images'];
    for($i = 0; $i < 1; $i++){
        $this->Image("../ftp/fotos/jabbeke1.JPG");
        $this->Image($values[$i], 25, 90, 150);
        $this->Image("../ftp/fotos/jabbeke2.JPG", 22, 210);
        
    } 
    } 

function getImages(){
    $values = $_POST['images'];
    if(sizeof($values) != 1){
        $this->AddPage();
    $y = 50;
    
    for($i = 1; $i < sizeof($values); $i++){
        $this->Image($values[$i], 20, $y, 80);
        $y += 70;
    } 
    } 
    }
}


$pdf = new mypDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->getHeadImage();
$pdf->AddPage();
$pdf->getContactInformation();
$pdf->getGevel();
$pdf->getOpeningen();
$pdf->getMuren();
$pdf->getDak();
$pdf->getEnergiebronnen();
$pdf->getImages();
$pdf->Output();





