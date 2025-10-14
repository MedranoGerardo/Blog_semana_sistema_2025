<?php
    use app\controllers\HomeController;
    use lib\Route;


    Route::get('/home', [HomeController::class, 'index']);

?>