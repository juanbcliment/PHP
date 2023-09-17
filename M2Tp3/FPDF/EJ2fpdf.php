<?php
require('fpdf186/fpdf.php');
if (isset($_POST['enviar']) && isset($_POST['enviar'])){
    $texto = $_POST["asunto"];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, $texto);
$pdf->Output();
}