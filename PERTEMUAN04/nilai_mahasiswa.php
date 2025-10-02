<?php
// Data nilai siswa
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Hitung total nilai
$totalNilai = 0;
foreach ($nilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

// Hitung rata-rata
$rataRata = $totalNilai / count($nilaiSiswa);

echo "<h3>Rata-rata nilai kelas: $rataRata</h3>";
echo "<h3>Daftar siswa dengan nilai di atas rata-rata:</h3>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

// Cek siapa saja yang nilainya di atas rata-rata
foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "<tr><td>{$siswa[0]}</td><td>{$siswa[1]}</td></tr>";
    }
}

echo "</table>";
?>

