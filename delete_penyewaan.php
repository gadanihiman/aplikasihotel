<?php
include("koneksi.php");
$id_sewa = $_GET['id'];

$query = mysql_query("delete from penyewaan where id_sewa='$id_sewa'");
if ($query)
{echo "<script>alert('Data berhasil dihapus!');
window.location= 'index_penyewaan.php';</script>";}
?>
