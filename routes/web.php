<?php
use App\Controllers\HomeController;
use App\Controllers\AuthController;
$router->get('/',[HomeController::class,'index']); 
$router->get('/lienhe',[HomeController::class,'lienhe']); 
$router->get('/gioithieu',[HomeController::class,'gioithieu']); 
$router->get('/sanpham',[HomeController::class,'sanpham']); 
$router->get('/sanpham/danhmuc/{categories_id}',[HomeController::class,'sanpham']);   
$router->get('sanpham/{id}', [HomeController::class, 'chitiet']);

$router->get('/about',function(){
    return "ABOUT US";
});
$router->get("/detail/{id}", function($id){
    return "Post Detail is $id";
})  ;
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'postlogin']);
$router->get('/register', [AuthController::class, 'register']);
$router->post('/register', [AuthController::class, 'store']);
$router->get('/logout', [AuthController::class, 'logout']);


