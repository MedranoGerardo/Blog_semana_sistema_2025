<?php
    class InfoController {
        
        public function index() {
            $titulo = "Mi Información";
            
            // Datos personales (REEMPLAZAR CON TUS DATOS)
            $datosPersonales = [
                'nombre' => 'Gerardo Alexander López Medrano',
                'carnet' => 'LM20003',
                'carrera' => 'Ingeniería de Sistemas Informáticos',
                'email' => 'lm20003@ues.edu.sv',
                'foto' => '/images/perfil/mi-foto.jpg'
            ];
            
            require_once __DIR__ . '/../views/layout/header.php';
            require_once __DIR__ . '/../views/info/index.php';
            require_once __DIR__ . '/../views/layout/footer.php';
        }
    }
?>