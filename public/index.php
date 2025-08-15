<?php
// Caminho para a view
$viewPath = __DIR__ . '/../App/views/home/index.php';

if (file_exists($viewPath)) {
    require $viewPath;
} else {
    echo "View não encontrada: $viewPath";
}
?>