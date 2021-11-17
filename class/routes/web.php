<?php
$router->get('/', function () use ($router) {
   
    return "Hello from Lumen side";
});

$router->get('Validate/{id}',['middleware'=>'CheckUser','uses'=>'Controller@show']);


 $router->group(['middleware' => ['UserPermission:200']], function () use ($router) 
 {
    $router->get('/teachers', '\App\Http\Controllers\Controller@show1');
    
    $router->get('/courses', '\App\Http\Controllers\CourseController@index');
    $router->get('/courses/{id}', '\App\Http\Controllers\CourseController@show11'); 
    $router->get('/teachers', '\App\Http\Controllers\TeacherController@index');
    $router->get('/teachers/{id}', '\App\Http\Controllers\CourseController@show11'); 
    $router->post('/teachers', '\App\Http\Controllers\TeacherController@store'); 
});