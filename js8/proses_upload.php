<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads/"; // Mengganti ke folder 'uploads' untuk gambar

// --- AWAL PERUBAHAN: Menambahkan Aturan Validasi ---
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5 * 1024 * 1024; // 5MB (Sama seperti langkah 3)
// --- AKHIR PERUBAHAN ---

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Cek apakah ada file yang diunggah (sedikit modifikasi untuk lebih aman)
if (isset($_FILES['files']) && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName); // Pakai basename() untuk keamanan
        
        // --- AWAL PERUBAHAN: Mengambil info validasi ---
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['files']['size'][$i];
        $tmpName = $_FILES['files']['tmp_name'][$i];
        // --- AKHIR PERUBAHAN ---

        // --- AWAL PERUBAHAN: Blok Validasi ---
        // Periksa setiap file: apakah tipe dan ukurannya diizinkan?
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            
            // Pindahkan HANYA JIKA file valid
            if (move_uploaded_file($tmpName, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                // Bonus: Tampilkan thumbnail seperti langkah sebelumnya
                echo '<img src="' . $targetFile . '" width="200"><br><br>';
            } else {
                echo "Gagal mengunggah file $fileName (error saat memindahkan).<br>";
            }
        } else {
            // Beri pesan error jika file ditolak oleh validasi
            echo "File $fileName ditolak. (Tipe file: $fileType, Ukuran: $fileSize).<br>Hanya .jpg, .jpeg, .png, .gif & maks 5MB yang diizinkan.<br><br>";
        }
        // --- AKHIR PERUBAHAN ---
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>