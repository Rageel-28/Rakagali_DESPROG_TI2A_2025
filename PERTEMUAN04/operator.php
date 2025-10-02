<?php
$a = 10;
$b = 5;

// --- OPERATOR ARITMATIKA ---
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "--- OPERATOR ARITMATIKA --- <br>";
echo "Nilai a: $a, Nilai b: $b <br><br>";

echo "Hasil Tambah ($a + $b): $hasilTambah <br>";
echo "Hasil Kurang ($a - $b): $hasilKurang <br>";
echo "Hasil Kali ($a * $b): $hasilKali <br>";
echo "Hasil Bagi ($a / $b): $hasilBagi <br>";
echo "Sisa Bagi ($a % $b): $sisaBagi <br>";
echo "Hasil Pangkat ($a ** $b): $pangkat <br>";

echo "<br>--- OPERATOR PERBANDINGAN --- <br>";

// --- OPERATOR PERBANDINGAN ---
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "\$a ($a) sama dengan \$b ($b): "; var_dump($hasilSama); echo "<br>";
echo "\$a ($a) tidak sama dengan \$b ($b): "; var_dump($hasilTidakSama); echo "<br>";
echo "\$a ($a) lebih kecil dari \$b ($b): "; var_dump($hasilLebihKecil); echo "<br>";
echo "\$a ($a) lebih besar dari \$b ($b): "; var_dump($hasilLebihBesar); echo "<br>";
echo "\$a ($a) lebih kecil atau sama dengan \$b ($b): "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "\$a ($a) lebih besar atau sama dengan \$b ($b): "; var_dump($hasilLebihBesarSama); echo "<br>";

echo "<br>--- OPERATOR LOGIKA --- <br>";

// --- OPERATOR LOGIKA (Penambahan output) ---
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Catatan: Dalam Operator Logika, semua nilai selain 0 diinterpretasikan sebagai TRUE.
// Jadi $a=10 dan $b=5 keduanya diinterpretasikan sebagai TRUE.

echo "\$a (10) AND \$b (5) : "; var_dump($hasilAnd); echo "<br>";
echo "\$a (10) OR \$b (5) : "; var_dump($hasilOr); echo "<br>";
echo "NOT \$a (10) : "; var_dump($hasilNotA); echo "<br>";
echo "NOT \$b (5) : "; var_dump($hasilNotB); echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

// Asumsi nilai awal: $a = 10; $b = 5;

echo "<br>--- OPERATOR ASSIGNMENT GABUNGAN --- <br>";

// 1. $a += $b;
echo "Nilai awal \$a: 10 <br>";
$a += $b; // $a = 10 + 5 = 15
echo "Setelah \$a += \$b (Tambah dan Tugaskan): \$a = $a <br>";

// 2. $a -= $b;
$a -= $b; // $a = 15 - 5 = 10
echo "Setelah \$a -= \$b (Kurang dan Tugaskan): \$a = $a <br>";

// 3. $a *= $b;
$a *= $b; // $a = 10 * 5 = 50
echo "Setelah \$a *= \$b (Kali dan Tugaskan): \$a = $a <br>";

// 4. $a /= $b;
$a /= $b; // $a = 50 / 5 = 10
echo "Setelah \$a /= \$b (Bagi dan Tugaskan): \$a = $a <br>";

// 5. $a %= $b;
$a %= $b; // $a = 10 % 5 = 0
echo "Setelah \$a %= \$b (Modulo dan Tugaskan): \$a = $a <br>";

$a = 10;      // Tipe: Integer
$b = "10";    // Tipe: String

// --- OPERATOR IDENTITAS ---
$hasilIdentik = $a === $b;   // Cek nilai DAN tipe data
$hasilTidakIdentik = $a !== $b; // Cek nilai ATAU tipe data berbeda

echo "--- OPERATOR IDENTITAS --- <br>";
echo "Nilai \$a: "; var_dump($a);
echo "Nilai \$b: "; var_dump($b);
echo "<br>";

echo "\$a (\$a) IDENTIK dengan \$b (\$b) (===) : "; 
var_dump($hasilIdentik); // Hasilnya bool(false) karena tipenya berbeda
echo "<br>";

echo "\$a (\$a) TIDAK IDENTIK dengan \$b (\$b) (!==) : "; 
var_dump($hasilTidakIdentik); // Hasilnya bool(true) karena tipenya berbeda
echo "<br>";
?>