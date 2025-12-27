<?php
/**
 * FILE: views/employee_form.php
 * FUNGSI: Form untuk Create dan Update data karyawan
 */

// Menentukan apakah mode ini adalah 'Create' atau 'Edit'
$is_edit = isset($employee);

// Set nilai default untuk form
$id = $is_edit ? $employee['id'] : '';
$first_name = $is_edit ? $employee['first_name'] : '';
$last_name = $is_edit ? $employee['last_name'] : '';
$email = $is_edit ? $employee['email'] : '';
$department = $is_edit ? $employee['department'] : '';
$position = $is_edit ? $employee['position'] : '';
// Format gaji untuk ditampilkan di form (tanpa koma desimal)
$salary = $is_edit ? number_format($employee['salary'], 0, ',', '.') : ''; 
$hire_date = $is_edit ? $employee['hire_date'] : date('Y-m-d');
$form_title = $is_edit ? "Edit Karyawan (ID: {$id})" : "Tambah Karyawan Baru";
$form_action = $is_edit ? "index.php?action=edit&id={$id}" : "index.php?action=create";

include 'views/header.php';
?>

<h2><?php echo $form_title; ?></h2>

<?php if (isset($error) && $error != ''): ?>
    <div class="alert alert-error"><?php echo $error; ?></div>
<?php endif; ?>

<form action="<?php echo $form_action; ?>" method="POST">
    
    <div class="form-group">
        <label for="first_name" class="form-label">Nama Depan</label>
        <input type="text" id="first_name" name="first_name" class="form-input" 
               value="<?php echo htmlspecialchars($first_name); ?>" required>
    </div>
    
    <div class="form-group">
        <label for="last_name" class="form-label">Nama Belakang</label>
        <input type="text" id="last_name" name="last_name" class="form-input" 
               value="<?php echo htmlspecialchars($last_name); ?>" required>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-input" 
               value="<?php echo htmlspecialchars($email); ?>" required>
    </div>

    <div class="form-group">
        <label for="department" class="form-label">Departemen</label>
        <select id="department" name="department" class="form-input" required>
            <option value="">-- Pilih Departemen --</option>
            <?php 
            $departments = ['IT', 'HR', 'Finance', 'Marketing', 'Operations'];
            foreach ($departments as $dept) {
                $selected = ($dept == $department) ? 'selected' : '';
                echo "<option value=\"{$dept}\" {$selected}>{$dept}</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="position" class="form-label">Jabatan</label>
        <input type="text" id="position" name="position" class="form-input" 
               value="<?php echo htmlspecialchars($position); ?>" required>
    </div>

    <div class="form-group">
        <label for="salary" class="form-label">Gaji (Rp.)</label>
        <input type="text" id="salary" name="salary" class="form-input" 
               value="<?php echo htmlspecialchars($salary); ?>" 
               placeholder="Contoh: 8500000 (tanpa titik/koma)" required>
    </div>
    
    <div class="form-group">
        <label for="hire_date" class="form-label">Tanggal Gabung</label>
        <input type="date" id="hire_date" name="hire_date" class="form-input" 
               value="<?php echo htmlspecialchars($hire_date); ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">
        <?php echo $is_edit ? 'Simpan Perubahan' : 'Tambah Karyawan'; ?>
    </button>
    <a href="index.php?action=list" class="btn btn-delete">Batal</a>
</form>

<?php include 'views/footer.php'; ?>

