@extends('layout')
@section('title')
    Sản Phẩm
@endsection
@section('content')
<div class="contaier"> 
   
    <img src="./image/abn2.png" alt="" style="margin: 10px 0 0 ">
     
    <h1>Danh sách sản Phẩm</h1>
        <div class="danhmuc">
            
        <label for="" class="form-label"></label>
          
                @foreach ($categories as $cate)
                <div class="in-sidebar">
                    <a href="{{ APP_URL . 'sanpham/danhmuc/' . $cate->id }}">
                        <div class="name"><button class="btn btn-primary">{{ $cate->ten_dm }}</button></div>
                    </a>
                </div>
                @endforeach
         
        </div>
        <h2>Danh sách</h2>
        <div class="sanpham">
            @foreach ($products as $product)
            <div class="sp1">
                <p>
                    <img src="{{APP_URL . $product->anh}}" alt="" >
                </p>
                 <p>{{$product->ten}}</p>
                 <p>{{$product->gia}} $</p>
                 <a href="{{ APP_URL . 'sanpham/' . $product->id }}"><button>Mua Ngay</button></a>
    
                 
            </div>
            @endforeach 
        </div>
 
       
        
</div>
<style>
    .danhmuc {
    display: flex;
    flex-wrap: wrap; /* Cho phép xuống dòng nếu không đủ chỗ */
    gap: 10px; /* Khoảng cách giữa các danh mục */
    margin-bottom: 20px; /* Khoảng cách dưới */
}

.in-sidebar {
    display: inline-block;
}

.in-sidebar a {
    text-decoration: none; /* Xóa gạch chân */
}

.in-sidebar .btn {
    background-color: #007bff;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.in-sidebar .btn:hover {
    background-color: #0056b3;
}

      .sanpham {
    display: flex;
    flex-wrap: wrap; /* Cho phép các sản phẩm xuống dòng khi không đủ không gian */
    justify-content: space-between; /* Canh đều khoảng cách giữa các sản phẩm */
    gap: 20px; /* Tạo khoảng cách giữa các sản phẩm */
}

.sp1 {
    width: calc(33.333% - 20px); /* Chia thành 3 cột, trừ khoảng cách giữa các sản phẩm */
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.sp1 img {
    width: 100%;
    max-height: 500px; /* Định kích thước tối đa cho ảnh */
    object-fit: cover; /* Cắt ảnh nếu vượt kích thước */
}

.sp1 button {
    background-color: #ff6600;
    color: white;
    border: none;
    padding: 10px 15px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.sp1 button:hover {
    background-color: #e65c00;
}

/* Đảm bảo sản phẩm hiển thị tốt trên thiết bị nhỏ hơn */
@media (max-width: 1024px) {
    .sp1 {
        width: calc(50% - 20px); /* 2 cột trên màn hình nhỏ hơn */
    }
}

@media (max-width: 600px) {
    .sp1 {
        width: 100%; /* 1 cột trên điện thoại */
    }
}
.sp1 p:last-of-type {
    color: #ff0000; /* Màu đỏ cho giá */
    font-weight: bold;
}
</style>

@endsection