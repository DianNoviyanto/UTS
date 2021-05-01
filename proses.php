<html>
<head>
	<title>Data</title>
</head>
<body>

	<?php
	   $wilayah = $_POST['wilayah'];
	   $jumlah_positif = $_POST['jumlah_positif'];
	   $jumlah_dirawat = $_POST['jumlah_dirawat'];
	   $jumlah_sembuh = $_POST['jumlah_sembuh'];
	   $jumlah_meninggal = $_POST['jumlah_meninggal'];
	   $nama = $_POST['nama'];
	   $nim = $_POST['nim'];

	   date_default_timezone_set('Asia/Jakarta');
	   $sekarang = getdate();
	   $bulan = $sekarang['month'];
	   $hari = $sekarang['mday'];
	   $tahun = $sekarang['year'];
	   $jam = $sekarang['hours'];
	?>
	<center>
	Data Pemantauan Covid19 Wilayah <?php echo $wilayah ?>
	<br>Per <?php echo "$hari $bulan $tahun "; ?> <?php echo date('h:i:s a'); ?>
	<br><?php echo $nama ?>/<?php echo $nim ?>
	<table border="1">
		<tr>
			<td> Positif</td>
			<td> Dirawat</td>
			<td> Sembuh</td>
			<td> Meninggal</td>
		</tr>
		<tr>
			<td> <?php echo $jumlah_positif ?> </td>
			<td> <?php echo $jumlah_dirawat ?> </td>
			<td> <?php echo $jumlah_sembuh ?> </td>
			<td> <?php echo $jumlah_meninggal ?> </td>
		</tr>
</center>
</table>
</body>
</html>