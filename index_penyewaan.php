<?php session_start();

if(isset($_SESSION['username']) && $_SESSION['akses']=="manajer")
{
	$username = $_SESSION['username'];
$nama = $_SESSION['nama'];
$akses = $_SESSION['akses'];
include "koneksi.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel XYZ</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include ("menu.php"); ?>



<div id="content"><br />
<br />
<div id="artikel">
  <center>
<p><strong><font size="+2">Database Penyewaan Kamar Hotel</font></strong></p>
</center>
<br />

<hr color="#CCCCCC" />
<br /><br />

<?php

ini_set( "display_errors", 0);
include("koneksi.php");
$id_sewa=$_GET['id'];
$query= mysql_query("select * from penyewaan where id_sewa='$id_sewa'");
$hasil= mysql_fetch_array($query);
?>

<form action="" method="POST">
<table width="80%" border="0" align="center" >
<tr>
<td>
<input placeholder="Pencarian Berdasarkan Id Penyewaan. . ." name="id_sewa" type="text" class="form" />
</td>
<td align="left">
<input type="submit" class="t_cari" name="cari" value="Tampilkan" />
</td>
</tr>
</table>
</form>

<br />
<br />
<center>
<table class="fixed2-th">
		<thead>
			<tr>
            <?php
ini_set( "display_errors", 0);

if(!isset($_POST['cari']))
{
$_POST['cari'] = '';
}
				if(isset($_POST['cari']))
				{
					$id_sewa=$_GET['id'];
					$id_sewa = $_POST['id_sewa'];

$gabung = mysql_query("SELECT * FROM penyewaan WHERE id_sewa LIKE '%$id_sewa%'");

if($gabung){
?>
				<th>Room</th>
				<th>ID Sewa</th>
				<th>Nama Penyewa</th>
				<th>ID Kasir</th>
                <th>Additional</th>
                <th>Total</th>
                <th colspan="2">Action</th>
			</tr>

		</thead>
                      <?php

while($hasil = mysql_fetch_array($gabung))
{

?>
		<tbody>
			<tr>
				<td><?php echo $hasil['id_kamar'];?></td>
				<td><?php echo $hasil['id_sewa'];?></td>
				<td><?php echo $hasil['nama'];?></td>
				<td><?php echo $hasil['id_kasir'];?></td>
                <td>Rp.<?php echo $hasil['tambahan']+$hasil['laundry'];?></td>
                <td>Rp.<?php echo $hasil['total'];?></td>

                <td><a href="delete_penyewaan.php?id=<?php echo $hasil['id_sewa'];?>" onclick="return confirm('Apakah anda ingin menghapus ini ?');"><font class="action">Hapus</font></a></td>
                <td><a href="cetak.php?id=<?php echo $hasil['id_sewa'];?>"><font class="action">Checkout</font></a></td>
			<?php
         $no++;
		 ?>
        </tr>
				<?php
				}
				}

							else
							{
								echo "No Data";
							}

				}
				?>
		</tbody>
	</table>

</center>



</div>

</div>



<?php include ("footer.php"); ?>
</body>
</html>
<?php
}
else{echo"<script>alert ('Anda Tidak Bisa Mengakses Halaman Ini!!!!');window.location='index.php';</script>";}?>
