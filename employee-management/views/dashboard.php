
<?php
include 'views/header.php';
?>

<h2>Dashboard Perusahaan</h2>

<?php if (isset($_GET['message']) && $_GET['message'] == 'refreshed'): ?>
    <div class="alert alert-success">
        Data Dashboard berhasil di-refresh!
    </div>
<?php endif; ?>

<div style="margin-bottom: 1rem; padding: 1rem; background: #e7f3ff; border-radius: 5px; border: 1px solid #b3d9ff;">
    <strong>Catatan:</strong> Data di halaman ini diambil dari <strong>Materialized View</strong> (cache data). 
    Untuk mendapatkan data terbaru (real-time), silakan klik tombol "Refresh Dashboard" di navigasi.
</div>

<div class="dashboard-cards">
    <div class="card">
        <h3>Total Karyawan</h3>
        <div class="number"><?php echo $dashboard['total_employees']; ?></div>
        <p style="margin-top: 0.5rem; color: #666;">Dari <?php echo $dashboard['total_departments']; ?> departemen</p>
    </div>

    <div class="card" style="border-left-color: #f39c12;">
        <h3>Rata-rata Gaji Perusahaan</h3>
        <div class="number" style="color: #f39c12;">Rp <?php echo number_format($dashboard['company_avg_salary'], 0, ',', '.'); ?></div>
        <p style="margin-top: 0.5rem; color: #666;">Tertinggi: Rp <?php echo number_format($dashboard['highest_salary'], 0, ',', '.'); ?> | Terendah: Rp <?php echo number_format($dashboard['lowest_salary'], 0, ',', '.'); ?></p>
    </div>

    <div class="card" style="border-left-color: #27ae60;">
        <h3>Rata-rata Masa Kerja</h3>
        <div class="number" style="color: #27ae60;"><?php echo $dashboard['avg_years_service']; ?> Tahun</div>
        <p style="margin-top: 0.5rem; color: #666;">Data dihitung sejak tanggal mulai bekerja</p>
    </div>
    
    <div class="card" style="border-left-color: #3498db;">
        <h3>Total Proyek</h3>
        <div class="number" style="color: #3498db;"><?php echo $dashboard['total_projects']; ?></div>
        <p style="margin-top: 0.5rem; color: #666;">Budget Total: Rp <?php echo number_format($dashboard['total_project_budget'], 0, ',', '.'); ?></p>
    </div>

    <div class="card">
        <h3>Total Budget Proyek</h3>
        <div class="number" style="font-size: 1.5rem;"> 
            Rp <?php echo number_format($dashboard['total_project_budget'], 0, ',', '.'); ?>
        </div>
        <p style="margin-top: 0.5rem; color: #666;"> 
            <?php echo $dashboard['active_projects']; ?> proyek aktif | <?php echo $dashboard['planning_projects']; ?> proyek dalam perencanaan
        </p>
    </div>
</div>

<?php include 'views/footer.php'; ?>

