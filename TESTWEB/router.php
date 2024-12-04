<?php
require_once 'config.php'; // Không cần db.php nữa
require_once 'controllers/HomeController.php';
require_once 'controllers/NewsController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller === 'home') {
    $homeController = new HomeController();
    $homeController->$action();
} elseif ($controller === 'news') {
    $newsController = new NewsController();
    $newsController->$action($_GET['id'] ?? null);
}
?>
