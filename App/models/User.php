<?php

require_once __DIR__ . '/../core/Database.php';


enum Plano: string {
    case BASICO = 'Simples';
    case PREMIUM = 'Médio';
    case VIP = 'Terminator';
}

enum Status: string {
    case Ativo = 'Ativo';
    case Inativo = 'Inativo';
}

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

     public function addUser(string $nome, string $cpf, Plano $plano, Status $status) {
      
        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            "INSERT INTO Usuarios (nome, cpf, plano, status) VALUES (:nome, :cpf, :plano, :status)"
        );

        $stmt->execute([
            'nome' => $nome,
            'cpf' => $cpf,
            'plano' => $plano->value,
            'status' => $status->value
        ]);
    }

    public static function getById(int $id) {
        $pdo = Database::connect();

        $stmt = $pdo->prepare("SELECT * FROM Usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAll() {
        $pdo = Database::connect();
        $stmt = $pdo->query('SELECT * FROM Usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function update($id, $nome, $cpf, $plano, $status) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare('UPDATE Usuarios SET nome=?, cpf=?, plano=?, status=? WHERE id=?');
        $stmt->execute([$nome, $cpf, $plano, $status, $id]);
    }


    public static function delete(int $id):bool{
        $pdo = Database::connect();

        $stmt = $pdo->prepare("DELETE FROM Usuarios WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }


}


