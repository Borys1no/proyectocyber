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
   $this->SetXY(80, 20);
   $this->MultiCell(100, 10, utf8_decode('Reporte Perfiles'), 0, 'j');
   
   $this->SetFont('Arial', 'B', 10);
   
   $this->Cell(10, 10, utf8_decode('Id'), 1, 0, 'C', 0);
   $this->Cell(35, 10, utf8_decode('Nombres'), 1, 0, 'C', 0);
   $this->Cell(35, 10, utf8_decode('Apellidos'),1,0,'C',0);
   $this->Cell(45, 10, utf8_decode('Usuario'), 1, 0, 'C', 0);
   $this->Cell(35, 10, utf8_decode('Telefono'), 1, 0, 'C', 0);
   $this->Cell(35, 10, utf8_decode('C.I.'), 1, 1, 'C', 0);

    
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
$sql ="SELECT * FROM admin ";
$result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(10, 10, utf8_decode( $row['id']) , 1, 0, 'C', 0);
    $pdf->Cell(35, 10, utf8_decode($row['nombres']), 1, 0, 'C', 0);
    $pdf->Cell(35, 10, utf8_decode($row['apellidos']) , 1, 0, 'C', 0);
    $pdf->Cell(45, 10, utf8_decode($row['usuario']) , 1, 0, 'C', 0);
    $pdf->Cell(35, 10, utf8_decode($row['telefono']) , 1, 0, 'C', 0);
    $pdf->Cell(35, 10, utf8_decode($row['ci']) , 1, 1, 'C', 0);

    
}

$pdf->Output();
?>