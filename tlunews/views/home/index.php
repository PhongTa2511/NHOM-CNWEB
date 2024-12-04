<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Tin Tức</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #e3e4e8; 
            color: #2c3e50; 
        }

        header {
            background-color: #34495e; 
            color: white;
            padding: 15px 0;
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        .login-btn {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px 20px;
            background: #e67e22; 
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        .login-btn:hover {
            background: #d35400; 
        }

        nav {
            background-color: #2c3e50; 
            display: flex;
            justify-content: space-between; /* Thay đổi từ center sang space-between */
            align-items: center;
            padding: 10px 20px; /* Thêm padding để có không gian cho tìm kiếm */
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
        }

        nav a:hover {
            color: #e67e22; 
        }

        /* Ô tìm kiếm và nút tìm kiếm */
        .search-container {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
            width: 200px; /* Độ rộng của ô tìm kiếm */
        }

        .search-btn {
            padding: 8px 16px;
            background-color: #e67e22;
            color: white;
            border: none;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-btn:hover {
            background-color: #d35400;
        }

        .main-content {
            display: flex;
            justify-content: space-between;
            margin: 30px 10%;
        }

        .main-content .left, .main-content .right {
            width: 48%;
        }

        .main-content h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .article {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .article img {
            width: 100%; 
            height: 200px;
            object-fit: cover; 
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .article h3 {
            font-size: 22px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .article p {
            font-size: 16px;
            color: #7f8c8d;
        }

        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                margin: 20px 5%;
            }

            .main-content .left, .main-content .right {
                width: 100%;
                margin-bottom: 20px;
            }

            .login-btn {
                width: 100%;
            }

            .search-input {
                width: 150px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Trang Web Tin Tức</h1>
        <a href="admin-login.php" class="login-btn">Đăng Nhập Admin</a>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <div>
            <a href="#">Trang Chủ</a>
            <a href="#">Tin Tức Mới</a>
            <a href="#">Chuyên Mục</a>
            <a href="#">Liên Hệ</a>
        </div>

        <!-- Thêm phần tìm kiếm -->
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Tìm kiếm...">
            <button class="search-btn">Tìm</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="left">
            <div class="article">
                <img src="https://via.placeholder.com/800x200" alt="Tin Tức 1">
                <h3>Bài Viết Mới Nhất 1</h3>
                <p>Đây là một bài viết mẫu về tin tức mới nhất. Chúng tôi cập nhật thường xuyên các thông tin nóng hổi và thú vị.</p>
            </div>

            <div class="article">
                <img src="https://via.placeholder.com/800x200" alt="Tin Tức 2">
                <h3>Bài Viết Mới Nhất 2</h3>
                <p>Tiếp theo là một bài viết khác, sẽ mang lại cho bạn những thông tin cập nhật đáng chú ý trong ngày.</p>
            </div>
        </div>

        <div class="right">
            <div class="article">
                <img src="https://via.placeholder.com/800x200" alt="Tin Tức 3">
                <h3>Bài Viết Mới Nhất 3</h3>
                <p>Chúng tôi cung cấp những bài viết chi tiết về các sự kiện nóng, bạn sẽ không bỏ lỡ bất kỳ thông tin nào.</p>
            </div>

            <div class="article">
                <img src="https://via.placeholder.com/800x200" alt="Tin Tức 4">
                <h3>Bài Viết Mới Nhất 4</h3>
                <p>Hãy cùng đọc thêm các bài viết cập nhật với nội dung phong phú và hấp dẫn, phù hợp với tất cả người đọc.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Trang Web Tin Tức. Tất cả quyền được bảo vệ.</p>
    </footer>

</body>
</html>
