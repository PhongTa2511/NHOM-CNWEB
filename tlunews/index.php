<?php
// Index page hiển thị danh sách tin tức
require_once 'controllers/HomeController.php';

$controller = new HomeController();

if (isset($_GET['search'])) {
    $controller->search(); // Xử lý tìm kiếm
} else {
    $controller->index(); // Hiển thị tin tức
}
?>
