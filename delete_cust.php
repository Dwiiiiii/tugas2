<?php
include"koneksi.php";
mysqli_query($con,"delete from pesanan where id_mobil = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_customer.php'; </script>";

?>