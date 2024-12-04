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

    public function index() {
        $rows = $this->newsModel->getAllNews();
        // print_r($news);
        require('./views/home/index.php');
    }

    public function add() {
        $categories = $this->categoryModel->getAllCategories();
        require('./views/admin/news/add.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $image = '';

            if (!empty($_FILES['image']['name'])) {
                $targetDir = "./images/";
                $image = $targetDir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $image);
            }

            $created_at = date('Y-m-d H:i:s');
            $this->newsModel->addNews($title, $content, $image, $created_at, $category_id);
            header("Location: index.php");
        }
    }
}
?>