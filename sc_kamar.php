<?php
include ("koneksi.php");
$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$deskripsi = $_POST['deskripsi'];
$harga_sewa = $_POST['harga_sewa'];
$diskon = $_POST['diskon'];

$ppn = 0.1 * ($harga_sewa-($harga_sewa*($diskon/100)));

$input = mysql_query("insert into kamar values ('$id_kamar','$jenis_kamar','$deskripsi','$harga_sewa','$ppn','$diskon')");

if ($input)
{echo"<script>alert ('Data Berhasil Disimpan');window.location='form_kamar.php';</script>";}
else
{echo"<script>alert ('Data Tidak Tersimpan, kemungkinan ada ID yang sama'); window.location='form_kamar.php';</script>";}
?>
