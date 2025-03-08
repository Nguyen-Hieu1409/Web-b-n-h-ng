@extends('admin.layoutadmin')

@section('title', 'Quản Lý Sản Phẩm')

@section('content')
    <h2>Quản Lý Sản Phẩm</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Anh</th>
                <th>Mô tả</th>
                <th>Thương hiệu</th>
                <th>Thông số</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
             @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->ten}}</td>
                <td>{{$product->gia}}</td>
                <td>
                    <img src="{{APP_URL . $product->anh}}" alt="" width="90">
                </td>
                <td>{{$product->mota}}</td>
                <td>{{$product->ten_dm}}</td>
                <td>{{$product->thongso}}</td>
                <td>
                    <a href="{{APP_URL . 'admin/qlsanpham/edit/' . $product->id}}" class="btn btn-sm  btn-primary btn-lg mb-3">Sửa sản phẩm</a>
                    <form action="{{APP_URL . 'admin/qlsanpham/delete/' . $product->id}}" method="POST">
                        
                        <button type="submit" onclick="return confirm('bạn có muốn xóa không ?')"  class="btn btn-danger">
                          Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{APP_URL . 'admin/qlsanpham/create'}}" class="btn btn-sm  btn-primary btn-lg mb-3">Thêm Sản phẩm</a>

    <style>
  

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            padding: 6px 12px;
            margin: 0 5px;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            font-size: 16px;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
