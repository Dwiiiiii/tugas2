<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from pesanan where id_cust = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA</h3>
</div>
	<div class="form-group">
	<label>Kode Customer :</label>
	<input type="hidden" name="id_cust" class="form-control" value="<?php echo"$rs[id_cust]" ?>">
	<input type="text" name="kd_cust" class="form-control" value="<?php echo"$rs[kd_cust]" ?>">
	</div>

	<div class="form-group">
	<label>Nama :</label>
	<input type="text" name="nama" class="form-control" value="<?php echo"$rs[nama]" ?>">
	</div>

	<div class="form-group">
	<label>Alamat :</label>
	<input type="text" name="alamat" class="form-control" value="<?php echo"$rs[alamat]" ?>">
	</div>

	<div class="form-group">
	<label>Unit :</label>
	<input type="text" name="unit" class="form-control" value="<?php echo"$rs[unit]" ?>">
	</div>

	<div class="form-group">
	<label>Durasi Rental :</label>
	<input type="text" name="plat" class="form-control" value="<?php echo"$rs[durasi]" ?> ">
	</div>

	<div class="form-group">
	<label>Jumlah Pembayaran :</label>
	<input type="text" name="plat" class="form-control" value="<?php echo"$rs[jumlah_pembayaran]" ?> ">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update pesanan set kd_cust='$_POST[kd_cust]', nama_cust='$_POST[nama_cust]', alamat='$_POST[alamat]', unit='$_POST[unit]', durasi='$_POST[durasi], jumlah_pembayaran='$_POST[jumlah_pembayaran]' where id_cust='$_POST[id_cust]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='data_customer.php'; </script>";
}
?>



<?php
}
?>


<?php 
function Input_data(){
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA CUSTOMER</h3>
</div>
	<div class="form-group">
	<label>Kode Customer :</label>
	<input type="text" name="kd_cust" class="form-control">
	</div>

	<div class="form-group">
	<label>Nama Customer :</label>
	<input type="text" name="nama" class="form-control">
	</div>

	<div class="form-group">
	<label>Alamat :</label>
	<input type="text" name="alamat" class="form-control">
	</div>

	<div class="form-group">
	<label>Unit :</label>
	<input type="text" name="unit" class="form-control">
	</div>

	<div class="form-group">
	<label>Durasi :</label>
	<input type="text" name="durasi" class="form-control">
	</div>

	<div class="form-group">
	<label>Jumlah Pembayaran :</label>
	<input type="text" name="jumlah_pembayaran" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into pesanan (kd_cust, nama, alamat, unit, durasi, jumlah_pembayaran) values ('$_POST[kd_cust]', '$_POST[nama]','$_POST[alamat]','$_POST[unit]','$_POST[durasi]','$_POST[jumlah_pembayaran]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_customer'; </script>";
}
?>
<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	Update_data();
}else{
	Input_data();
}
?>






