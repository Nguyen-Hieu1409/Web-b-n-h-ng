@extends('admin.layoutadmin')
@section('title','Thêm danh mục')
@section('content')
<div class="container">
    <h2 class="title">Sửa danh mục</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="ten_dm">Tên danh mục</label>
            <input type="text" id="ten_dm" name="ten_dm" class="form-control" placeholder="Nhập tên danh mục" value="{{$category->ten_dm}}">
        </div>
        <button type="submit" class="btn-submit">Sửa</button>
    </form>
</div>
@endsection