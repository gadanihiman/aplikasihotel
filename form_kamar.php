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

<div id="content">

<br />
<br />
<div id="artikel">
  <center>
<p> <font size="+2">
<strong>Input Kamar Baru</strong></font>
</p>
</center>
<br />

<hr color="#CCCCCC" />
<p>&nbsp;</p>
<p><br />
</p>
<center><form action="sc_kamar.php" method="post">
      <table width="80%" height="290" border="0" align="center" >
	        <tr>
	          <td width="194" bgcolor="#FFFFFF">
							<center>
	          	No Kamar
	          	</center>
						</td>
						<td width="9" bgcolor="#FFFFFF" align="center"> : </td>
	          <td width="142"><center><input placeholder="Input Nomor Kamar" name="id_kamar" type="text" class="form" required="required"/></center></td>
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
							<option value="Standard">Standard</option>
							<option value="Deluxe">Deluxe</option>
							<option value="Superior">Superior</option>
							<option value="VIP">VIP</option>
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
            <td><center><input placeholder="Cth: Free Wifi, Non Smoking Room." name="deskripsi" type="text" class="form" required="required"/></center></td>
          </tr>
	          <td width="194" bgcolor="#FFFFFF">
							<center>
		           Harga Sewa/malam
						 	</center>
						</td>
          	<td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          	<td width="142"><center><input placeholder="Input Harga Sewa per malam" name="harga_sewa" type="text" class="form" required="required"/></center></td>
          </tr>
          <tr>
	          <td bgcolor="#FFFFFF">
							<center>
	          	Diskon
	          	</center>
						</td>
          <td bgcolor="#FFFFFF" align="center"> : </td>
          <td><center><input placeholder="Persen Diskon. Cth: 10" name="diskon" type="text" class="form" required="required"/></center>
          </td>
          </tr>

          <tr bgcolor="#FFFFFF">
            <td colspan="3" align="center" valign="middle">
             <br /> <hr color="#CCCCCC" /> <br />
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
