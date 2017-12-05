<?php
include ("koneksi.php");

$id_sewa = $_POST['id_sewa'];
$id_kamar = $_POST['id_kamar'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$id_kasir = $_POST['id_kasir'];
$tambahan = $_POST['tambahan'];
$laundry_kilo = $_POST['laundry'];
$total = $_POST['total'];
$tanggal = $_POST['tanggal'];

$laundry = $laundry_kilo * 10000;

$input = mysql_query("insert into penyewaan values ('$id_sewa','$id_kamar','$nama','$hp','$id_kasir','$tambahan','$laundry','$total','$tanggal')");

if ($input)
{echo"<script>alert ('Sukses Menyewa!');window.location='home.php'</script>";}
else
{echo"<script>alert ('Data Tidak Tersimpan, kemungkinan ada ID yang sama'); window.location='form_sewa.php?id=$id_kamar';</script>";}
?>
