<?php // Mở thẻ PHP để VS Code nhận diện định dạng ?>



<?php $__env->startSection('content'); ?>
    <div class="welcome-section">
        <h2>Chào mừng bạn!</h2>
        <p>Đây là trang Portfolio cá nhân của tôi được xây dựng trên nền tảng Laravel.</p>
        <p>Tôi là một lập trình viên yêu thích công nghệ và sự sáng tạo.</p>
        
        <hr>
        
        <h3>Thông tin thêm</h3>
        <ul>
            <li><strong>Học vấn:</strong> Lập trình viên Backend</li>
            <li><strong>Kỹ năng:</strong> Laravel, PHP, MySQL</li>
            <li><strong>Mục tiêu:</strong> Xây dựng các hệ thống web mạnh mẽ</li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php // Kết thúc file ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\bt2.1\resources\views/pages/home.blade.php ENDPATH**/ ?>