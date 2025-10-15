<?php
class EventoController {
    
    public function dia1() {
        // IMPORTANTE: Definir variables ANTES de incluir header
        $titulo = "Día 1 - Inauguración";
        $dia = 1;
        $fecha = "Lunes 13 de Octubre, 2025";
        
        // Ahora sí incluir las vistas
        require_once __DIR__ . '/../views/layout/header.php';
        require_once __DIR__ . '/../views/eventos/dia1.php';
        require_once __DIR__ . '/../views/layout/footer.php';
    }
    
    public function dia2() {
        $titulo = "Día 2 - Talleres";
        $dia = 2;
        $fecha = "Martes 14 de Octubre, 2025";
        
        require_once __DIR__ . '/../views/layout/header.php';
        require_once __DIR__ . '/../views/eventos/dia2.php';
        require_once __DIR__ . '/../views/layout/footer.php';
    }
    
    public function dia3() {
        $titulo = "Día 3 - Talleres Prácticos";
        $dia = 3;
        $fecha = "Miércoles 15 de Octubre, 2025";
        
        require_once __DIR__ . '/../views/layout/header.php';
        require_once __DIR__ . '/../views/eventos/dia3.php';
        require_once __DIR__ . '/../views/layout/footer.php';
    }
    
    public function dia4() {
        $titulo = "Día 4 - Competencias y Actividades";
        $dia = 4;
        $fecha = "Jueves 16 de Octubre, 2025";
        
        require_once __DIR__ . '/../views/layout/header.php';
        require_once __DIR__ . '/../views/eventos/dia4.php';
        require_once __DIR__ . '/../views/layout/footer.php';
    }
    
    public function dia5() {
        $titulo = "Día 5 - Clausura";
        $dia = 5;
        $fecha = "Viernes 17 de Octubre, 2025";
        
        require_once __DIR__ . '/../views/layout/header.php';
        require_once __DIR__ . '/../views/eventos/dia5.php';
        require_once __DIR__ . '/../views/layout/footer.php';
    }
}

?>