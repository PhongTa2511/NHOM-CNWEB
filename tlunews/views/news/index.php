<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Tin Tức</title>
</head>
<body>
    <h1>Danh Sách Tin Tức</h1>
    <ul>
        <?php foreach ($newsList as $news): ?>
            <li>
                <a href="index.php?controller=news&action=detail&id=<?= $news['id'] ?>">
                    <?= $news['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
