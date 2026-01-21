<?php 
/**
 * Trang liên hệ kèm Form bảo mật @csrf
 */
?>

@extends('layouts.master')

@section('content')
    <div class="contact-container">
        <h2>Liên hệ với tôi</h2>
        <p>Nếu bạn có bất kỳ thắc mắc nào, hãy để lại thông tin:</p>
        
        <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
            {{-- Thẻ bảo mật bắt buộc trong Laravel --}}
            @csrf 
            
            <label>Họ và tên:</label>
            <input type="text" name="name" placeholder="Nhập họ tên của bạn..." style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            
            <label>Email liên lạc:</label>
            <input type="email" name="email" placeholder="Ví dụ: email@example.com" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            
            <label>Nội dung:</label>
            <textarea name="message" placeholder="Bạn muốn nhắn nhủ gì?" rows="5" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
            
            <button type="submit" style="padding: 12px; background: #00cec9; border: none; color: white; border-radius: 4px; cursor: pointer; font-weight: bold;">
                GỬI THÔNG TIN NGAY
            </button>
        </form>
    </div>
@endsection

<?php 
// Kết thúc file liên hệ
?>