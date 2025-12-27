
<?php
/**
 * FILE: views/employee_list.php
 * FUNGSI: Menampilkan daftar semua karyawan (Read All)
 */
include 'views/header.php';
?>

<h2>Data Karyawan</h2>

<?php if (isset($_GET['message'])): ?>
    <?php if ($_GET['message'] == 'created'): ?>
        <div class="alert alert-success">Data karyawan berhasil ditambahkan!</div>
    <?php elseif ($_GET['message'] == 'updated'): ?>
        <div class="alert alert-success">Data karyawan berhasil diperbarui!</div>
    <?php elseif ($_GET['message'] == 'deleted'): ?>
        <div class="alert alert-success">Data karyawan berhasil dihapus!</div>
    <?php endif; ?>
<?php endif; ?>

<a href="index.php?action=create" class="btn btn-primary" style="margin-bottom: 1rem;">+ Tambah Karyawan Baru</a>

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Departemen</th>
            <th>Jabatan</th>
            <th>Gaji (Rp)</th>
            <th>Tgl. Gabung</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($employees->rowCount() > 0): 
            while ($row = $employees->fetch(PDO::FETCH_ASSOC)):
                extract($row);
        ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></td>
                <td><?php echo htmlspecialchars($email); ?></td>
                <td><?php echo htmlspecialchars($department); ?></td>
                <td><?php echo htmlspecialchars($position); ?></td>
                <td><?php echo number_format($salary, 0, ',', '.'); ?></td>
                <td><?php echo date('d-m-Y', strtotime($hire_date)); ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $id; ?>" class="btn btn-edit">Edit</a>
                    <a href="index.php?action=delete&id=<?php echo $id; ?>" class="btn btn-delete" 
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
        <?php 
            endwhile;
        else:
        ?>
            <tr>
                <td colspan="8" style="text-align: center;">Belum ada data karyawan.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include 'views/footer.php'; ?>

