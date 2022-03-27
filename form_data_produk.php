<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from daftar_mobil where id_mobil = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA</h3>
</div>
	<div class="form-group">
	<label>Kode Mobil :</label>
	<input type="hidden" name="id_mobil" class="form-control" value="<?php echo"$rs[id_mobil]" ?>">
	<input type="text" name="kd_mobil" class="form-control" value="<?php echo"$rs[kd_mobil]" ?>">
	</div>

	<div class="form-group">
	<label>Merk Mobil :</label>
	<input type="text" name="merk" class="form-control" value="<?php echo"$rs[merk]" ?>">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

	<div class="form-group">
	<label>Tahun :</label>
	<input type="text" name="tahun" class="form-control" value="<?php echo"$rs[tahun]" ?>">
	</div>

	<div class="form-group">
	<label>Plat nomer :</label>
	<input type="text" name="plat" class="form-control" value="<?php echo"$rs[plat]" ?> ">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update daftar_mobil set kd_mobil='$_POST[kd_mobil]', merk='$_POST[merk]', harga='$_POST[harga]', tahun='$_POST[tahun]', plat='$_POST[plat]' where id_mobil='$_POST[id_mobil]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='data_produk.php'; </script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA PRODUK</h3>
</div>
	<div class="form-group">
	<label>Kode Mobil :</label>
	<input type="text" name="kd_mobil" class="form-control">
	</div>

	<div class="form-group">
	<label>Merk mobil :</label>
	<input type="text" name="merk" class="form-control">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Tahun :</label>
	<input type="text" name="tahun" class="form-control">
	</div>

	<div class="form-group">
	<label>Plat Nomer :</label>
	<input type="text" name="plat" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into daftar_mobil (kd_mobil, merk, harga, tahun, plat) values ('$_POST[kd_mobil]', '$_POST[merk]','$_POST[harga]','$_POST[tahun]','$_POST[plat]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_produk'; </script>";
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






