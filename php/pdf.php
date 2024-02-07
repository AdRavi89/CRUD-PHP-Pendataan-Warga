<?php
require('fpdf/fpdf.php');

// Mendapatkan data dari tampil.php menggunakan metode GET (baru dicoba)
$no_kk = $_GET['no_kk'];
$no_ktp = $_GET['no_ktp'];
$nama = $_GET['nama'];
$tmp_lhr = $_GET['tmp_lhr'];
$tgl_lhr = $_GET['tgl_lhr'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$status_perkawinan = $_GET['status_perkawinan'];
$alamat = $_GET['alamat'];

// class PDF extends FPDF Cara 1
// {
//     function Header()
//     {
//         $this->SetFont('Arial', 'B', 16); //Setting Ukuran Font
//         $this->Cell(0, 10, 'Tanda Pengenal', 0, 1, 'C');
//         $this->Ln(5);
//     }

//     function Footer()
//     {
//         $this->SetY(-15);
//         $this->SetFont('Arial', 'I', 8);
//         $this->Cell(0, 10, 'Halaman ' . $this->PageNo(), 0, 0, 'C');
//     }
// }

// $pdf = new PDF();
// $pdf->AddPage();

// $pdf->SetFont('Arial', '', 12);

// //L : 50 satuan , T : 10 satuan, Teks , lebar sel dalam satuan, tinggi sel dalam satuan.
// $pdf->Cell(50, 10, '1. No. Kartu Keluarga', 1, 0);
// $pdf->Cell(0, 10, $no_kk, 1, 1);

// $pdf->Cell(50, 10, '2. No. KTP', 1, 0);
// $pdf->Cell(0, 10, $no_ktp, 1, 1);

// $pdf->Cell(50, 10, '3. Nama', 1, 0);
// $pdf->Cell(0, 10, $nama, 1, 1);

// $pdf->Cell(50, 10, '4. Jenis Kelamin', 1, 0);
// $pdf->Cell(0, 10, $jenis_kelamin, 1, 1);

// $pdf->Cell(50, 10, '5. Status Perkawinan', 1, 0);
// $pdf->Cell(0, 10, $status_perkawinan, 1, 1);

// $pdf->Cell(50, 10, '6. Alamat', 1, 0);
// $pdf->Cell(0, 10, $alamat, 1, 1);

// $pdf->Output('Cetak-Data.pdf', 'D');


$pdf = new FPDF();
$pdf->AddPage('L', array(125, 85)); // set ukuran halaman
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Tanda Pengenal',0,1,'C');

$pdf->SetFont('Arial','',12);

// Mengatur ketinggian (height) dari setiap sel agar sesuai dengan ukuran halaman B2
$cellHeight = 6; // Ketinggian sel

$pdf->Cell(40, $cellHeight, 'No. Kartu Keluarga', 1, 0);
$pdf->Cell(0, $cellHeight, $no_kk, 1, 1);

$pdf->Cell(40, $cellHeight, 'No. KTP', 1, 0);
$pdf->Cell(0, $cellHeight, $no_ktp, 1, 1);

$pdf->Cell(40, $cellHeight, 'Nama', 1, 0);
$pdf->Cell(0, $cellHeight, $nama, 1, 1);

$pdf->Cell(40, $cellHeight, 'Tempat, Tgl. Lahir', 1, 0);
$pdf->Cell(0, $cellHeight, $tmp_lhr  . $tgl_lhr, 1, 1);

$pdf->Cell(40, $cellHeight, 'Jenis Kelamin', 1, 0);
$pdf->Cell(0, $cellHeight, $jenis_kelamin, 1, 1);

$pdf->Cell(40, $cellHeight, 'Status Perkawinan', 1, 0);
$pdf->Cell(0, $cellHeight, $status_perkawinan, 1, 1);

$pdf->Cell(40, $cellHeight, 'Alamat', 1, 0);
$pdf->Cell(0, $cellHeight, $alamat, 1, 2);

//$pdf->Output();
// Mengatur nama file output sesuai dengan data nama
$filename = $nama . '.pdf';

$pdf->Output('', $filename); // Mengunduh file dengan nama yang ditentukan
?>
