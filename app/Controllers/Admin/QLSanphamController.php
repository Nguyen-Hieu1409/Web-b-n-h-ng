<?php
namespace App\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;

class QLSanphamController {
    public function index() {
        $products = Product::select(['products.*', 'ten_dm'])
            ->join('products', 'categories' , 'categories_id','id')
            ->get();
        return view('admin.sanpham.qlsanpham', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.sanpham.adsp', compact('categories'));
    }

    public function store() {
        $data = $_POST; // Lấy dữ liệu từ form
        //xử lí hình ảnh
        $image="";
        $file= $_FILES['anh'];
        if($file['size']>0){
            $image= "image/". $file['name'];
            move_uploaded_file($file['tmp_name'],$image);
        }
        //thêm image vào mảng data
        $data['anh'] =$image;
        Product::create($data);
        return redirect('admin/qlsanpham');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        // dd($product);
        return view('admin.sanpham.editsp', compact('product', 'categories'));
    }

    public function update($id) {
        $product = Product::find($id);
        //lấy dữ liệu mới
        $data = $_POST;
        $file= $_FILES['anh'];
        if($file['size']>0){
            $image= "image/". $file['name'];
            move_uploaded_file($file['tmp_name'],$image);
            $data['anh'] = $image;
        }
        // xóa ảnh
        if($file['size'] >0){
            if (file_exists($product->anh) && $image != $product->anh){
                unlink($product->anh);
            }
        }
        Product::update($data,$id);
        $message="cập nhật dữ liệu thành công";
        $product= Product::find($id);
        $categories= Category::all();
        return view('admin.sanpham.editsp', compact('product','categories','message'));
    }

    public function destroy($id){
        Product::delete($id);
        return redirect('admin/qlsanpham');
    }
}
