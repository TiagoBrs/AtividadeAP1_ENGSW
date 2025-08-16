<?php
// index.php (Front Controller)
define('ROOT', __DIR__ . '/../App');

require_once ROOT . '/core/Controller.php';
require_once ROOT . '/controllers/HomeController.php';
require_once ROOT . '/controllers/UserController.php';

// Verifica a rota via query string
$action = $_GET['action'] ?? 'home';

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
        $controller = new HomeController();
        $controller->atualizar();
        break;

    default:
        echo "Página não encontrada!";
}
