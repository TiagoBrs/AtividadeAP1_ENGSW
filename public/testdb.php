<?php
require_once '../config/database.php';

// Tenta conectar
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica erro
if ($conn->connect_error) {
    die("<h2>❌ Falha na conexão: " . $conn->connect_error . "</h2>");
}

echo "<h2>✅ Conexão com o banco de dados bem-sucedida!</h2>";

$conn->close();
