<?php
require_once 'models/News.php';

class HomeController {
    public function index() {
        $newsModel = new News();
        $news = $newsModel->getAllNews();

        // Hiển thị giao diện trang chủ
        require 'views/home/index.php';
    }
}
?>

