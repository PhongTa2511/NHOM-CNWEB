<?php
require_once 'models/News.php';

class HomeController {
    private $newsModel;
    private $db;

    public function __construct() {
        // Kết nối trực tiếp tới cơ sở dữ liệu
        $this->db = new mysqli("localhost", "username", "password", "TINTUC");
        if ($this->db->connect_error) {
            die("Kết nối thất bại: " . $this->db->connect_error);
        }
        
        $this->newsModel = new News($this->db);
    }

    public function index() {
        // Kiểm tra từ khóa tìm kiếm
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $newsList = $this->newsModel->getAllNews($keyword);
        require 'views/home/index.php';
    }
}
?>
