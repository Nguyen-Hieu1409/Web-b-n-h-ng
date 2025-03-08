@extends('admin.layoutadmin')
@section('title','Thêm sản phẩm')
@section('content')
    <div class="container">
        <h2>Thêm Sản Phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="product_name">Tên Sản Phẩm:</label>
            <input type="text" id="ten" name="ten" >
            
            <label for="price">Giá:</label>
            <input type="number" id="gia" name="gia" >
            
            <label for="description">Mô tả:</label>
            <textarea id="mota" name="mota" ></textarea>
            
            <label for="" class="form-label">anh</label>
            <input type="file" name="anh" id="" class="form-control">

            <div class="mb-3">
                <label for="" class="form-label">Thương hiệu</label>
                <select name="categories_id" id="" class="form-control">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}">
                            {{ $cate->ten_dm }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <label for="specifications">Thông số:</label>
            <textarea id="thongso" name="thongso" ></textarea>
            
            <button type="submit">Thêm sản phẩm</button>
        </form>
    </div>
    
    <style>
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input, textarea {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
@endsection
