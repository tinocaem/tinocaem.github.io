<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php var_dump($user); ?>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	<?php

//buka file rtf
$template = "assets/template.rtf";
$handle = fopen($template, "r+");
$hasilbaca = fread($handle, filesize($template));
fclose($handle);
//nilai yang akan dituliskan dalam template
//pada praktek sebenarnya anda bisa mengambil data dari database
$data_nama = 'TINO BAMBANG';
$data_alamat = 'Jakarta, Indonesia';
$data_pekerjaan = 'Jakarta, Indonesia';
//tuliskan data dalam template
$hasilbaca = str_replace('data_nama', $data_nama, $hasilbaca);
$hasilbaca = str_replace('data_alamat', $data_alamat, $hasilbaca);
$hasilbaca = str_replace('data_pekerjaan', $data_pekerjaan, $hasilbaca);
//membuat file baru dari hasil baca
$hasil = "assets/hasil_laporan.rtf";
$handle = fopen($hasil, "w+");
fwrite($handle, $hasilbaca);
fclose($handle);
//membuka file hasil secara langsung
//header('Location:'.$hasil);
//atau membuka file melalui link
echo '<a href="'.$hasil.'">Hasil</a>'
?>
</body>
</html>
