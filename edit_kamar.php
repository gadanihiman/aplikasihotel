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
<title>Toko Buku LSP</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv1 {
	display:inline-block;
	width: 330px;
	height: 317px;
	-webkit-box-shadow: 0 0 7px #000;
	-moz-box-shadow: 0 0 7px #000;
	box-shadow: 0 0 7px #000;
}
#apDiv2 {
	display:inline-block;
	width:330px;
	height: 317px;
	-webkit-box-shadow: 0 0 7px #000;
	-moz-box-shadow: 0 0 7px #000;
	box-shadow: 0 0 7px #000;
}
#apDiv3 {
	display:inline-block;
	width: 330px;
	height: 317px;
	-webkit-box-shadow: 0 0 7px #000;
	-moz-box-shadow: 0 0 7px #000;
	box-shadow: 0 0 7px #000;
}
</style>
</head>

<body>
<?php include ("menu.php"); ?>
<div id="content">




  <br />
<br />
<div id="artikel">
  <center>
<p> <font size="+2"><strong>Form Edit Buku</strong> </font>
</p>
</center>
<br />

<hr color="#CCCCCC" />
<p>&nbsp;</p>
<p><br />
</p>
<?php
include("koneksi.php");
$id_kamar=$_GET['id'];
$query= mysql_query("select * from kamar where id_kamar='$id_kamar'");
$data= mysql_fetch_array($query);
?>
<center><form action="update_kamar.php?id=<?php echo $data['id_kamar'];?>" method="post">
      <table width="80%" border="0" align="center" >
				<tr>
					<td width="194" bgcolor="#FFFFFF">
						<center>
						No Kamar
						</center>
					</td>
					<td width="9" bgcolor="#FFFFFF" align="center"> : </td>
					<td width="142"><center><input disabled name="id_kamar" type="text" class="form" value="<?php echo $data['id_kamar'];?>" required="required"/></center></td>
				</tr>
				<tr>
					<td width="194" bgcolor="#FFFFFF"><center>
						Jenis Kamar
					</center></td>
					<td width="9" bgcolor="#FFFFFF" align="center"> : </td>
					<td width="142">
					<center>
					<select name="jenis_kamar" class="list">
						<optgroup label="Jenis Kamar">

						<option value="Standard" <?php if ($data['jenis_kamar'] == "Standard") {?> selected <?php } else ?>>Standard</option>
						<option value="Deluxe" <?php if ($data['jenis_kamar'] == "Deluxe") {?> selected <?php } else ?>>Deluxe</option>
						<option value="Superior" <?php if ($data['jenis_kamar'] == "Superior") {?> selected <?php } else ?>>Superior</option>
						<option value="VIP" <?php if ($data['jenis_kamar'] == "VIP") {?> selected <?php } else ?>>VIP</option>
					</select>
					</center>
					</td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">
						<center>
						Deskripsi
						</center>
					</td>
					<td bgcolor="#FFFFFF" align="center"> : </td>
					<td><center><input placeholder="Cth: Free Wifi, Non Smoking Room." name="deskripsi" type="text" class="form" value="<?php echo $data['deskripsi'];?>"  required="required"/></center></td>
				</tr>
					<td width="194" bgcolor="#FFFFFF">
						<center>
						 Harga Sewa/malam
						</center>
					</td>
					<td width="9" bgcolor="#FFFFFF" align="center"> : </td>
					<td width="142"><center><input placeholder="Input Harga Sewa per malam" name="harga_sewa" value="<?php echo $data['harga_sewa'];?>"  type="text" class="form" required="required"/></center></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">
						<center>
						Diskon
						</center>
					</td>
				<td bgcolor="#FFFFFF" align="center"> : </td>
				<td><center><input placeholder="Persen Diskon. Cth: 10" name="diskon" value="<?php echo $data['diskon'];?>"  type="text" class="form" required="required"/></center>
				</td>
				</tr>
          <tr>
          <td colspan="2" align="right" valign="middle">
          <input type="submit" class="t_submit" value="SIMPAN" />
          </td>
        	<td align="left" valign="middle">

            <input name="button_reset" type="reset" class="t_submit" id="button_reset" value="RESET" />
          </td>
          </tr>
    </table></form>


    </center>



</div>

</div>



<?php include ("footer.php"); ?>
</body>
</html>
<?php
}
else{echo"<script>alert ('Anda Tidak Bisa Mengakses Halaman Ini, Silahkan Login Dahulu');window.location='index.php';</script>";}?>
