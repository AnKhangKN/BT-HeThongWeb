<main>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div
            style="width: 100%; max-width: 500px; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h5 style="text-align: center; margin-bottom: 20px;">Đăng kí</h5>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên"
                    style="border-radius: 8px;">
                <label for="fullName">Họ và Tên</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com"
                    style="border-radius: 8px;">
                <label for="email">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="phone" placeholder="Số điện thoại"
                    style="border-radius: 8px;">
                <label for="phone">Số điện thoại</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password"
                    style="border-radius: 8px;">
                <label for="password">Mật khẩu</label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg" style="width: 100%; padding: 12px;">Đăng
                    kí</button>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <p>Đã có tài khoản? <a href="/BT-HeThongWeb/public/auth/index.php?page=login"
                        style="text-decoration: none; color: #ff5c39;">Đăng
                        nhập</a>
                </p>
            </div>
        </div>
    </div>
</main>