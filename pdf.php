<?php
  session_start();

 // User Inputs
  $name = $_POST['firstname'] . " " . $_POST['lastname'];
  $email = $_POST['email'];


  require("fpdf/fpdf.php");
  //$pdf = new fpdf();
  $pdf = new fpdf('P','mm','A4');
  $pdf->SetMargins(5, 0, 0);
  $pdf->AddPage();
  //$pdf->cMargin = 0;
  $pdf->Image('template/template.png', '', '', '210', '297', 'PNG');

  $pdf->SetFont("Arial", "", "60");
  $pdf->Cell(0, 40, $name, 1, 1, "L");

/*
  $pdf->SetFont("Arial", "U", "22");
  $pdf->Cell(0, 10, $name, 1, 1, "C");

  $pdf->SetFont("Arial", "I", "14");
  $pdf->Cell(0, 10, $email, 1, 1, "C");

  $pdf->SetFont("Arial", "I", "14");
  $pdf->Cell(0, 10, 'test', 1, 1, "C");*/
  $pdf->Output();
?>
