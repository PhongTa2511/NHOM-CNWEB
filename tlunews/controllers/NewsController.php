<?php
require('./models/News.php');
require('./models/Category.php');

class NewsController {
    private $newsModel;
    private $categoryModel;

    public function __construct($db) {
        $this->newsModel = new NewsModel($db);
        $this->categoryModel = new CategoryModel($db);
    }

    public function delete($id) {
        $this->newsModel->deleteNews($id);
        header("Location: index.php"); // Quay lại danh sách bài viết
    }
    
}
?>