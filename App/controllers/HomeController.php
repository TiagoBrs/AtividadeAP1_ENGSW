<?php
class HomeController extends Controller {
    public function index() {
        $this->view('home/index.php'); 
    }
      public function cadastro() {
        $this->view('home/cadastrar_cliente.html'); 
    }
}
