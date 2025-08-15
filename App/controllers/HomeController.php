<?php
class HomeController extends Controller {
    public function index() {
        // Só chama a view estática
        $this->view('home/index'); 
    }
}
