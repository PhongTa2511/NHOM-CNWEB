<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control {
            border-radius: 4px;
        }
        .btn-success {
            width: 100%;
            padding: 12px;
        }
        .btn-secondary {
            width: 100%;
            padding: 12px;
        }
        .btn-group {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Thêm bài viết</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" name="title" class="form-control" required placeholder="Nhập tiêu đề bài viết">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea id="content" name="content" class="form-control" rows="5" required placeholder="Nhập nội dung bài viết"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Danh mục</label>
            <input type="text" id="category" name="category" class="form-control" required placeholder="Nhập danh mục bài viết">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Hình ảnh</label>
            <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
        </div>

        <div class="btn-group mb-3" role="group">
            <button type="submit" class="btn btn-success">Thêm bài viết</button>
            <a href="index.php" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control {
            border-radius: 4px;
        }
        .btn-success {
            width: 100%;
            padding: 12px;
        }
        .btn-secondary {
            width: 100%;
            padding: 12px;
        }
        .btn-group {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Thêm bài viết</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" name="title" class="form-control" required placeholder="Nhập tiêu đề bài viết">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea id="content" name="content" class="form-control" rows="5" required placeholder="Nhập nội dung bài viết"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Danh mục</label>
            <input type="text" id="category" name="category" class="form-control" required placeholder="Nhập danh mục bài viết">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Hình ảnh</label>
            <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
        </div>

        <div class="btn-group mb-3" role="group">
            <button type="submit" class="btn btn-success">Thêm bài viết</button>
            <a href="index.php" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
