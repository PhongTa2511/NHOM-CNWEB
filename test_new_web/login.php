<?php
session_start();

// Kiểm tra cookie nếu người dùng đã chọn "Remember Me"
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $cookie_username = $_COOKIE['username'];
    $cookie_password = $_COOKIE['password'];

    // Xác thực cookie (cần thay đổi điều kiện xác thực nếu sử dụng hash/token thực tế)
    if ($cookie_username === 'admin' && $cookie_password === 'password') {
        $_SESSION['admin'] = true;
        header('Location: admin.php'); // Tự động chuyển đến trang quản trị
        exit;
    }
}

// Xử lý khi gửi form đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);
    $errors = [];

    // Validate backend
    if (empty($username)) {
        $errors['username'] = "Tên đăng nhập không được để trống.";
    }
    if (empty($password)) {
        $errors['password'] = "Mật khẩu không được để trống.";
    }

    // Kiểm tra thông tin đăng nhập
    if (empty($errors)) {
        if ($username === 'admin' && $password === 'password') {
            $_SESSION['admin'] = true;

            // Nếu chọn "Remember Me", lưu cookie
            if ($remember) {
                setcookie('username', $username, time() + (86400 * 30), '/'); // Lưu trong 30 ngày
                setcookie('password', $password, time() + (86400 * 30), '/'); // Lưu trong 30 ngày
            } else {
                // Xóa cookie nếu không chọn "Remember Me"
                setcookie('username', '', time() - 3600, '/');
                setcookie('password', '', time() - 3600, '/');
            }

            header('Location: admin.php'); // Chuyển hướng đến trang quản trị
            exit;
        } else {
            $errors['general'] = "Tên đăng nhập hoặc mật khẩu không chính xác.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Đăng nhập</h1>
        <form method="POST" class="mx-auto" style="max-width: 400px;">
            <!-- Thông báo lỗi tổng quát -->
            <?php if (!empty($errors['general'])): ?>
                <div class="alert alert-danger"><?php echo $errors['general']; ?></div>
            <?php endif; ?>

            <!-- Nhập tên đăng nhập -->
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="username" 
                       value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" required>
                <?php if (!empty($errors['username'])): ?>
                    <div class="text-danger"><?php echo $errors['username']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Nhập mật khẩu -->
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="password" 
                       value="<?php echo htmlspecialchars($_POST['password'] ?? ''); ?>" required>
                <?php if (!empty($errors['password'])): ?>
                    <div class="text-danger"><?php echo $errors['password']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Tùy chọn "Remember Me" -->
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember" 
                       <?php echo isset($_POST['remember']) ? 'checked' : ''; ?>>
                <label for="remember" class="form-check-label">Ghi nhớ đăng nhập</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
