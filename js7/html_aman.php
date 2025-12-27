<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
    $email = $_POST['email'];


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Nama: " . $input . "<br>";
        echo "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
    } else {
        echo "<p style='color:red;'>Email tidak valid!</p>";
    }
}
?>