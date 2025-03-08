@extends('layout')
@section('content')
<div class="product">
    <div class="product-image">
        <p>
            <img src="{{APP_URL . $products->anh}}" alt="" >
        </p>
    </div>
    <div class="product-details">
        <Strong> Tên:<h2 class="product-title">{{$products->ten}}</h2></Strong>
      <Strong>Giá:<p class="product-price">{{$products->gia}} $</p></Strong>
      
      <p class="product-description">
        {{$products->mota}}
      </p>
      <ul class="product-specifications">
      {{$products->thongso}}
      </ul>

      <button class="buy-now">Mua ngay</button>
    </div>
    
  </div>
  <style>
    /* Reset mặc định cho trang web */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

/* Container chính */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header & Menu */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #383030;
    color: #fff;
}

header ul {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

header ul li {
    margin: 0 10px;
}

header ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    transition: 0.3s;
}

header ul li a:hover {
    color: #00bcd4;
}

.menu-right ul {
    justify-content: flex-end;
}

/* Sản phẩm */
.product {
    display: flex;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-image img {
    max-width: 250px;
    border-radius: 8px;
}

.product-details {
    margin-left: 20px;
    flex: 1;
}

.product-title {
    font-size: 1.5rem;
    color: #333;
}

.product-price {
    font-size: 1.2rem;
    color: #e63946;
}

.product-description {
    font-size: 1rem;
    color: #555;
    margin: 10px 0;
}

.product-specifications {
    list-style: none;
    padding: 0;
}

.product-specifications li {
    font-size: 0.95rem;
    margin-bottom: 5px;
}

.buy-now {
    background: #1d3557;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.buy-now:hover {
    background: #457b9d;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px 0;
    background-color: rgb(26, 24, 24);
    color: white;
    margin-top: 20px;
    border-radius: 8px;
}

  </style>
@endsection