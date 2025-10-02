<?php
// --- Daftar nilai siswa ---
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "<b>Daftar nilai siswa yang lulus:</b> " . implode(', ', $nilaiLulus) . "<br><br>";
echo "<hr>";

// --- Daftar karyawan dan pengalaman ---
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<b>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun:</b> " . implode(', ', $karyawanPengalamanLimaTahun) . "<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<h3>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah:</h3>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "<tr>";
    echo "<td>{$nilai[0]}</td>";
    echo "<td>{$nilai[1]}</td>";
    echo "</tr>";
}

echo "</table>";
?>

