<?php
$totalKursi = 45;
$kursiTerisi = 28;

// 1. Hitung jumlah kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// 2. Hitung persentase kursi yang kosong (dalam bentuk desimal)
$persentaseDesimal = $kursiKosong / $totalKursi;

// 3. Konversi ke persentase dan bulatkan ke 2 angka desimal
$persentaseKosong = round($persentaseDesimal * 100, 2);

echo "--- RESTORAN: PERHITUNGAN PERSENTASE KURSI KOSONG --- <br>";
echo "Total Kursi: $totalKursi <br>";
echo "Kursi Terisi: $kursiTerisi <br>";
echo "-------------------------------------------------------- <br>";
echo "Jumlah Kursi Kosong: $kursiKosong kursi <br>";
echo "Persentase Kursi Kosong: {$persentaseKosong}% <br>"; 
?>