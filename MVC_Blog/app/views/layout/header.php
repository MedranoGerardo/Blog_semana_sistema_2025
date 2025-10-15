<?php
// Helper para generar URLs relativas al front controller (index.php)
function url($path = '') {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    $path = trim($path, '/');
    if ($base === '' || $base === '.') {
        return '/index.php?url=' . ($path === '' ? '/' : $path);
    }
    return $base . '/index.php?url=' . ($path === '' ? '/' : $path);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Blog Semana de Sistemas 2025'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="<?php echo url(); ?>">Semana de Sistemas 2025</a>
            </div>
            <ul class="nav-menu">
                <li><a href="<?php echo url(); ?>">Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Eventos</a>
                    <div class="dropdown-content">
                        <a href="<?php echo url('evento/dia1'); ?>">Día 1</a>
                        <a href="<?php echo url('evento/dia2'); ?>">Día 2</a>
                        <a href="<?php echo url('evento/dia3'); ?>">Día 3</a>
                        <a href="<?php echo url('evento/dia4'); ?>">Día 4</a>
                        <a href="<?php echo url('evento/dia5'); ?>">Día 5</a>
                    </div>
                </li>
                <li><a href="<?php echo url('info'); ?>">Mi Información</a></li>
                <li><a href="<?php echo url('visitas/registro'); ?>">Registro de Visitas</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="main-content">