<?php
require_once 'db.php';
require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
   // Arial bold 15
   $this->SetFont('Arial','B',15);
   // Movernos a la derecha
   $this->Cell(60);
   // Título
   $this->Cell(70,10,utf8_decode('CYBER SPACE '),0,0,'C');
   
   // Salto de línea
   $this->Ln(20);
   //subtitulo
   $this->SetFont('Courier','B',15);
   $this->SetXY(70, 20);
   $this->MultiCell(100, 10, utf8_decode('Reporte stock productos'), 0, 'j');
   
   $this->SetFont('Arial', 'B', 10);
   
   $this->Cell(10, 10, utf8_decode('Id'), 1, 0, 'C', 0);
   $this->Cell(25, 10, utf8_decode('Producto'), 1, 0, 'C', 0);
   $this->Cell(25, 10, utf8_decode('Marca'),1,0,'C',0);
   $this->Cell(25, 10, utf8_decode('Cantidad'), 1, 0, 'C', 0);
   $this->Cell(35, 10, utf8_decode('Categoria'), 1, 0, 'C', 0);
   $this->Cell(25, 10, utf8_decode('Proveedor'), 1, 0, 'C', 0);
   $this->Cell(25, 10, utf8_decode('P/M'), 1, 0, 'C', 0);
   $this->Cell(25, 10, utf8_decode('P/U'), 1, 1, 'C', 0);

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);


    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




$conexion = conn();
$sql ="SELECT id, producto, marca, cantidad, categoria, proveedor, preciomayor, preciounitario FROM producto ";
$result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(10, 10, utf8_decode( $row['id']) , 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['producto']), 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['marca']) , 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['cantidad']) , 1, 0, 'C', 0);
    $pdf->Cell(35, 10, utf8_decode($row['categoria']) , 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['proveedor']) , 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['preciomayor']) , 1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode( $row['preciounitario']) , 1, 1, 'C', 0);

    
}

$pdf->Output();
?>