<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Product\CreateProductController;
use App\Http\Controllers\ProductAllController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'product'], function () use ($router){
    
    /*
     * Function to load route files automatically from routers folder
     */
    $router->post('/create', CreateProductController::class); //Ruta para creado de productos
    $router->get('/all', ProductAllController::class); 


});
