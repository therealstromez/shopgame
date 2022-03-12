<div class="col-md-3">
    <h5 class="text-uppercase">Menu tài khoản</h5>
    <div class="list-group mt-4">
        <a href="/user/profile" class="list-group-item list-group-item-action <?php echo (isCurrentUrl('/user/profile')) ? 'active' : ''; ?>" aria-current="true">Thông tin tài khoản</a>
        <a href="/user/change-password" class="list-group-item list-group-item-action <?php echo (isCurrentUrl('/user/change-password')) ? 'active' : ''; ?>" aria-current="true">Đổi mật khẩu</a>
        <a href="/user/trans" class="list-group-item list-group-item-action <?php echo (isCurrentUrl('/user/trans')) ? 'active' : ''; ?>">Lịch sử giao dịch</a>
    </div>
</div>