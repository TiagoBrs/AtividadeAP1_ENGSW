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
}

