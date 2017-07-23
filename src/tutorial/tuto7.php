<?php
define('FPDF_FONTPATH','.');

use dqfan2012\fpdf\FPDF;

$pdf = new FPDF();
$pdf->AddFont('Calligrapher','','calligra.php');
$pdf->AddPage();
$pdf->SetFont('Calligrapher','',35);
$pdf->Cell(0,10,'Enjoy new fonts with FPDF!');
$pdf->Output();

