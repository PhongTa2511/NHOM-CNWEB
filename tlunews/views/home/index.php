<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <h1>Trang Chủ</h1>

    <!-- Nếu có biến $article thì hiển thị chi tiết -->
    <?php if (isset($article)): ?>
        <h2><?php echo $article['title']; ?></h2>
        <p><strong>Chuyên mục:</strong> <?php echo $article['category_name']; ?></p>
        <p><strong>Ngày:</strong> <?php echo $article['created_at']; ?></p>
        <p><?php echo nl2br($article['content']); ?></p>
        <a href="index.php">Quay lại Trang Chủ</a>
    <?php else: ?>
        <!-- Danh sách tin tức -->
        <h2>Danh Sách Tin Tức</h2>
        <?php if (!empty($news)): ?>
            <ul>
                <?php foreach ($news as $article): ?>
                    <li>
                        <a href="index.php?page=news&action=detail&id=<?php echo $article['id']; ?>">
                            <?php echo $article['title']; ?>
                        </a>
                        <p><strong>Chuyên mục:</strong> <?php echo $article['category_name']; ?></p>
                        <p><strong>Ngày:</strong> <?php echo $article['created_at']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Không có tin tức nào.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
