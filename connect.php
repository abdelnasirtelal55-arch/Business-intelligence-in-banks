
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank_system";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed");
}
echo "bien connecter";
$conn->set_charset("utf8mb4");
?>
 