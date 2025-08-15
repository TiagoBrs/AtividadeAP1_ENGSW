<?php
// Configuração do banco de dados MySQL
define('DB_HOST', '18.228.17.85'); // IP ou hostname
define('DB_USER', 'Database');     // Usuário do MySQL
define('DB_NAME', 'Cadastro');         // Nome do banco de dados
define('DB_PASS', 'database123');  // Senha do MySQL

// ARQUIVO QUE FAZ A CONEXÃO NO BANCO DE DADOS MYSQL
class Database {
    public static function connect() {
        try {
            $pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}
