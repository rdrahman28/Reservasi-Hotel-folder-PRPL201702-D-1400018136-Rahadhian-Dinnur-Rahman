<?php
require('fpdf.php');
include "../administrator/login/koneksi.php";

class PDF extends FPDF
{

// Colored table
function FancyTable($sql)
{
    // Colors, line width and bold font
    $this->Ln();
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B',12);
    // Header
    $w = array(90,100);
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    while($row = mysqli_fetch_array($sql))
    {
        $fill = !$fill;
        $this->Cell($w[0],6,"Kode Booking",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[0],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Nama Kamar",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Id Customer",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[3],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Nama ",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[4],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Email",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[5],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Tanggal Booking",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[6],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Tanggal Check In",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[7],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Tanggal Check Out",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[8],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Total Pembayaran",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[12],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
        $this->Cell($w[0],6,"Status Pembayaran",'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[11],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Data loading
$query = @$_GET['sql'];
$sql = $mysql->query($query);
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Bukti Pembayaran Glade Hotel','0','1','C',false);
$pdf->Ln();
$pdf->SetFont('Arial','i',10);
$pdf->Cell(0,5,'Alamat : Jln. Pramuka No 20, Umbulharjo, Warungboto - Yogyakarta.','0','1','C',false);
$pdf->SetFont('Arial','',12);
$pdf->FancyTable($sql);
$pdf->Ln();
$pdf->Output();
?>