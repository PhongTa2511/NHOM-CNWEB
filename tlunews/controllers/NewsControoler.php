<?php
include 'models/News.php';

class NewsController {
    public function index() {
        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        include 'views/news/index.php';
    }

    public function detail($id) {
        $newsModel = new News();
        $newsDetail = $newsModel->getNewsById($id);
        include 'views/news/detail.php';
    }
}
?>
