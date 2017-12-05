<?php
include ("koneksi.php");
$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$deskripsi = $_POST['deskripsi'];
$harga_sewa = $_POST['harga_sewa'];
$diskon = $_POST['diskon'];
$id_kamar = $_GET['id'];

$query = mysql_query("update kamar set id_kamar='$id_kamar',jenis_kamar='$jenis_kamar',deskripsi='$deskripsi',harga_sewa='$harga_sewa',diskon='$diskon' where id_kamar='$id_kamar'");

if ($query)
{echo"<script>alert ('Data Berhasil Diupdate!');window.location='home.php?id=$id_kamar'</script>";}
else
{echo"<script>alert ('Data Tidak Berhasil di Update!'); window.location='edit_kamar.php';</script>";}
?>
