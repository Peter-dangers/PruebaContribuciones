<?php
require('fpdf186\fpdf.php');  // Incluye la clase FPDF

// Crear instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Establecer fuente
$pdf->SetFont('Arial', 'B', 12);

// Título de la tabla
$pdf->Cell(60, 10, 'Num.Producto', 1, 0, 'C');
$pdf->Cell(60, 10, 'Descripcion', 1, 0, 'C');
$pdf->Cell(40, 10, 'Precio', 1, 1, 'C');  // El '1' en el último parámetro indica salto de línea

// Establecer fuente para los datos
$pdf->SetFont('Arial', '', 12);

// Datos de ejemplo
$productos = [
    [1, 'PC', '10000.00'],
    [2, 'MONITOR', '1500.50'],
    [3, 'TELEVISION', '8000.75'],
    [4, 'SILLA', '500.00'],
    [5, 'ESCRITORIO', '1200.00'],
    [6, 'AUDICULARES', '600.50'],
    [7, 'BOCINA', '800.75'],
    [8, 'IMPRESORA', '2000.00'],
];

// Imprimir los datos
foreach ($productos as $producto) {
    $pdf->Cell(60, 10, $producto[0], 1, 0, 'C');  // Número de producto
    $pdf->Cell(60, 10, $producto[1], 1, 0, 'C');  // Nombre del producto
    $pdf->Cell(40, 10, '$' . number_format($producto[2], 2), 1, 1, 'C');  // Precio, con formato monetario
}

// Salida del PDF
$pdf->Output();
?>