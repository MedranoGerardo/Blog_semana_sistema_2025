<?php
    require_once __DIR__ . '/../../../conexionphp/database.php';

    class VisitaController {
        
        public function mostrarFormulario() {
            $titulo = "Registro de Visitas";
            
            require_once __DIR__ . '/../views/layout/header.php';
            require_once __DIR__ . '/../views/visitas/registro.php';
            require_once __DIR__ . '/../views/layout/footer.php';
        }
        
        public function guardar() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
                $email = htmlspecialchars(trim($_POST['email'] ?? ''));
                $comentario = htmlspecialchars(trim($_POST['comentario'] ?? ''));
                
                if (empty($nombre) || empty($email)) {
                    $_SESSION['mensaje'] = 'Por favor completa todos los campos obligatorios';
                    $_SESSION['tipo_mensaje'] = 'error';
                    header('Location: /visitas/registro');
                    exit;
                }
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['mensaje'] = 'Por favor ingresa un email válido';
                    $_SESSION['tipo_mensaje'] = 'error';
                    header('Location: /visitas/registro');
                    exit;
                }
                
                require_once __DIR__ . '/../models/VisitaModel.php';
                $visitaModel = new VisitaModel();
                
                if ($visitaModel->crear($nombre, $email, $comentario)) {
                    $_SESSION['mensaje'] = '¡Gracias por registrar tu visita!';
                    $_SESSION['tipo_mensaje'] = 'success';
                } else {
                    $_SESSION['mensaje'] = 'Error al registrar la visita. Intenta nuevamente.';
                    $_SESSION['tipo_mensaje'] = 'error';
                }
                
                header('Location: /visitas/registro');
                exit;
            }
        }
    }
?>