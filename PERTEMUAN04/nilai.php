<?php
// Daftar nilai 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan array dari kecil ke besar
sort($nilaiSiswa);

// Hitung jumlah nilai
$jumlahNilai = count($nilaiSiswa);

// Buang 2 terendah dan 2 tertinggi dengan loop
$totalNilai = 0;
for ($i = 2; $i < $jumlahNilai - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

// Hitung rata-rata
$rataRata = $totalNilai / ($jumlahNilai - 4);

// Tampilkan hasil
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah adalah: $totalNilai <br>";
echo "Rata-rata nilai siswa adalah: $rataRata";
?>
