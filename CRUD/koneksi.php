<?php 
$koneksi = mysqli_connect("localhost","root","","akademik_nopal");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>