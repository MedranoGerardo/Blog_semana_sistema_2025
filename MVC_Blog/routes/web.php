<?php
    // Ruta Home
    Route::get('/', 'HomeController', 'index');

    // Rutas de eventos por día
    Route::get('evento/dia1', 'EventoController', 'dia1');
    Route::get('evento/dia2', 'EventoController', 'dia2');
    Route::get('evento/dia3', 'EventoController', 'dia3');
    Route::get('evento/dia4', 'EventoController', 'dia4');
    Route::get('evento/dia5', 'EventoController', 'dia5');

    // Ruta información personal
    Route::get('info', 'InfoController', 'index');

    // Rutas de visitas
    Route::get('visitas/registro', 'VisitaController', 'mostrarFormulario');
    Route::post('visitas/guardar', 'VisitaController', 'guardar');
?>