<div id="menu">
<div id="logo">
<table width="218">
<tr>
<td width="208"><a href="home.php">HOTEL |<font color="#009999"><em>XYZ</em></font></a></td>
</tr>
</table>
</div>

<div id="menu_menu">
<ul>
<a href="home.php" class="alink">
<li>Home</li>
</a>
<a href="form_kamar.php" class="alink"><li>Kamar</li>

</a>

<?php

if($akses != "manajer")
            {
              echo '';
            }
            elseif($akses == "manajer")
            {

			 echo '<a href="index_penyewaan.php" class="alink"><li>Penyewaan</li>
</a>';
            }
?>

<a href="logout.php" class="alink"><li>Logout</li>
</a>

</ul>
</div>
</div>
