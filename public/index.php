<?php
<<<<<<< HEAD
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
    default:
        echo "Página não encontrada!";
}
=======
// Caminho para a view
$viewPath = __DIR__ . '/../App/views/home/index.php';

if (file_exists($viewPath)) {
    require $viewPath;
} else {
    echo "View não encontrada: $viewPath";
}
?>
>>>>>>> 0802967c223783ce7fe01556d0d5b4fe592bf213
