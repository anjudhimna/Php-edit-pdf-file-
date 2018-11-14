<?php
require_once('fpdf.php');
require_once('fpdi.php');

$pdf =& new FPDI();
$pdf->AddPage();

//Set the source PDF file
$pagecount = $pdf->setSourceFile(“Tally_PO.pdf”);

//Import the first page of the file
$tppl = $pdf->importPage(1);

//Use this page as template
// use the imported page and place it at point 20,30 with a width of 170 mm
$pdf->useTemplate($tppl, -10, 20, 210);

#Print Hello World at the bottom of the page

//Select Arial italic 8
$pdf->SetFont(‘Arial’,”,8);
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(90, 160);

$pdf->Image(‘om12iii.jpg’,45,220,15,10);
$pdf->Image(‘Om.jpg’,65,220,15,10);
$pdf->Image(‘think.jpg’,80,220,15,10);
$pdf->Image(‘Om.jpg’,140,240,15,10);

//$pdf->Write(0, “Hello World”);

$pdf->Output(“modified_pdf.pdf”, “F”);
?>


