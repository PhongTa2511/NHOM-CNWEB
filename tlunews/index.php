<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/NewsController.php';

// Điều hướng yêu cầu
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch ($page) {
    case 'news':
        $controller = new NewsController();
        if ($action === 'add' || $action === 'edit') {
            die('Không được phép truy cập trực tiếp vào quản trị.');
        } elseif ($action === 'detail') {
            $controller->detail();
        } else {
            $controller->index();
        }
        break;
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
?>
