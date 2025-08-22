<?php
require_once __DIR__ . '/../core/Database.php';

class Login {
    public static function getByEmail(string $email) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT * FROM Admin WHERE email = :email ");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
