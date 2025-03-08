@extends('admin.layoutadmin')
@section('title','Thêm danh mục')
@section('content')
<div class="container">
    <h2 class="title">Thêm danh mục</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="ten_dm">Tên danh mục</label>
            <input type="text" id="ten_dm" name="ten_dm" class="form-control" placeholder="Nhập tên danh mục" required>
        </div>
        <button type="submit" class="btn-submit">Thêm</button>
    </form>
</div>

<style>
  /* Giữ nguyên thiết kế menu */
.menu {
    background: #333;
    padding: 10px 0;
    text-align: center;
}
.menu a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
}
.menu a:hover {
    background: #555;
    border-radius: 5px;
}

/* Thiết kế form thêm danh mục */
.container {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.title {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}
.form-group {
    margin-bottom: 15px;
}
label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}
.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
.btn-submit {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}
.btn-submit:hover {
    background: #0056b3;
}
</style>
@endsection
