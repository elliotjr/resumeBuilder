<?php
  session_start();

  $name = "Hello, My Name is " . $_POST['firstname'] . " " . $_POST['lastname'];
  $email = $_POST['email'];


  require("fpdf/fpdf.php");
  //$pdf = new fpdf();
  $pdf = new fpdf('P','mm','A4');
  $pdf->AddPage();
  $pdf->cMargin = 0;
  $pdf->SetMargins(0, 0, 0);
  $pdf->Image('template/one.png');
  /*
  $pdf->SetFont("Arial", "U", "22");
  $pdf->Cell(0, 10, $name, 0, 1, "C");

  $pdf->SetFont("Arial", "I", "14");
  $pdf->Cell(0, 10, $email, 0, 1, "C");
  */
  $pdf->Output();
?>
