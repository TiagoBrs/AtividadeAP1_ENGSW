<?php

class Controller{   
public function view($view, $data = []) {
        // Extrai dados do array para variáveis, se quiser passar dados para a view
        extract($data);

        // Inclui a view correta
       require_once "../App/views/" . $view;
    }

}
?>