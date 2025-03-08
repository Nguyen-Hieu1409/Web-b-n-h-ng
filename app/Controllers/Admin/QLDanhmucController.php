<?php
namespace App\Controllers\Admin;
use App\Models\Category;

class QLDanhMucController {
    public function index() {
        $categories = Category::all();
        return view('admin.danhmuc.qldanhmuc', compact('categories'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.danhmuc.addm');
    }

    public function store() {
        $data = $_POST;
        Category::create($data);
        return redirect('/admin/qldanhmuc');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.danhmuc.editdm', compact('category'));
    }

    public function update($id) {
        $data = $_POST;
        Category::update($data,$id);
        $category = Category::find($id);
        return view('admin.danhmuc.editdm',compact('category'));
    }

    public function destroy($id){
        category::delete($id);
        return redirect('admin/qldanhmuc');
    }
}
