<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $servername = $_ENV['DB_SERVERNAME'];
// $username = $_ENV['DB_USERNAME'];
// $password = $_ENV['DB_PASSWORD'];
// $dbname = $_ENV['DB_NAME'];

$servername = getenv('DB_SERVERNAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

// Debug output
// echo "Servername: " . $servername . "<br>";
// echo "Username: " . $username . "<br>";
// echo "Password: " . $password . "<br>";
// echo "Database Name: " . $dbname . "<br>";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil!";
?>
