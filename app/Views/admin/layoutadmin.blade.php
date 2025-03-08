<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Trang Quản Lý Admin')</title>
    <link rel="stylesheet" href="{{APP_URL . '/css/style.css'}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        header {
            background-color: #333;
            color: white;
            padding: 15px;
        }
        header ul {
            list-style: none;
            padding: 0;
        }
        header ul li {
            display: inline;
            margin-right: 20px;
        }
        header ul li a {
            color: white;
            text-decoration: none;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    
        <header>
            
            <div class="menu-left">
                <ul>
                    <li><a href="http://localhost/php2_wd19306/asm/admin/qlsanpham">Quản Lý Sản Phẩm</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/admin/qlkhachhang">Quản Lý Khách Hàng</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/admin/qldanhmuc">Quản Lý Danh Mục</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/">Trang Người Dùng</a></li>
                </ul>
            </div>
        </header>
        <strong>{{$_SESSION['user']->username ?? ''}}</strong>
        <a href="{{APP_URL . 'logout'}}">Logout</a>
        <div class="content">
            @yield('content')
        </div>

        
    </div>
</body>
</html>
