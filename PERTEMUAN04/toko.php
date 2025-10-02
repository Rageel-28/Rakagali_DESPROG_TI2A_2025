<?php
// Harga produk
$hargaProduk = 120000;

// Diskon 20% jika harga > 100.000
$diskon = 0;
if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
}

// Hitung harga akhir
$hargaAkhir = $hargaProduk - $diskon;

// Tampilkan hasil
echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.');
?>
