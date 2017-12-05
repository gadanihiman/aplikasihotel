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
<title>Toko Buku LSP</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include ("menu.php"); ?>



<div id="content"><br />
<br />
<div id="artikel">
  <center>
<p><strong><font size="+2">Database Penjualan Buku</font></strong></p>
</center>
<br />

<hr color="#CCCCCC" />
<br /><br />

<?php

ini_set( "display_errors", 0);
include("koneksi.php");
$id_buku=$_GET['id'];
$query= mysql_query("select * from buku where id_buku='$id_buku'");
$hasil= mysql_fetch_array($query);
?>




<form action="" method="POST">
<table width="80%" border="0" align="center" >
<tr>
<td>
<input placeholder="Pencarian Berdasarkan Id Pasok. . ." name="id_pasok" type="text" class="form" />
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
					$id_pasok=$_GET['id'];	
					$id_pasok = $_POST['id_pasok'];
					$no = 1;
														
$gabung = mysql_query("SELECT * FROM pasok WHERE id_pasok LIKE '%$id_pasok%'");
							
if($gabung){
?>

				<th>No</th>
				<th>ID Pasok</th>
				<th>Tanggal</th>
				<th>ID Buku</th>
				<th>ID Dist</th>
                <th>Jumlah</th>
                <th colspan="2">Action</th>
                


                
			</tr>
            
		</thead>
                      <?php

while($hasil = mysql_fetch_array($gabung))
{

?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $hasil['id_pasok'];?></td>
				<td><?php echo $hasil['tanggal'];?></td>
				<td><?php echo $hasil['id_buku'];?></td>
				<td><?php echo $hasil['id_distributor'];?></td>
                <td><?php echo $hasil['jumlah'];?></td>
                <td><a href="form_buku.php?id=<?php echo $hasil['id_buku'];?>"><font class="action">Input</font></a></td>
                <td> <a href="home.php?id=<?php echo $hasil['id_buku'];?>"><font class="action">Detail</font></a></td>
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