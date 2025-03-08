<?php
namespace App\Controllers\Admin;
use App\Models\User;

class QLKhachhangController {
    public function index() {
        $users = User::all();
        
        return view('admin.khachhang.qlkhachhang', compact('users'));
        // return view('admin.khachhang.qlkhachhang');
    }
}
