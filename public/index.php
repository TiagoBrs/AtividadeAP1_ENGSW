<?php
define('ROOT', __DIR__ . '/../App');

// Rota
$action = $_GET['action'] ?? 'login_admin';

// Rotas protegidas
$protected_actions = ['home', 'cadastro', 'add_user', 'editar', 'atualizar', 'excluir', 'logout_admin'];

// Inclui o AdminController primeiro
require_once ROOT . '/controllers/AdminController.php';

// Se ação protegida, verifica login antes de qualquer outra coisa
if (in_array($action, $protected_actions)) {
    AdminController::checkLogin();
}

// Agora inclui outros controllers ,antes gerava conflito por isso deixava entrar sem login
require_once ROOT . '/core/Controller.php';
require_once ROOT . '/controllers/HomeController.php';
require_once ROOT . '/controllers/UserController.php';



switch ($action) {
    case 'home':

        $controller = new HomeController();
        $controller->index();   // chama a home
        break;
    case 'cadastro':
        $controller = new HomeController();
        $controller->cadastro(); // chama cadastro de cliente
        break;

    case 'add_user':
        $controller = new UserController();
        $controller->add_user(); // cadastro via POST
        break;

    case 'editar':
        $action = $_GET['action'] ?? '';
        if ($action == 'editar' && isset($_GET['id'])) {
            (new HomeController())->editar($_GET['id']);
        } else {
            (new HomeController())->index();
        }
        break;

    case 'atualizar':
        $controller = new UserController();
        $controller->atualizar();
        break;
    case 'login_admin':
    $adminController = new AdminController();
    $adminController->login();
    break;

case 'login_admin_post':
    $adminController = new AdminController();
    $adminController->login_admin();
    break;

case 'logout_admin': //linkar
    $adminController = new AdminController();
    $adminController->logout();
    break;

        
    case 'excluir':
        $controller = new HomeController();
        $controller->excluir($_GET['id']);
        break;    


    default:
        echo "Página não encontrada!";
}
