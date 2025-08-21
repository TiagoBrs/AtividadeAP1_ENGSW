<?php
class HomeController extends Controller {
    public function index() {
        require_once '../App/models/User.php';
        $usuarios = User::getAll();
        $this->view('home/index.php', ['usuarios' => $usuarios]); 
    }
      public function cadastro() {
          $this->view('home/cadastrar_cliente.php');
    }

    public function editar($id) {
        $usuario = User::getById($id);
        $this->view('home/editar_usuario.php',[
            'usuario' => $usuario
        ]);
    }

    public function atualizar() {
        require_once '../App/models/User.php';
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $plano = $_POST['plano'];
        $status = $_POST['status'];

        User::update($id, $nome, $cpf, $plano, $status);
        header('Location: index.php');
        exit;
    }
    public function excluir($id){
        require_once '../App/models/User.php';

        User::delete($id);

        // Redireciona de volta para a lista
        header('Location: index.php?action=home');
        exit;
    }
}
