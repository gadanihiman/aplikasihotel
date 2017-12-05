<?php session_start();

if(isset($_SESSION['username']))
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
<?php
$username = $_SESSION['username'];
$nama = $_SESSION['nama'];
$akses = $_SESSION['akses'];
?>
<div id="artikel">
  <center>
<p><strong><font size="+2">Selamat Datang <?php echo $akses;?> <?php echo $nama;?>  </font></strong></p>
</center>
<br />

<hr color="#CCCCCC" />
<br />

<?php

ini_set( "display_errors", 0);

if(isset($_GET['id']))

						{

include("koneksi.php");
$id_kamar=$_GET['id'];
$query= mysql_query("select * from kamar where id_kamar='$id_kamar'");
$hasil= mysql_fetch_array($query);
?>
<table align="center" class="zebra2-table">
  	<tr>

    <td colspan="3" bgcolor="#333333"><center>
      <font size="+1" color="#FFFFFF"><strong>Detail Room <?php echo $hasil['id_kamar'];?></strong></font>
    </center></td></tr>
    <tr>
      <td bgcolor="#FFFFFF" width="174">
				<center>
	      No. Kamar
				</center>
			</td>
      <td bgcolor="#FFFFFF" width="20">
				<center>:</center>
			</td>
    	<td width="164" bgcolor=white><center><?php echo $hasil['id_kamar'];?></center> </td>
		</tr>
    <tr>
      <td bgcolor="#FFFFFF" width="174">
				<center>
        Jenis Kamar
      	</center>
			</td>
      <td bgcolor="#FFFFFF" width="20">
				<center>:</center>
			</td>
    	<td bgcolor=white><center><?php echo $hasil['jenis_kamar'];?></center> </td>
		</tr>
      <td bgcolor="#FFFFFF" width="174">
				<center>
	      Deskripsi
	      </center>
			</td>
      <td bgcolor="#FFFFFF" width="20">
				<center>:</center>
			</td>
    	<td bgcolor=white><center><?php echo $hasil['deskripsi'];?></center> </td>
		</tr>
    <tr>
    	<td bgcolor="#FFFFFF" width="174">
				<center>
        Harga Sewa
      	</center>
			</td>
      <td bgcolor="#FFFFFF" width="20"><center>:</center></td>
    <td bgcolor=white><center>
      Rp. <?php echo $hasil['harga_sewa'];?>
    </center> </td></tr>
      <tr>
      <td bgcolor="#FFFFFF" width="174">
				<center>
      	Diskon
      	</center>
			</td>
      <td bgcolor="#FFFFFF" width="20"><center>:</center></td>
    <td bgcolor=white><center>
      <?php echo $hasil['diskon'];?>%
    </center> </td></tr>
      <td bgcolor="#FFFFFF" width="174"><center>
      ACTION
      </center></td>
      <td bgcolor="#FFFFFF" width="20"><center>:</center></td>
    <td bgcolor=white><center>
      <a href="edit_kamar.php?id=<?php echo $hasil['id_kamar'];?>"><font class="action">Edit</font></a>
    </center> </td></tr>
    <tr>
      <td bgcolor="#FFFFFF" width="174"><center>
      </center></td>
      <td bgcolor="#FFFFFF" width="20"><center></center></td>
    <td bgcolor=white><center>
      <a href="delete_kamar.php?id=<?php echo $hasil['id_kamar'];?>"><font class="action">Hapus</font></a>
    </center> </td></tr>



   <tr>
   <td colspan="3">

   </td>
   </tr>

</table>
<?php
						}
						?>

<br />

<form action="" method="POST">
<table width="80%" border="0" align="center" >
<tr>
<td>
<input placeholder="Pencarian Berdasarkan No. Kamar. . ." name="id_kamar" type="text" class="form" />
</td>
<td align="left">
<input type="submit" class="t_cari" name="cari" value="Cari Kamar" />
</td>
</tr>
</table>
</form>

<br />
<br />
<center>
<table class="fixed-th">
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
							include("koneksi.php");
							$id_kamar = $_POST['id_kamar'];
							$no = 1;


$query =  mysql_query("SELECT * FROM kamar WHERE id_kamar LIKE '%$id_kamar%' ");

if($query){
?>

				<th>No</th>
				<th>No Kamar</th>
				<th>Jenis Kamar</th>
        <th>Harga</th>
        <th colspan="2">Action</th>

			</tr>

		</thead>
                      <?php

while($hasil = mysql_fetch_array($query))
{

?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td>Room <?php echo $hasil['id_kamar'];?></td>
				<td><?php echo $hasil['jenis_kamar'];?></td>
				<td>Rp. <?php echo $hasil['harga_sewa'];?></td>
                <td><a href="form_sewa.php?id=<?php echo $hasil['id_kamar'];?>"><font class="action">Sewa</font></a></td>
                <td> <a href="home.php?id=<?php echo $hasil['id_kamar'];?>"><font class="action">Detail</font></a></td>
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
else{echo"<script>alert ('Anda Tidak Bisa Mengakses Halaman Ini, Silahkan Login Dahulu');window.location='index.php';</script>";}?>
