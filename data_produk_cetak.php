<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px">
<div style="margin-left:20px"></div>

<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><div align="center"><font size="7">PT. Maju Sejahtera</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jl. Kesambi No.202, Kesambi, Kota Cirebon - No. Telp : 081234567891</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Mobil</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<th style="border-right: 1px solid gray">No.</th>
		<th style="border-right: 1px solid gray">Kode Mobil</th>
		<th style="border-right: 1px solid gray">Merk Mobil</th>
		<th style="border-right: 1px solid gray">Harga</th>
		<th style="border-right: 1px solid gray">Tahun</th>
		<th style="border-right: 1px solid gray">Plat Nomer</th>
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con,"Select * from daftar_mobil");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[kd_mobil]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[merk]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[harga]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[tahun]"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[plat]"; ?></td>
		</tr>
	<?php $no++;	}
	?>
</table>

<p>&nbsp;</p>

<table align="right" cellpadding="0" cellspacing="0">
	<tr><td>Cirebon, <?php echo date("d F Y") ?></td></tr>
	<tr><td>Direktur PT. Maju Sejahtera
	<p><img src="Image/ttd.png" width="30%"></p>
	<u>Syamsuddin, M.Pd</u>
	</td></tr>
</table>




</body>