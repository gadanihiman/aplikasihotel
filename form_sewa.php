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
<strong>Input Penyewaan</strong></font>
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

<center><form action="sc_sewa.php" method="post">
      <table width="80%" height="290" border="0" align="center" >
        <tr>
					<input name="id_sewa" type="text" hidden="hidden" class="form"/>
          <td width="194" bgcolor="#FFFFFF"><center>
          No. Kamar
          </center></td>
          <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          <td width="142"><center><input name="id_kamar" type="text" disabled="disabled" class="form" value="<?php echo $data['id_kamar'];?>"/>
          <Input type="hidden" name="id_kamar" value="<?php echo $data['id_kamar'];?>"/></center></td>
          </tr>
          <tr>
          <td width="194" bgcolor="#FFFFFF"><center>
          Jenis Kamar
          </center></td>
          <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          <td width="142"><center><input type="text" disabled="disabled" class="form" value="<?php echo $data['jenis_kamar'];?>"/></center></td>
          </tr>
        <tr>
          <td width="194" bgcolor="#FFFFFF"><center>
          Harga Sewa
          </center></td>
          <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          <td width="142"><center><input id="harga_sewa" onkeyup="auto();" type="text" disabled="disabled" class="form" value="<?php echo $data['harga_sewa'];?>"/></center></td>
          </tr>
					<tr>
            <td bgcolor="#FFFFFF"><center>
              Nama Penyewa
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Input Nama Penyewa" name="nama" type="text" class="form"/></center></td>
          </tr>
					<tr>
            <td bgcolor="#FFFFFF"><center>
              No Hp
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Cth: 081364889890" name="hp" type="text" class="form"/></center></td>
          </tr>
          <tr>
            <td width="194" bgcolor="#FFFFFF"><center>
              Karyawan
            </center></td>
            <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
            <td width="142">
            <center>

            <select name="id_kasir" class="list">
            <optgroup label="ID Karyawan">
            <?php
			include ("koneksi.php");
			$sql = mysql_query ("SELECT * FROM admin");
			if(mysql_num_rows($sql) > 0) {
				while($data1 = mysql_fetch_array($sql)) { ?>
				<option value="<?php echo $data1['id_kasir'] ?>"><?php echo $data1['nama'] ?></option>

                <?php } ?>
                <?php } ?>
            </select>
            </center>
            </td>

          </tr>
          <tr>
          <td width="194" bgcolor="#FFFFFF"><center>
          PPN
          </center></td>
          <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          <td width="142"><center><input id="ppn" onkeyup="auto();" type="text" disabled="disabled" class="form" value="<?php echo $data['ppn'];?>"/></center></td>
          </tr>
          <tr>
          <td width="194" bgcolor="#FFFFFF"><center>
          Diskon
          </center></td>
          <td width="9" bgcolor="#FFFFFF" align="center"> : </td>
          <td width="142"><center><input id="diskon" onkeyup="auto();" type="text" disabled="disabled" class="form" value="<?php echo $data['diskon'];?>"/></center></td>
          </tr>
					<tr>
            <td bgcolor="#FFFFFF"><center>
              Tambahan Makanan/Minuman
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Input Total Tambahan Biaya Makanan/Minuman" id="tambahan" onkeyup="auto();" name="tambahan" type="text" class="form" autocomplete="off"/></center></td>
          </tr>
					<tr>
            <td bgcolor="#FFFFFF"><center>
              Laundry Perkilo
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Jumlah Laundry Perkilo" id="laundry" onkeyup="auto();" name="laundry" type="text" class="form" autocomplete="off"/></center></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><center>
              Total
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Total otomatis terinput" id="total" name="total" type="text" class="form" required="required" readonly="readonly"/></center></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><center>
              Tanggal Pembelian
            </center></td>
            <td bgcolor="#FFFFFF" align="center"> : </td>
            <td><center><input placeholder="Input Tanggal Pembelian" name="tanggal" type="datetime-local" class="form"/></center></td>
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
<script>
function auto() {
      var harga_sewa = document.getElementById('harga_sewa').value;
      var tambahan = document.getElementById('tambahan').value;
			var laundry = document.getElementById('laundry').value;
	  	var diskon = document.getElementById('diskon').value;
	  	var ppn = document.getElementById('ppn').value;

	  var result = (((parseInt(harga_sewa) + parseInt(tambahan) + (parseInt(laundry) * 10000)) - ((parseInt(harga_sewa) + parseInt(tambahan) + (parseInt(laundry) * 10000)) * (parseInt(diskon) / 100))) + parseInt(ppn)) ;
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>
</body>
</html>
<?php
}
else{echo"<script>alert ('Anda Tidak Bisa Mengakses Halaman Ini, Silahkan Login Dahulu');window.location='index.php';</script>";}?>
