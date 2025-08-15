<?php

// Carrega a classe base Controller
require_once '../App/core/Controller.php';

// Carrega o HomeController
require_once '../App/controllers/HomeController.php';

// Cria o controller e chama o método index
$controller = new HomeController();
$controller->index();

?>