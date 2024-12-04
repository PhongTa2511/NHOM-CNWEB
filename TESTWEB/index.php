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
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
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
            <form method="GET" action="index.php">
                <input type="text" class="search-input" name="keyword" placeholder="Tìm kiếm..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
                <button type="submit" class="search-btn">Tìm</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="left">
            <!-- Kiểm tra xem có kết quả tìm kiếm không -->
            <?php if (isset($keyword) && !empty($keyword)): ?>
                <h2>Kết quả tìm kiếm cho từ khóa: "<?= htmlspecialchars($keyword) ?>"</h2>
            <?php else: ?>
                <h2>Danh sách bài viết mới nhất</h2>
            <?php endif; ?>

            <?php if (!empty($newsList)): ?>
                <?php foreach ($newsList as $news): ?>
                    <div class="article">
                        <img src="<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                        <h3>
                            <a href="index.php?controller=news&action=detail&id=<?= $news['id'] ?>">
                                <?= htmlspecialchars($news['title']) ?>
                            </a>
                        </h3>
                        <p><small>Ngày đăng: <?= date('d/m/Y', strtotime($news['created_at'])) ?></small></p>
                        <p><?= htmlspecialchars(substr($news['content'], 0, 100)) ?>...</p>
                        <a href="index.php?controller=news&action=detail&id=<?= $news['id'] ?>" class="read-more">Xem thêm</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Không có bài viết nào được tìm thấy.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Trang Web Tin Tức. Tất cả quyền được bảo vệ.</p>
    </footer>

</body>
</html>
