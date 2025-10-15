<?php
    class HomeController {
        
        public function index() {
            $titulo = "Semana de Sistemas 2025";
            $descripcion = "Blog oficial de la Semana de Sistemas 2025";
            
            require_once __DIR__ . '/../views/layout/header.php';
            require_once __DIR__ . '/../views/home/index.php';
            require_once __DIR__ . '/../views/layout/footer.php';
        }
    }
?>