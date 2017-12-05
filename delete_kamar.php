<?php
include("koneksi.php");
$id_kamar = $_GET['id'];

$query = mysql_query("delete from kamar where id_kamar='$id_kamar'");
if ($query)
{echo "<script>alert('Data berhasil dihapus!');
window.location= 'index_kamar.php';</script>";}
?>
