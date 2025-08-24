<?php
require_once __DIR__ . '/../models/Login.php';

class AdminController {
    public function login() {
        if (isset($_GET['erro'])) {
    $erro = $_GET['erro'];
} else {
    $erro = '';
}
        require '../App/views/home/Login.php'; 
    }

    public function login_admin() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $admin = Login::getByEmail($email);

            if ($admin && $senha === $admin['senha']) {
             
                 $_SESSION['admin_logged_in'] = true; 
            $_SESSION['admin'] = $admin;

                // Vai direto pra home
                header("Location: index.php?action=home");
                exit;
            } else {
                header("Location: index.php?action=login_admin&erro=Credenciais inválidas");
                exit;
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?action=login_admin");
        exit;
    }


    //FUNCAO NOVA PRA VERIFICAR LOGIN
    public static function checkLogin() {
    session_start();
      if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header('Location: index.php?action=login_admin');
        exit;
    }
}

    
}
