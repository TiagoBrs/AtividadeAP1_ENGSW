<?php

define('ROOT', __DIR__ . '/../App');

// Inclui o controller
require_once ROOT . '/core/Controller.php';
require_once ROOT . '/controllers/HomeController.php';
require_once ROOT . '/controllers/UserController.php';



$HomeController = new HomeController();
$HomeController->index();
$controller = new UserController();
$controller->add_user();

