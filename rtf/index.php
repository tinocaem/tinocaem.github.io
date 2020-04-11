<?php
//buka file rtf
$template = "template.rtf";
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
$hasil = "hasil/hasil_laporan.rtf";
$handle = fopen($hasil, "w+");
fwrite($handle, $hasilbaca);
fclose($handle);
//membuka file hasil secara langsung
//header('Location:'.$hasil);
//atau membuka file melalui link
echo '<a href="'.$hasil.'">Hasil</a>'
?>