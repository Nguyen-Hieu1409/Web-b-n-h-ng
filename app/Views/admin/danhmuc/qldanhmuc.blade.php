@extends('admin.layoutadmin')

@section('content')
<div class="container mt-4">
    <h2>Quản lý danh mục</h2>
    <a href="{{APP_URL . 'admin/qldanhmuc/create'}}" class="btn btn-sm btn-primary btn-lg mb-3">Thêm danh mục</a>

    <div class="alert alert-success" style="display: none;">Thành công</div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->ten_dm}}</td>
                <td>
                    <form action="{{APP_URL . 'admin/qldanhmuc/delete/' . $category->id}}" method="POST">
                        
                        <button type="submit" onclick="return confirm('bạn có muốn xóa không ?')"  class="btn btn-danger">
                          Xóa
                        </button>
                    </form> <br>

                    <a href="{{APP_URL . 'admin/qldanhmuc/edit/' . $category->id}}" class="btn btn-sm  btn-primary btn-lg mb-3">Sửa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table tbody tr:hover {
        background-color: #e9ecef;
    }

    .btn-sm {
        font-size: 14px;
        padding: 5px 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: white;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .table a {
        text-decoration: none; /* Xóa bỏ gạch chân */
    }
</style>
@endsection
