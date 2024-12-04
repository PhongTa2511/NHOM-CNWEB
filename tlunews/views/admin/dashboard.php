<?php
session_start();

// Kiểm tra xem admin đã đăng nhập chưa
if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php?controller=admin&action=login');
    exit();
}

// Xử lý đăng xuất khi người dùng nhấn "Logout"
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: index.php?controller=admin&action=login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }

        .logout-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .logout-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo isset($_SESSION['admin_username']) ? htmlspecialchars($_SESSION['admin_username']) : 'Admin'; ?>!</h2>
        <p>You are logged in as an admin.</p>
        <a href="?action=logout" class="logout-button">Logout</a>
    </div>
</body>
</html>
