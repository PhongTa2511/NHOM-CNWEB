<?php
require_once 'models/News.php';

class NewsController {
    public function index() {
        $newsModel = new News();
        $news = $newsModel->getAllNews();

        // Hiển thị danh sách tin tức
        require 'views/news/index.php';
    }

    public function detail() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            die('ID không hợp lệ.');
        }

        $newsModel = new News();
        $article = $newsModel->getNewsById($id);

        // Hiển thị chi tiết bài viết
        require 'views/home/index.php';
    }
}
?>
