<?php session_start();
// Turn off all error reporting
error_reporting(0);
if(ISSET($_SESSION['username']))
{header('location:home.php');}
else{
include "koneksi.php";
?>
<html>
<head>
<link rel="stylesheet"type="text/css"
href="style2/style.css"/>
<title>Hotel XYZ</title>
<style type="text/css">
<!--
.gambar {

	width:185px;
	height:25px;
	background-color:#fff;

	border: solid 2px #099;
	cursor:pointer;
	margin-left:60px;
	}
.gambar:hover {
	border: solid 2px #069;
	transition:all 1s;
}
.style5 {
	font-size: 40;
	font-family:;
	color: #FFF;
}

.style6 {border-bottom:2px #000; font:26pt "Arial"; padding-bottom:0px; display: block;}
.style7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFF;
}
.style8 {font-size: 16px}
.style9 {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	width:270px;
	height:35px;
	font-size:15px;
	border:#CCC solid 1px;
	padding-left:10px;
	}
	.style9:focus {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	width:270px;
	height:35px;
	font-size:15px;
	border:#0CF solid 1px;
	padding-left:10px;
	}
.style10 {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	width:100px;
	height:25px;
	color:#FFF;
	background-color:#069;
	border:#000;
	cursor:pointer;
	}
.style11 {
	width:15px;
	height:15px;
	cursor:pointer;
	}
.style12 {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	width:140px;
	height:30px;
	color:#FFF;
	background-color:#396;
	border:#000;
	cursor:pointer;
	}
	.h_p {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	width:200px;
	height:35px;
	font-size:15px;
	border:#CCC solid 1px;
	padding-left:10px;
	}
	.style16 {
	border-radius:2px;
	width:80px;
	height:25px;
	background-color:#063;
	color:fff;
	border:#000;
	cursor:pointer;
	margin-right:10px;
	}
	.style16:hover {
		background-color:#033;
		transition:all 1s;
	}
-->
</style>
</head>

<body>

<div id="logo">

<table width="385" align="center">
<tr>
<th width="375" class="style5" align="center">
  Hotel XYZ</th>
</tr>
</table>
</div>
<div id="content">
<div id="daftar">
<br><br><br><br>
<form action="cek_login.php" method="post">
    <table width="86%" border="0" align="center" >
      <tr>
        <td width="296" height="47"><center><input name="username" type="text" class="style9" size="20" placeholder="Username"></center></td>
      </tr>
      <tr>
        <th height="50"><center><input name="password" type="password" class="style9" size="20" placeholder="Password"></center></th>
      </tr>

    </table>

<table width="76%" height="36" border="0" align="center">
<tr>
<center>
<td width="49%" height="32" align="right">
<input name="Login" type="submit" class="style10" value="Login">
  </td>
  <td width="51%" height="32" align="center">

  <input name="button_reset" type="reset" class="style10" id="button_reset" value="Reset" />
  </td></center>
</tr>
</table>
  </form>
  <br><br><br><br>



<br>
</div>
<div id="login">
<table width="403" height="125" border="0">
  <tr>
    <td width="397" height="121"><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="6px" color="#001C37"> Do your best, Talk less do more !</font></td>
    </tr>
</table>



</div>
</div>
<div id="footer">
<font color="#666666">BETA. Created by <a href="https://www.youtube.com/channel/UCwaTCtHBjbF3HEAXQOSsL-A">Gadani Himan Gurusinga</a>. 2015 Batam, Indonesia.
</font>
</div>
<?php };?>
</body>
</html>
