<?php
/**
* FILE: views/employee_overview.php
* FUNGSI: Menampilkan ringkasan global (COUNT, SUM, AVG)
*/
include 'views/header.php';
?>

<h2>3. Ringkasan Karyawan Global</h2>
<p style="margin-bottom: 2rem; color: #666;">
Ringkasan total karyawan, total gaji, dan rata-rata masa kerja (Menggunakan COUNT(), SUM(), AVG() sebagai subquery skalar).
</p>

<?php if ($overview): ?>

<div class="dashboard-cards" style="grid-template-columns: repeat(3, 1fr);">
    <div class="card" style="border-left: 4px solid #667eea;">
        <h3>Total Karyawan (COUNT)</h3>
        <div class="number"><?php echo number_format($overview['total_employees']); ?></div>
    </div>
    <div class="card" style="border-left: 4px solid #27ae60;">
        <h3>Total Gaji Bulanan (SUM)</h3>
        <div class="number" style="font-size: 1.5rem;">Rp <?php echo number_format($overview['total_monthly_salary'], 0, ',', '.'); ?></div>
        <p style="font-size: 0.9rem; color: #666;">Total biaya gaji yang dikeluarkan per bulan.</p>
    </div>
    <div class="card" style="border-left: 4px solid #f39c12;">
        <h3>Rata-rata Masa Kerja (AVG)</h3>
        <div class="number"><?php echo $overview['avg_tenure_years']; ?> tahun</div>
        <p style="font-size: 0.9rem; color: #666;">Rata-rata masa kerja semua karyawan.</p>
    </div>
</div>

<?php else: ?>
    <div class="alert alert-error">Data ringkasan karyawan gagal dimuat.</div>
<?php endif; ?>

<?php include 'views/footer.php'; ?>