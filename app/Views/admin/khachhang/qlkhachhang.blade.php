@extends('admin.layoutadmin')

@section('title', 'Quản Lý Khách Hàng')

@section('content')
    <h2>Quản Lý Khách Hàng</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Email</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
           
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td><button>Chỉnh sửa</button> <button>Xóa</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
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
    border: none;
    border-radius: 4px;
}

button:nth-child(1) {
    background-color: #ffc107; /* Màu vàng cho "Chỉnh sửa" */
    color: white;
}

button:nth-child(2) {
    background-color: #dc3545; /* Màu đỏ cho "Xóa" */
    color: white;
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
