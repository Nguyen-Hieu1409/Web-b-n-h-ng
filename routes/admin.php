<?php
use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\QLSanPhamController;
use App\Controllers\Admin\QLDanhMucController;
use App\Controllers\Admin\QLKhachhangController;
$router->filter('admin', function(){
    if(!isset($_SESSION['user']))
    {
        redirect('login');

        return false;
    }
});
$router->group(['before'=>'admin'], function($router){
    $router->group(['prefix' => 'admin'], function ($router) {

        // Trang chính Admin
        $router->get('/', [AdminController::class, 'index']); 
    
        // Quản lý Sản phẩm
        $router->get('qlsanpham', [QLSanPhamController::class, 'index']);
        $router->get('qlsanpham/create', [QLSanPhamController::class, 'create']);
        $router->post('qlsanpham/create', [QLSanPhamController::class, 'store']);
        $router->get('qlsanpham/edit/{id}', [QLSanPhamController::class, 'edit']);
        $router->post('qlsanpham/edit/{id}', [QLSanPhamController::class, 'update']);
        $router->post('qlsanpham/update/{id}', [QLSanPhamController::class, 'update']);
        $router->post('qlsanpham/delete/{id}', [QLSanPhamController::class, 'destroy']);
    
        // Quản lý Khách hàng
        $router->get('qlkhachhang', [QLKhachhangController::class, 'index']);  
    
        // Quản lý Đơn hàng 
        $router->get('qldonhang', [AdminController::class, 'qldonhang']);  
    
        // Quản lý Danh mục
        $router->get('qldanhmuc', [QLDanhMucController::class, 'index']);
        $router->get('qldanhmuc/create', [QLDanhMucController::class, 'create']);
        $router->post('qldanhmuc/create', [QLDanhMucController::class, 'store']);
        $router->get('qldanhmuc/edit/{id}', [QLDanhMucController::class, 'edit']);
        $router->post('qldanhmuc/edit/{id}', [QLDanhMucController::class, 'update']);
        $router->post('qldanhmuc/delete/{id}', [QLDanhMucController::class, 'destroy']);
    
    });
    
});

