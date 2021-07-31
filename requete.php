<?php
session_start();
require('fpdf/fpdf.php');    

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,$_SESSION['sem']." ; ".strtoupper($_SESSION['specialite'])."\n",'TB',1,'C');
$pdf->SetFont('Arial','B',16);
$h=7;
$pdf->Write($h,$_SESSION['note_recu']." ; ".$_SESSION['note_effec']."\n");
$pdf->Output();
?>