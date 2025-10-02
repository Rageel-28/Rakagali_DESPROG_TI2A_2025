<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
// Penambahan <br>
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>"; 

$benar = true;
$salah = false;
// Perbaikan $Salah menjadi $salah dan penambahan <br>
echo "variabel benar: $benar, Variabel salah: $salah.<br>"; 

define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);

// Perbaikan sintaks (penutup ") dan penambahan <br>
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";
?>