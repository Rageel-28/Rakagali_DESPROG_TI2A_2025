<?php
// Jumlah poin yang didapat pemain
$poin = 650; // silakan ubah nilainya untuk menguji

// Tampilkan total skor
echo "Total skor pemain adalah: $poin <br>";

// Cek apakah dapat hadiah tambahan
if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>
