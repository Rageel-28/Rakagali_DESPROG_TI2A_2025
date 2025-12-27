<?php
/**
* FILE: views/salary_stats.php
* FUNGSI: Menampilkan statistik Gaji (AVG, MIN, MAX) per departemen.
*/
include 'views/header.php';
?>

<h2>1. Statistik Gaji per Departemen</h2>
<p style="margin-bottom: 2rem; color: #666;">
Rata-rata, gaji tertinggi, dan gaji terendah per departemen (Menggunakan AVG(), MIN(), MAX() dan GROUP BY).
</p>

<?php if ($salary_stats->rowCount() > 0): ?>

<table class="data-table">
    <thead>
        <tr>
            <th>Departemen</th>
            <th>Gaji Rata-rata</th>
            <th>Gaji Tertinggi (MAX)</th>
            <th>Gaji Terendah (MIN)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $salary_stats->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><strong><?php echo htmlspecialchars($row['department']); ?></strong></td>
                <td>Rp <?php echo number_format($row['avg_salary'], 0, ',', '.'); ?></td>
                <td><strong style="color: #27ae60;">Rp <?php echo number_format($row['max_salary'], 0, ',', '.'); ?></strong></td>
                <td><strong style="color: #dc3545;">Rp <?php echo number_format($row['min_salary'], 0, ',', '.'); ?></strong></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php else: ?>
    <div class="alert alert-error">Tidak ada data gaji untuk ditampilkan.</div>
<?php endif; ?>

<?php include 'views/footer.php'; ?>