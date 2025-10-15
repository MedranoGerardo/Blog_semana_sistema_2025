<?php
    class InfoController {
        
        public function index() {
            $titulo = "Mi Información";
            
            // Datos personales (REEMPLAZAR CON TUS DATOS)
            $datosPersonales = [
                'nombre' => 'Tu Nombre Completo',
                'carnet' => 'TU-CARNET',
                'carrera' => 'Ingeniería en Sistemas',
                'email' => 'tu.email@ejemplo.com',
                'foto' => '/images/perfil/mi-foto.jpg'
            ];
            
            require_once __DIR__ . '/../views/layout/header.php';
            require_once __DIR__ . '/../views/info/index.php';
            require_once __DIR__ . '/../views/layout/footer.php';
        }
    }
?>