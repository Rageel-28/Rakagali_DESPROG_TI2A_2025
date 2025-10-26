<?php

// set zona waktu (biar format tanggal konsisten)
date_default_timezone_set('Asia/Jakarta');

// ambil semua field sebagai ARRAY hasil kiriman admin.html
$ids   = $_POST['id']   ?? [];   // contoh: ['20251023104501', ...]
$nama  = $_POST['nama'] ?? [];
$email = $_POST['email'] ?? [];
$jenis = $_POST['jenis'] ?? [];
$judul = $_POST['judul'] ?? [];
$pesan = $_POST['pesan'] ?? [];
$waktu = $_POST['waktu'] ?? [];

// satukan array paralel di atas menjadi 1 array of assoc ($rows)
$rows = [];
$len = min(
  count($ids), count($nama), count($email),
  count($jenis), count($judul), count($pesan), count($waktu)
);
// gunakan min() agar tidak keluar index jika ada perbedaan panjang array
for ($i=0; $i<$len; $i++) {
  $rows[] = [
    'id'    => (string)$ids[$i],
    'nama'  => (string)$nama[$i],
    'email' => (string)$email[$i],
    'jenis' => (string)$jenis[$i],
    'judul' => (string)$judul[$i],
    'pesan' => (string)$pesan[$i],
    'waktu' => (string)$waktu[$i],
  ];
}

// mulai output HTML (tampilan rapi pakai styles.css yang sama)
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hasil Pengolahan (PHP Array)</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-solid">
  <div class="admin-container">
    <div class="admin-header">
      <h1>Hasil Pengolahan (PHP Array)</h1>
      <div class="admin-actions">
        <a class="btn-orange" href="admin.html">← Kembali</a>
      </div>
    </div>

<?php if (!$rows): // jika tidak ada data kiriman ?>
    <div class="empty-box">Tidak ada data yang dikirim.</div>

<?php else:
  

  // 1) urutkan berdasarkan waktu desc (terbaru di atas)
  usort($rows, fn($a,$b)=>strtotime($b['waktu'] ?? '') <=> strtotime($a['waktu'] ?? ''));

  // 2) hitung jumlah per "jenis"
  $counts = array_count_values(
    array_map(fn($x)=>$x['jenis'] ?? '-', $rows)
  );
  // 3) ambil 5 laporan paling baru
  $latest = array_slice($rows, 0, 5);
?>
    <!-- Tabel ringkasan per jenis -->
    <h3>Ringkasan per Jenis</h3>
    <div class="table-wrap" style="margin-bottom:12px">
      <table class="admin-table">
        <thead><tr><th>Jenis</th><th>Jumlah</th></tr></thead>
        <tbody>
          <?php foreach($counts as $k=>$v): ?>
            <tr>
              <td><?= htmlspecialchars($k) ?></td>
              <td><?= (int)$v ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Tabel 5 laporan terbaru -->
    <h3>5 Laporan Terbaru</h3>
    <div class="table-wrap">
      <table class="admin-table">
        <thead>
          <tr>
            <th>ID</th><th>Waktu</th><th>Nama</th><th>Email</th><th>Jenis</th><th>Judul</th><th>Pesan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($latest as $m): ?>
            <tr>
              <td><?= htmlspecialchars($m['id']) ?></td>
              <td><?= htmlspecialchars(date('d M Y H:i', strtotime($m['waktu'] ?? ''))) ?></td>
              <td><?= htmlspecialchars($m['nama']) ?></td>
              <td><?= htmlspecialchars($m['email']) ?></td>
              <td><span class="badge"><?= htmlspecialchars($m['jenis']) ?></span></td>
              <td><?= htmlspecialchars($m['judul']) ?></td>
              <td><?= htmlspecialchars(mb_strimwidth($m['pesan'], 0, 120, '…')) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
<?php endif; // akhir if rows ?>
  </div>
</body>
</html>
