<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(86, 86, 86); 
$pdf->SetFillColor(133, 151, 231 ); 
$pdf->Cell(190,40, 'Centro de Estudios Tecnologicos industriales y de Servicios 84', 1,1 , 'C', true);
$pdf->SetFont('Courier','B',16);
$pdf->SetTextColor(86, 86, 86);
$pdf->Cell(02,50,'Desarrola aplicaciones con conexion a base de datos');
$pdf->Cell(02,70,'Ramirez Juarez Pedro Armando');
$pdf->Cell(02,90,'Programacion 5 - E');
$pdf->Output();
?> 