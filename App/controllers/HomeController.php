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
        $this->view('home/editar_usuario.php',['usuario' => $usuario]);
    }

}
