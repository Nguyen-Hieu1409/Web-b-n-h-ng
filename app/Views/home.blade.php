@extends('layout')

@section('title')
    Trang chủ
@endsection
<style>
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
    .why-choose-us {
    text-align: center;
    padding: 40px 20px;
    background-color: #f8f8f8;
    margin-top: 40px;
}

.why-choose-us h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

.reasons {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    flex-wrap: wrap;
}

.reason {
    background: white;
    padding: 20px;
    border-radius: 8px;
    width: 30%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.reason img {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
}

.reason h3 {
    color: #222;
    font-size: 20px;
    margin-bottom: 10px;
}

.reason p {
    font-size: 14px;
    color: #555;
}

</style>
@section('content')
<div class="container">

    
    <img src="./image/abn2.png" alt="" >
    <div class="why-choose-us">
        <h2>Tại sao chọn sản phẩm của chúng tôi?</h2>
        <div class="reasons">
            <div class="reason">
                <img src="./image/anam2.png" alt="Chất lượng cao">
                <h3>Chất lượng cao</h3>
                <p>Sản phẩm chính hãng, bảo hành dài hạn, độ bền vượt trội.</p>
            </div>
            <div class="reason">
                <img src="./image/anam1.png" alt="Dịch vụ khách hàng">
                <h3>Dịch vụ khách hàng</h3>
                <p>Hỗ trợ tận tình 24/7, cam kết đem lại trải nghiệm tốt nhất.</p>
            </div>
            <div class="reason">
                <img src="./image/anam3.png" alt="Giao hàng nhanh">
                <h3>Giao hàng nhanh</h3>
                <p>Vận chuyển nhanh chóng, đảm bảo đến tay khách hàng an toàn.</p>
            </div>
        </div>
    </div>
    <h1>Sản phẩm của chúng tôi</h1>
    
    {{-- 1 --}}
        
    
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
@endsection