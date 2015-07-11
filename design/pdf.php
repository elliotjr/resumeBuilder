<?php
  session_start();

 // User Inputs
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $aim = $_POST['aim'];
  $schoolName = $_POST['schoolName'];
  $startYear = $_POST['startYear'];
  $endYear = $_POST['endYear'];
  $uniName = $_POST['uniName'];
  $startYearU = $_POST['startYearU'];
  $endYearU = $_POST['endYearU'];
  $company= $_POST['company'];
  $startYearC = $_POST['startYearC'];
  $endYearC = $_POST['endYearC'];



  require("fpdf/fpdf.php");
  //$pdf = new fpdf();
  $pdf = new fpdf('P','mm','A4');
  $pdf->SetMargins(5, 0, 0);
  $pdf->AddPage();
  //$pdf->cMargin = 0;
//  $pdf->Image('template/template.png', '', '', '210', '297', 'PNG');

  $pdf->SetFont("Arial", "", "16");
  $pdf->Cell(0, 40, $name, 1, 1, "C");
  $pdf->Cell(0, 40, $email, 1, 1, "C");
  $pdf->Cell(0, 40, $age, 1, 1, "C");
  $pdf->Cell(0, 40, $address, 1, 1, "C");
  $pdf->Cell(0, 40, $aim, 1, 1, "C");
  $pdf->Cell(0, 40, $schoolName, 1, 1, "C");
  $pdf->Cell(0, 40, $startYear, 1, 1, "C");
  $pdf->Cell(0, 40, $endYear, 1, 1, "C");
  $pdf->Cell(0, 40, $uniName, 1, 1, "C");
  $pdf->Cell(0, 40, $startYearU, 1, 1, "C");
  $pdf->Cell(0, 40, $endYearU, 1, 1, "C");
  $pdf->Cell(0, 40, $company, 1, 1, "C");
  $pdf->Cell(0, 40, $startYearC, 1, 1, "C");
  $pdf->Cell(0, 40, $endYearC, 1, 1, "C");

/*
  $pdf->SetFont("Arial", "U", "22");
  $pdf->Cell(0, 10, $name, 1, 1, "C");

  $pdf->SetFont("Arial", "I", "14");
  $pdf->Cell(0, 10, $email, 1, 1, "C");

  $pdf->SetFont("Arial", "I", "14");
  $pdf->Cell(0, 10, 'test', 1, 1, "C");*/
  $pdf->Output();
?>
