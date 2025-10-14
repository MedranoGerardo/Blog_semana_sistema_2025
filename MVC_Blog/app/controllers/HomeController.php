<?php
    namespace app\Controllers;

    class HomeController {
        public function index() {
            return $this->view('HomeView', ['title' => 'Home']);
        }

        public function view($viewName, $data = []) {
            require_once("../app/views/HomeView.php");
            extract($data);
            if(file_exists("../app/views/{$viewName}.php")) {
                ob_start();
                include("../app/views/{$viewName}.php");
                $content = ob_get_clean();
                return $content;
            } else {
                echo "vista no encontrada";
            }
        }
    }

?>