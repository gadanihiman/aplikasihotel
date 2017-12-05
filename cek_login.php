<?php session_start(); 
include("koneksi.php");
$username=$_POST['username']; 
$password=$_POST['password']; 

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' "; 
		$exec = mysql_query($query);
		
		$cek = mysql_num_rows($exec); 
		$row = mysql_fetch_array($exec);
		
$nama = $row['nama'];
$akses = $row['akses'];
$username = $row['username'];


if($cek){ 
$_SESSION['nama']=$nama;
$_SESSION['username']=$username; 
$_SESSION['akses']=$akses;


header('location:home.php');} 
else{ header('location:index.php');}

?>
