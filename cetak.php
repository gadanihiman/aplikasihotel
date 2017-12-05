<?php
include "koneksi.php";
include "fpdf/fpdf.php";
$id = $_GET['id'];
$show = mysql_query("SELECT * FROM penyewaan,admin WHERE admin.id_kasir=penyewaan.id_kasir && penyewaan.id_sewa='$id'");
if(mysql_num_rows($show) == 0)
	{
	}
	else {
		$ed = mysql_fetch_assoc($show);
	}
$pdf=new FPDF();
$pdf->AddPage();
$pdf->setfont('Arial', 'B', '8');
$sql=mysql_query("SELECT * FROM penyewaan,admin WHERE admin.id_kasir=penyewaan.id_kasir && penyewaan.id_sewa='$id'");
$data=mysql_fetch_array($sql);
$pdf->setXY(25,15);
$pdf->cell(30,6,'ID Penyewaan');$pdf->cell(50,6,': '.$data['id_sewa']);
$pdf->cell(30,6,'Karyawan');$pdf->cell(50,6,': '.$data['nama']);
$y_initial=41;
$y_axis1=35;
$pdf->setfont('Arial', '', '10');
$pdf->setfillcolor(255,255,255);
$no=0;
$row=6;
$y=$y_initial+$row;
$nilai=mysql_query("SELECT * FROM penyewaan,kamar WHERE kamar.id_kamar=penyewaan.id_kamar && penyewaan.id_sewa='$id'");
while ($daftar=mysql_fetch_array($nilai)) {
	$pdf->setY(29);
	$pdf->setX(50);
	$pdf->cell(50,6,'Nama Tamu',1,0,'C',1);
	$pdf->setY(29);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['nama'],1,0,'C',1);

	$pdf->setY(35);
	$pdf->setX(50);
	$pdf->cell(50,6,'Harga Sewa',1,0,'C',1);
	$pdf->setY(35);
	$pdf->setX(100);
	$pdf->cell(50,6,'Rp. '.$daftar['harga_sewa'],1,0,'C',1);

	$pdf->setY(41);
	$pdf->setX(50);
	$pdf->cell(50,6,'Diskon (%)',1,0,'C',1);
	$pdf->setY(41);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['diskon'].'%' ,1,0,'C',1);

	$pdf->setY(47);
	$pdf->setX(50);
	$pdf->cell(50,6,'Tambahan Makanan/Minuman',1,0,'C',1);
	$pdf->setY(47);
	$pdf->setX(100);
	$pdf->cell(50,6,'Rp. '.$daftar['tambahan'],1,0,'C',1);

	$pdf->setY(53);
	$pdf->setX(50);
	$pdf->cell(50,6,'PPN',1,0,'C',1);
	$pdf->setY(53);
	$pdf->setX(100);
	$pdf->cell(50,6,'Rp. '.$daftar['ppn'],1,0,'C',1);

	$pdf->setY(59);
	$pdf->setX(50);
	$pdf->cell(50,6,'Total Harga',1,0,'C',1);
	$pdf->setY(59);
	$pdf->setX(100);
	$pdf->cell(50,6,'Rp. '.$daftar['total'],1,0,'C',1);

	$pdf->setY(65);
	$pdf->setX(50);
	$pdf->cell(50,6,'Tanggal Penyewaan',1,0,'C',1);
	$pdf->setY(65);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['tanggal'],1,0,'C',1);

	$pdf->setXY(25,80);
	$pdf->cell(30,6,'Terimakasih telah berkunjung ke hotel kami, sampai jumpa kembali.');

}
$pdf->Output();
?>
