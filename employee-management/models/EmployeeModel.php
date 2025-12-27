<?php
/**
* FILE: models/EmployeeModel.php
* FUNGSI: Berisi semua operasi database untuk tabel employees
*/
class EmployeeModel {
private $conn;
private $table_name = "employees";

// Constructor
public function __construct($db) {
$this->conn = $db;
}

// METHOD 1: Read semua employees
public function getAllEmployees() {
$query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}

// METHOD 2: Create employee baru
public function createEmployee ($data) {
$query = "INSERT INTO " . $this->table_name . " (first_name, last_name,
 email, department, position, salary, hire_date) VALUES (:first_name, :last_name,
 :email, :department, :position, :salary, :hire_date)";
$stmt = $this->conn->prepare($query);
// Bind parameters untuk keamanan (mencegah SQL injection)
$stmt->bindParam(":first_name", $data['first_name']);
$stmt->bindParam(":last_name", $data['last_name']);
$stmt->bindParam(":email", $data['email']);
$stmt->bindParam(":department", $data['department']);
$stmt->bindParam(":position", $data['position']);
$stmt->bindParam(":salary", $data['salary']);
$stmt->bindParam(":hire_date", $data['hire_date']);
return $stmt->execute();
}

// METHOD 3: Update employee
public function updateEmployee($id, $data) {
$query = "UPDATE " . $this->table_name .
" SET first_name = :first_name, last_name = :last_name,
email = :email, department = :department,
position = :position, salary = :salary, hire_date = :hire_date
WHERE id = :id";
$stmt = $this->conn->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":first_name", $data['first_name']);
$stmt->bindParam(":last_name", $data['last_name']);
$stmt->bindParam(":email", $data['email']);
$stmt->bindParam(":department", $data['department']);
$stmt->bindParam(":position", $data['position']);
$stmt->bindParam(":salary", $data['salary']);
$stmt->bindParam(":hire_date", $data['hire_date']);
return $stmt->execute();
}

// METHOD 4: Delete employee
public function deleteEmployee($id) {
$query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
$stmt = $this->conn->prepare($query);
$stmt->bindParam(":id", $id);
return $stmt->execute();
}

// METHOD 5: Get single employee by ID
public function getEmployeeById($id) {
$query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
$stmt = $this->conn->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();
return $stmt->fetch(PDO::FETCH_ASSOC);
}

// METHOD 6: Get data dari VIEW employee_summary (Tidak berubah)
public function getEmployeeSummary() {
$query = "SELECT * FROM employee_summary";
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}

// METHOD 7: Get data dari VIEW department_stats (Tidak berubah)
public function getDepartmentStats() {
$query = "SELECT * FROM department_stats";
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}

// METHOD 8: Get data dari MATERIALIZED VIEW dashboard_summary (Tidak berubah)
public function getDashboardSummary() {
$query = "SELECT * FROM dashboard_summary";
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt->fetch(PDO::FETCH_ASSOC);
}

// METHOD 9: Refresh materialized view (Tidak berubah)
public function refreshDashboard() {
$query = "REFRESH MATERIALIZED VIEW dashboard_summary";
$stmt = $this->conn->prepare($query);
return $stmt->execute();
}

// ------------------------------------------------------------------
// TUGAS 1: METHOD BARU
// ------------------------------------------------------------------

// TUGAS 1.1: Statistik Gaji per Departemen (AVG, MIN, MAX)
public function getSalaryStats() {
    $query = "SELECT
        department,
        ROUND(AVG(salary), 0) AS avg_salary,
        MAX(salary) AS max_salary,
        MIN(salary) AS min_salary
    FROM employees
    GROUP BY department
    ORDER BY avg_salary DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

// TUGAS 1.2: Statistik Masa Kerja (CASE WHEN, COUNT) - DIPERBAIKI MENGGUNAKAN SUBQUERY
public function getTenureStats() {
    $query = "SELECT
        tenure_group,
        total_employees
    FROM (
        SELECT
            CASE
                WHEN EXTRACT(YEAR FROM AGE(CURRENT_DATE, hire_date)) >= 3 THEN 'Senior (>3 Tahun)'
                WHEN EXTRACT(YEAR FROM AGE(CURRENT_DATE, hire_date)) >= 1 THEN 'Middle (1-3 Tahun)'
                ELSE 'Junior (<1 Tahun)'
            END AS tenure_group,
            -- Tambahkan kolom urutan sementara
            CASE
                WHEN EXTRACT(YEAR FROM AGE(CURRENT_DATE, hire_date)) >= 3 THEN 1
                WHEN EXTRACT(YEAR FROM AGE(CURRENT_DATE, hire_date)) >= 1 THEN 2
                ELSE 3
            END AS tenure_order,
            COUNT(*) AS total_employees
        FROM employees
        GROUP BY 1, 2 -- Group berdasarkan tenure_group dan tenure_order
    ) AS grouped_tenure
    ORDER BY tenure_order";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

// TUGAS 1.3: Ringkasan Karyawan Global (COUNT, SUM, AVG)
public function getEmployeeOverview() {
    // Menggunakan subquery skalar untuk memastikan hanya 1 baris hasil
    $query = "SELECT
        (SELECT COUNT(*) FROM employees) AS total_employees,
        (SELECT SUM(salary) FROM employees) AS total_monthly_salary,
        (SELECT ROUND(AVG(EXTRACT(YEAR FROM AGE(CURRENT_DATE, hire_date))), 1) FROM employees) AS avg_tenure_years
    FROM generate_series(1, 1)";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
?>