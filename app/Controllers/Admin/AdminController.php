<?php
namespace App\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;
// use App\Admin\QLSanphamController;
class AdminController {
    public function index(){
      return view('admin.admin');
    }
    
   
}