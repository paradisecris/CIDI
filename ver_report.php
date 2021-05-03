<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	 // Logo
    $this->Image('img\logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reportes CIDI',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30, 10, 'Nombre', 1, 0, 'C', 0);
	$this->Cell(30, 10, 'Escuela', 1, 0, 'C', 0);
	$this->Cell(22, 10, 'Telefono', 1, 0, 'C', 0);
	$this->Cell(45, 10, 'Correo', 1, 0, 'C', 0);
	$this->Cell(70, 10, 'Reporte', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'connect_db.php';

$sql = "select * from reportes";
$result = mysqli_query($mysqli,$sql);


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $result->fetch_assoc()){

    $id = $row['id'];

    $total = mysqli_query($mysqli,"select cast((select LENGTH(reporte) from reportes where id=$id) as INT)");
    $contar = mysqli_fetch_assoc($total);
   
        if ($contar<=100):
            $alto=7;
            $ancho=22;
        elseif ($contar>101 && $contar<220):
            $alto=6;
            $ancho=26;
        else:
            $alto=4;
            $ancho=28;
        endif;
	$pdf->Cell(30, $ancho, $row['nombre'], 1, 0, 'C', 0);
	$pdf->Cell(30, $ancho, utf8_decode($row['escuela']), 1, 0, 'C', 0);
	$pdf->Cell(22, $ancho, $row['telefono'], 1, 0, 'C', 0);
	$pdf->Cell(45, $ancho, utf8_decode($row['correo']), 1, 0, 'C', 0);
	$pdf->MultiCell(70,$alto, utf8_decode($row['reporte']),1,'L');
	
	
}



$pdf->Output();
?>