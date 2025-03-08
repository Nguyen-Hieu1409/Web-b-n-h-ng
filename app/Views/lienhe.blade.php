@extends('layout')
@section('title')
    Liên hệ
@endsection

@section('content')
    <h1>Liên hệ với chúng tôi</h1>
    <div class="contact-info">
        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn. Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi qua các phương thức dưới đây:</p>
        <ul>
            <li><strong>Địa chỉ:</strong> Cao Đẳng FPOLY</li>
            <li><strong>Điện thoại:</strong> 123456JQKA</li>
            <li><strong>Email:</strong> support@donghomoi.com</li>
        </ul>
        <p>Hoặc bạn có thể điền vào biểu mẫu liên hệ dưới đây, chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.</p>

        <form action="#" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="email" name="email" placeholder="Email của bạn" required>
            <textarea name="message" placeholder="Nội dung câu hỏi" required></textarea>
            <button type="submit" class="submit-btn">Gửi</button>
        </form>
    </div>
@endsection