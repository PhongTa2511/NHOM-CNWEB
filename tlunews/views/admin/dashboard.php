
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa; /* Nền sáng nhưng nhẹ nhàng */
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3d3d3d; /* Màu xám đậm */
            font-size: 28px;
            text-align: center;
        }

        p {
            color: #666; /* Màu xám trung tính */
            font-size: 16px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
        }

        table th {
            background: #6c7a89; /* Màu xám ấm cho header */
            color: white;
        }

        table tr:nth-child(even) {
            background: #f5f5f5; /* Màu nền sáng cho các dòng chẵn */
        }

        table tr:nth-child(odd) {
            background: #ffffff; /* Màu nền trắng cho các dòng lẻ */
        }

        a {
            text-decoration: none;
            color: #2980b9; /* Màu xanh dịu dàng */
        }

        a:hover {
            color: #1abc9c; /* Màu xanh lá nhẹ khi hover */
        }

        .logout-btn {
            display: inline-block;
            padding: 12px 25px;
            background: #e67e22; /* Màu cam ấm cho nút đăng xuất */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            margin-top: 30px;
            width: 100%;
        }

        .logout-btn:hover {
            background: #d35400; /* Màu cam đậm khi hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h1>
        <p>Bạn đang ở Dashboard Admin.</p>
        <a class="logout-btn" href="index.php?controller=admin&action=logout">Đăng xuất</a>

        <h2 style="text-align: center; color: #3d3d3d;">Danh sách tài khoản Admin</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Hành động</th>
            </tr>
            <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?php echo $admin['id']; ?></td>
                    <td><?php echo $admin['username']; ?></td>
                    <td>
                        <a href="index.php?controller=admin&action=deleteAdmin&id=<?php echo $admin['id']; ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
