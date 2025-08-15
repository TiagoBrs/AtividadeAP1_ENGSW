<?php
require_once __DIR__ . '/../models/User.php';

include ROOT . '/views/home/index.html';
class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function add_user() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
           
            $plano = Plano::from($_POST['plano']);
            $status = Status::from($_POST['status']);

            $this->model->addUser($nome, $cpf, $plano, $status);
            echo "Usuário cadastrado com sucesso!";
            exit;
        }

       
    }
}
