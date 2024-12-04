<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    $sql = "INSERT INTO articles (title, content, image) VALUES ('$title', '$content', '$image')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Thêm bài viết mới</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Link ảnh (tuỳ chọn)</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
