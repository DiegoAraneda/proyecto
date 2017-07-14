<?php

require('conexion.php');
	require('fpdf/fpdf.php');

	
	class PDF extends FPDF 
	{
		function AcceptPageBreak()
		{
			$this->Addpage();
			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->SetX(10);
			$this->Cell(70,6,'ID',1,0,'C',1);
			$this->SetX(80);
			$this->Cell(20,6,'NOMBRE',1,0,'C',1);
			$this->SetX(100);
			$this->Cell(70,6,'FECHA',1,0,'C',1);
			$this->SetX(80);
			$this->Cell(20,6,'HORA',1,0,'C',1);
			$this->Ln();
		}
		
		function Header()
		{
			$this->Image('images/logo.png',10,8,20);
			$this->SetFont('Arial','B',15);
			$this->Cell(80);
			$this->Cell(30,10,'RM-SEGURIDAD',1,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
		
	}
	
	$query="SELECT id,nom,date,time from AsigHorario";
	$resultado=$mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->Addpage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetX(10);
	$pdf->Cell(70,6,'ID',1,0,'C',1);
	$pdf->SetX(80);
	$pdf->Cell(20,6,'nom',1,0,'C',1);
	$pdf->SetX(100);
	$pdf->Cell(70,6,'date',1,0,'C',1);
	$pdf->SetX(80);
	$pdf->Cell(20,6,'time',1,0,'C',1);
	$pdf->Ln();
	
	while($row = $resultado->date())
	{
		$pdf->SetFont('Arial','',12);
		$pdf->SetX(10);
		$pdf->Cell(70,6, $row['id'],1,0,'C');
		$pdf->SetX(80);
		$pdf->Cell(20,6, utf8_decode($row['nom']),1,0,'C');
		$pdf->SetX(100);
		$pdf->Cell(70,6, $row['date'],1,1,'C');
		$pdf->SetX(80);
		$pdf->Cell(20,6, $row['time'],1,0,'C');
		$pdf->SetX(80);
		
		
	}
	$pdf->Output();
	
?>