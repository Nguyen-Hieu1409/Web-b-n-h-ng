<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
class HomeController{
    public function index()
    {
        $categories = Category::all();
        $products = Product::select(['products.*', 'ten_dm'])
        ->join('products', 'categories' , 'categories_id','id')
        ->get();
        
        return view('home',compact('products','categories'));
    }
    public function lienhe(){
        return view('lienhe');
    }
    public function gioithieu(){
        return view('gioithieu');
    }
    public function sanpham($categories_id = null){
        // $categories = Category::all();
        // $products = Product::select(['products.*', 'ten_dm'])
        // ->join('products', 'categories' , 'categories_id','id')
        // ->get();
        // return view('sanpham',compact('products','categories'));
        if ($categories_id) {
            $products = Product::where('categories_id', '=', $categories_id)->get();
        } else {
            $products = Product::all();
        }
        $categories = Category::all();

        return view('sanpham', compact('products', 'categories'));
    }
    
    public function chitiet($id) {
        $products = Product::find($id);
        return view('chitiet', compact('products'));
    }
    
   
    
 
}

