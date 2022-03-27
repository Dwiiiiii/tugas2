<?php
include"koneksi.php";
mysqli_query($con,"delete from daftar_mobil where id_mobil = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_produk.php'; </script>";

?>