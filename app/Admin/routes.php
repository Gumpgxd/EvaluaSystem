<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

     $router->resource('/', TemperEvaController::class);
//    $router->resource('/', LoginController::class);
    $router->resource('temper-evas', TemperEvaController::class);
    $router->resource('system_-statuses', System_StatusController::class);
    $router->resource('userinfos', UserController::class);
    $router->resource('character_assessments', CharacterController::class);
    $router->resource('career_interest_tests', CareerIntertstController::class);
    $router->resource('career_test_types', CareerTestTypeController::class);


});
