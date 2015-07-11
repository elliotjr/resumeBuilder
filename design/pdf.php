<?php
  session_start();

 // User Inputs
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
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
  $pdf->SetMargins(0, 0, 0);
  $pdf->AddPage();
  //$pdf->cMargin = 0;
//  $pdf->Image('template/template.png', '', '', '210', '297', 'PNG');

  $pdf->SetFont("Arial", "U", "36");
  $pdf->Cell(120, 22.5, $name, 1, 0, "C");

  $pdf->SetFont("Arial", "B", "11");
  $pdf->Cell(20, 22.5, "", 1, 0, "C");
  //$pdf->Cell(40, 20, $phone, 1, 0, "C");
  //$pdf->Cell(40, 10, $email, 1, 1, "C");

  //$pdf->Cell(0, 40, $phone, 1, 1, "C");
  $pdf->Cell(45, 7.5, "Contact Details", 1, 2, "C");

  $pdf->SetFont("Arial", "", "10");
  $pdf->Cell(45, 7.5, $phone, 1, 2, "C");
  $pdf->Cell(45, 7.5, $email, 1, 1, "C");
//  $pdf->Cell(0, 10, $dob, 1, 2, "C");
//  $pdf->Cell(0, 10, $address, 1, 2, "C");
  $pdf->SetFont("Arial", "B", "11");
  $pdf->Cell(25, 10, "Objective", 1, 1, "C");

  $pdf->SetFont("Arial", "", "8");
  $pdf->MultiCell(120, 4, $aim, 1, "L");

  $pdf->SetFont("Arial", "U", "36");
  $pdf->Text(50, 120, $phone);


  //$pdf->Cell(0, 40, $aim, 1, 1, "C");
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
