<?php
/**
* FILE: views/tenure_stats.php
* FUNGSI: Menampilkan jumlah karyawan berdasarkan kelompok masa kerja (tenure).
*/
include 'views/header.php';
?>

<h2>2. Statistik Masa Kerja Karyawan</h2>
<p style="margin-bottom: 2rem; color: #666;">
Total karyawan dikelompokkan berdasarkan Masa Kerja (Menggunakan COUNT() dan CASE WHEN).
</p>

<?php if ($tenure_stats->rowCount() > 0): ?>

<?php
$total_karyawan = 0;
$data_tenure = $tenure_stats->fetchAll(PDO::FETCH_ASSOC);
foreach ($data_tenure as $item) {
    $total_karyawan += $item['total_employees'];
}
?>

<div class="dashboard-cards" style="grid-template-columns: repeat(3, 1fr);">
    <?php foreach ($data_tenure as $item): ?>
        <div class="card" style="border-left: 4px solid #f39c12;">
            <h3><?php echo htmlspecialchars($item['tenure_group']); ?></h3>
            <div class="number"><?php echo $item['total_employees']; ?></div>
            <p style="font-size: 0.9rem; color: #666;">
                (<?php echo number_format(($item['total_employees'] / $total_karyawan) * 100, 1); ?>% dari Total)
            </p>
        </div>
    <?php endforeach; ?>
</div>

<div style="margin-top: 2rem;">
    <h3>Visualisasi Persentase</h3>
    <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <table class="data-table" style="width: 100%;">
            <?php foreach ($data_tenure as $item): ?>
                <?php $percentage = ($item['total_employees'] / $total_karyawan) * 100; ?>
                <tr>
                    <td style="width: 20%;"><?php echo htmlspecialchars($item['tenure_group']); ?></td>
                    <td style="width: 70%; padding: 0;">
                        <div style="background: #f0f0f0; border-radius: 4px; height: 25px;">
                            <div style="
                                background: #667eea; 
                                height: 100%; 
                                border-radius: 4px; 
                                width: <?php echo $percentage; ?>%; 
                                display: flex;
                                align-items: center;
                                padding-left: 10px;
                                color: white;
                                font-weight: bold;
                            ">
                                <?php echo number_format($percentage, 1); ?>%
                            </div>
                        </div>
                    </td>
                    <td style="width: 10%; text-align: right;"><?php echo $item['total_employees']; ?> orang</td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<?php else: ?>
    <div class="alert alert-error">Tidak ada data masa kerja untuk ditampilkan.</div>
<?php endif; ?>

<?php include 'views/footer.php'; ?>