<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Tin Tức</title>
</head>
<body>
    <h1>Danh Sách Tin Tức</h1>
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
</body>
</html>
