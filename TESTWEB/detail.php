<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tin Tức</title>
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
            padding: 20px;
        }

        header {
            background-color: #34495e;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        .back-btn {
            padding: 10px 20px;
            background: #e67e22;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .back-btn:hover {
            background: #d35400;
        }

        .article-detail {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .article-detail img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .article-detail h2 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .article-detail p {
            font-size: 18px;
            color: #7f8c8d;
            line-height: 1.6;
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
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Chi Tiết Tin Tức</h1>
    </header>

    <!-- Article Detail -->
    <div class="article-detail">
        <img src="<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
        <h2><?= htmlspecialchars($news['title']) ?></h2>
        <p><small>Ngày đăng: <?= date('d/m/Y', strtotime($news['created_at'])) ?></small></p>
        <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
        <a href="index.php" class="back-btn">Quay lại</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Trang Web Tin Tức. Tất cả quyền được bảo vệ.</p>
    </footer>

</body>
</html>
