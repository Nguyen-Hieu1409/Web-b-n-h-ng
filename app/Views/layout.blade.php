<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{APP_URL . '/css/style.css'}}">
    <!-- Bootstrap 5.3.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="menu-left">
                <ul>
                    <li><a href="http://localhost/php2_wd19306/asm/">Trang Chủ</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/sanpham">Sản Phẩm</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/gioithieu">Giới Thiệu</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/lienhe">Liên Hệ</a></li>
                   
                   
                  
                    
                </ul>   
            </div>
            <div class="menu-right">
                <ul>
                    {{-- <li><a href="http://localhost/php2_wd19306/asm/dangky">Đăng Ký</a></li>
                    <li><a href="http://localhost/php2_wd19306/asm/dangnhap">Đăng Nhập</a></li> --}}
                    <li><a href="http://localhost/php2_wd19306/asm/admin">Admin</a></li>
                </ul>
            </div>

        </header>
        @if(isset($_SESSION['user'])){
        <strong>{{$_SESSION['user']->username ?? ''}}</strong>
            <a href="{{APP_URL . 'logout'}}">Logout</a>
        }
      @endif
        
 
           @yield('content')
           <footer>
            <div class="footer-container">
                <p>&copy; 2025 Đồng Hồ Mới. All rights reserved.</p>
                <p>Liên hệ: contact@donghomoi.com | Hotline: 0123-456-789</p>
                <p>Địa chỉ: 123 Đường ABC, Hà Nội, Việt Nam</p>
            </div>
        </footer>
    </div>
</body>
</html>