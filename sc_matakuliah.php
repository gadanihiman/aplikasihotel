<?php
include ("koneksi.php");
$kode = $_POST['kode'];
$matakuliah = $_POST['mata_kuliah'];

$input = mysql_query("insert into matakuliah values ('$kode','$matakuliah')");

if ($input)
{echo"<script>alert ('Data Berhasil Disimpan');window.location='form_matakuliah.php';</script>";}
else
{echo"<script>alert ('Data Tidak Tersimpan, kemungkinan ada ID yang sama'); window.location='form_matakuliah.php';</script>";}
?>
