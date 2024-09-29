<?php

require 'fpdf/fpdf.php';

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetCreator('hecho');

$pdf->Image('imagen/certificado.jpg',0,0);


$pdf->output();
?>